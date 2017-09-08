<?php
class BookingModel extends CI_Model {
    
    const STATUS_REQUEST = 0;
    const STATUS_CONFIRM = 1;
    const STATUS_CANCEL = 2;
    const STATUS_COMPLETED = 3;
    const STATUS_NOSHOW = 4;
    public $id;
    public $user_id;
    public $payment;
    public $quantity;
    public $status;
    public $total;
    public $message;
    public $created;
    public $updated;
    public $refNo;
    public $product_name;
    public $sent;
    private $table = 'booking';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        try{
            $this->created = time();
            $this->updated = time();
            $this->db->insert($this->table, $this);
            return $this->db->insert_id();
        }catch (\Exception $e){
            throw $e;
        }
    }

    public function getLatest($limit = 20, $start = 0)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        $orders = $query->result();
        $result = array();
        if($orders){
            foreach ($orders as $_data){
                $model = $this->convertToModel($_data);
                $result[] = $model;
            }
        }
        return $result;
    }

    public function getById($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);

        $data = $query->result();
        return $this->convertToModel(end($data));
    }

    public function getToday(){
        $day = date('j',time());
        $month = date('n',time());
        $year = date('Y',time());
        $today = mktime(0,0,0,$month,$day,$year);
        return $this->get_data_by_date($today,$today + 86400);
    }

    public function getYesterday(){
        $day = date('j',time());
        $month = date('n',time());
        $year = date('Y',time());
        $today = mktime(0,0,0,$month,$day,$year);
        return $this->get_data_by_date($today - 86400,$today);
    }

    public function getWeek(){
        $day = date('j',time());
        $month = date('n',time());
        $year = date('Y',time());
        $today = mktime(0,0,0,$month,$day,$year);
        return $this->get_data_by_date($today - (7 * 86400),$today + 86400);
    }
    /**
     * @param $date
     * @return array
     */
    public function getByDate($from,$to)
    {
        $query = $this->db->order_by('created', 'DESC')->get_where($this->table, ['created >=' => (int)$from,'created <=' => (int)$to]);

        $data = $query->result();
        $result = array();
        if(!empty($data))
            foreach ($data as $_data){
                $result[] =$this->convertToModel($_data);
            }
        return $result;
    }

    /**
     * @return bool
     */
    public function update()
    {
        $this->updated = time();
        $this->db->where(array('id'=>$this->id));
        $update = $this->db->update($this->table, $this);
        return (boolean) $update;
    }

    /**
     * @return bool
     */
    public function delete()
    {
        $query = $this->db->delete($this->table, ['id'=>$this->id]);

        return (boolean) $query;
    }
    /**
     * @param $data
     * @return $this|BookingModel
     */
    private function convertToModel($data){
        if(empty($data)) return $this;
        $obj = clone $this;
        $obj->id = $data->id;
        $obj->user_id = $data->user_id;
        $obj->payment = $data->payment;
        $obj->quantity = $data->quantity;
        $obj->total = $data->total;
        $obj->status = $data->status;
        $obj->message = $data->message;
        $obj->created = $data->created;
        $obj->updated = $data->updated;
        $obj->refNo = $data->refNo;
        $obj->product_name = $data->product_name;
        $obj->sent = $data->sent;
        return $obj;
    }

    /**
     * @param $dataItem
     * @return float|int
     */
    public function calTotal($dataItem){
        if(empty($dataItem)) return 0;
        $total = 0;
        foreach ($dataItem as $item){
            $total +=(float) $item->total;
        }
        return $total;
    }

    /**
     * @param $dataItem
     * @return float|int
     */
    public function updateDataFromDetail($dataItem){
        if(empty($dataItem)) return 0;
        $total = 0;
        $quantity = 0;
        $productName = '';
        foreach ($dataItem as $item){
            $total +=(float) $item->total;
            $quantity +=(int) $item->quantity;
            $productName .= ($productName?';':'').$item->product_name;
        }
        $this->total = $total;
        $this->quantity = $quantity;
        $this->product_name = $productName;
        return $this;
    }

    /**
     * @param BookingModel $obj
     * @return array
     */
    public function convertToArray($obj){
        $data = array();
        $data['id'] = $obj->id;
        $data['user_id'] = $obj->user_id;
        $data['payment'] = $obj->payment;
        $data['quantity'] = $obj->quantity;
        $data['status'] = $obj->status;
        $data['total'] = $obj->total;
        $data['message'] = $obj->message;
        $data['updated'] = $obj->updated;
        $data['created'] = $obj->created;
        $data['refNo'] = $obj->refNo;
        $data['sent'] = $obj->sent;
        $data['product_name'] = $obj->product_name;
        return $data;
    }

    /**
     * @param TravellerModel $traveller
     * @param array $aDetails
     */
    public function insertAll(TravellerModel $traveller,array $aDetails = array()){
        $this->db->trans_start();
        /** @var BookingModel $booking */
        $booking = $this;
        $travellerId = $traveller->insert();
        $booking->user_id = $travellerId;
        $booking->updateDataFromDetail($aDetails);
//        $booking->updateStatusFromDetail($aDetails);
        $bkId = $booking->insert();
        $arrReduce = array();
        /** @var BookingDetailModel $itemDetail */
        foreach ($aDetails as $itemDetail){
            $itemDetail->id = null;
            $itemDetail->bkId = $bkId;
            $itemDetail->insert();
            $productDetail = new ProductDetailModel();
            if(!BookingDetailModel::statusInstant($itemDetail->status))
                continue;
            $productDetail = $productDetail->loadByProductSize(
                $itemDetail->product,
                $itemDetail->size);
            $productDetail = current($productDetail);
            $productDetail->quantity -= $itemDetail->quantity;
            $arrReduce[] = $productDetail;
        }
        /** @var ProductDetailModel $item */
        foreach ($arrReduce as $item) {
            $item->update();
        }
        $this->db->trans_complete();
        $this->db->trans_commit();
        $aProduct = array();
        $productModel = new ProductModel();
        /** @var BookingDetailModel $itemDetail */
        foreach ($aDetails as $itemDetail){
            if(in_array($itemDetail->product,$aProduct)) continue;
            $productModel->updateQuantityProduct($itemDetail->product);
            $aProduct[] = $itemDetail->product;
        }

    }

    /**
     * @param TravellerModel $traveller
     * @param array $aDetails
     */
    public function updateAll(TravellerModel $traveller,array $aDetails = array()){
        $this->db->trans_start();
        /** @var BookingModel $booking */
        $booking = $this;
        // load booking item
        $itemOld = new BookingDetailModel();
        $itemsDb = $itemOld->load($booking->id);
        if(!empty($itemsDb)){
            $productDetail = new ProductDetailModel();
            //rollback allotment
            /** @var BookingDetailModel $_item */
            foreach ($itemsDb as $_item){
                if(BookingDetailModel::statusInstant($_item->status)){
                    $productDetailCop = clone $productDetail;
                    $productDetailCop = $productDetailCop->loadByProductSizeColor($_item->product,$_item->color,$_item->size);
                    $productDetailCop->quantity += $_item->quantity;
                    $productDetailCop->update();
                }
                $_item->delete();
            }
        }
        $booking->updateDataFromDetail($aDetails);
//        $booking->updateStatusFromDetail($aDetails);
        $bkId = $booking->update();
        $bkId = $booking->getId();
        $arrReduce = array();
        /** @var BookingDetailModel $itemDetail */
        foreach ($aDetails as $itemDetail){
            $itemDetail->id = null;
            $itemDetail->bkId = $bkId;
            $itemDetail->insert();
            $productDetail = new ProductDetailModel();
            if(!BookingDetailModel::statusInstant($itemDetail->status))
                continue;
            $productDetail = $productDetail->loadByProductSizeColor(
                $itemDetail->product,
                $itemDetail->color,
                $itemDetail->size);
            $productDetail->quantity -= $itemDetail->quantity;
            $arrReduce[] = $productDetail;
        }
        /** @var ProductDetailModel $item */
        foreach ($arrReduce as $item) {
            $item->update();
        }
        $this->db->trans_complete();
        $this->db->trans_commit();
        $aProduct = array();
        $productModel = new ProductModel();
        /** @var BookingDetailModel $itemDetail */
        foreach ($aDetails as $itemDetail){
            if(in_array($itemDetail->product,$aProduct)) continue;
            $productModel->updateQuantityProduct($itemDetail->product);
            $aProduct[] = $itemDetail->product;
        }
    }

    /**
     * @param $dataItem
     * @return $this|int
     */
    public function updateStatusFromDetail($dataItem){
        if(empty($dataItem)) return 0;
        foreach ($dataItem as $item){
            if($item->status == BookingDetailModel::STATUS_CONFIRM) {
                $this->status = self::STATUS_CONFIRM;
                break;
            }
            if($item->status == BookingDetailModel::STATUS_COMPLETED) {
                $this->status = self::STATUS_COMPLETED;
                break;
            }
            if($item->status == BookingDetailModel::STATUS_CANCEL) {
                $this->status = self::STATUS_CANCEL;
                break;
            }
            if($item->status == BookingDetailModel::STATUS_REQUEST) {
                $this->status = self::STATUS_REQUEST;
                break;
            }
        }
        return $this;
    }

    /**
     * @param $id
     * @return $this
     */
    public function updateSent($id){
        $this->db->query('UPDATE booking SET sent = 1  WHERE id = ' . $id);
        return $this;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return mixed
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * @param mixed $refNo
     */
    public function setRefNo($refNo)
    {
        $this->refNo = $refNo;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->product_name;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }

    /**
     * @return mixed
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param mixed $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }
    

}