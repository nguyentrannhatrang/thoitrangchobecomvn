<?php
class BookingDetailModel extends CI_Model {
    
    const STATUS_REQUEST = 0;
    const STATUS_CONFIRM = 1;
    const STATUS_CANCEL = 2;
    const STATUS_COMPLETED = 3;
    public $id;
    public $bkId;
    public $product;
    public $product_name;
    public $color;
    public $size;
    public $quantity;
    public $price;
    public $discount;
    public $total_discount;
    public $total;
    public $status;
    public $created;
    public $updated;
    private $table = 'booking_detail';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $this->created = time();
        $this->updated = time();
        $this->db->insert($this->table, $this);
    }

    public function load($bkId)
    {
        $query = $this->db->get_where($this->table, ['bkId' => $bkId]);

        $data = $query->result();
        $result = array();
        if($data){
            foreach ($data as $_data){
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
        $model = $this->convertToModel(end($data));
        return $model;
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
     * @return BookingDetailModel
     */
    private function convertToModel($data){
        if(empty($data)) return $this;
        $obj = clone $this;
        $obj->id = $data->id;
        $obj->bkId = $data->bkId;
        $obj->product = $data->product;
        $obj->product_name = $data->product_name;
        $obj->price = $data->price;
        $obj->discount = $data->discount;
        $obj->total = $data->total;
        $obj->total_discount = $data->total_discount;
        $obj->quantity = $data->quantity;
        $obj->color = $data->color;
        $obj->size = $data->size;
        $obj->status = $data->status;
        $obj->created = $data->created;
        $obj->updated = $data->updated;
        return $obj;
    }
    /**
     * @param BookingDetailModel $data
     * @return array
     */
    public function convertToArray($obj){
        $data = array();
        $data['id'] = $obj->id;
        $data['bkId'] = $obj->bkId;
         $data['product'] = $obj->product;
         $data['product_name'] = $obj->product_name;
         $data['price'] = $obj->price;
         $data['discount'] = $obj->discount;
         $data['total'] = $obj->total;
         $data['total_discount'] = $obj->total_discount;
         $data['quantity'] = $obj->quantity;
         $data['color'] = $obj->color;
         $data['size'] = $obj->size;
         $data['status'] = $obj->status;
         $data['created'] = $obj->created;
         $data['updated'] = $obj->updated;
        return $data;
    }

    public function generateIdNew(){
        return uniqid('new_');
    }
    /**
     * @param $status
     * @return bool
     */
    public static function statusInstant($status){
        $arrInstant = array(1);
        if(in_array($status,$arrInstant))
            return true;
        return false;
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
    public function getBkId()
    {
        return $this->bkId;
    }

    /**
     * @param mixed $bkId
     */
    public function setBkId($bkId)
    {
        $this->bkId = $bkId;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
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
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getTotalDiscount()
    {
        return $this->total_discount;
    }

    /**
     * @param mixed $total_discount
     */
    public function setTotalDiscount($total_discount)
    {
        $this->total_discount = $total_discount;
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

}