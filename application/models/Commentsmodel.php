<?php
class CommentsModel extends CI_Model {
    const ACTIVE = 1;
    const DE_ACTIVE = 0;
    public $id;
    public $name;
    public $email;
    public $message;
    public $product;
    public $status;
    public $created;
    public $updated;
    private $table = 'comments';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $this->created = time();
        $this->updated = time();
        $this->db->insert($this->table, $this);
        return $this->db->insert_id();
    }

    public function update()
    {
        $this->updated = time();
        $this->db->where(array('id'=>$this->id));
        $update = $this->db->update($this->table, $this);
        return (boolean)$update;
    }
    public function active($id)
    {
        $this->load($id);
        $this->status = self::ACTIVE;
        return $this->update();
    }
    public function deActive($id)
    {
        $this->load($id);
        $this->status = self::DE_ACTIVE;
        return $this->update();
    }

    /**
     * @param $product
     * @return mixed
     */
    public function countByProduct($product)
    {
        return $this->db
            ->where('product', $product)
            ->where('status', self::ACTIVE)
            ->count_all_results($this->table);
    }
    /**
     * @param $product
     * @param int $limit
     * @param int $start
     * @return CommentsModel[]
     */
    public function getByProduct($product,$limit = 0,$start = 0)
    {
        $this->db->where(['product' => $product]);
        $this->db->where(['status' => self::ACTIVE]);//active
        if($limit){
            $this->db->limit($limit,$start);
        }
        $this->db->order_by('created','desc');
        $query =$this->db->get($this->table);
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
    /**
     * @param $product
     * @param int $limit
     * @param int $start
     * @return CommentsModel[]
     */
    public function getByProductArray($product,$limit = 0,$start = 0)
    {
        $this->db->where(['product' => $product]);
        $this->db->where(['status' => self::ACTIVE]);//active
        if($limit){
            $this->db->limit($limit,$start);
        }
        $this->db->order_by('created','desc');
        $query =$this->db->get($this->table);
        $data = $query->result();
        $result = array();
        if($data){
            foreach ($data as $_data){
                $result[] = array('name'=>$_data->name,'message'=>$_data->message,'email'=>$_data->email);
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

    public function load($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);

        $data = $query->result();
        $this->id = $data->id;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->product = $data->product;
        $this->status = $data->status;
        $this->updated = $data->updated;
        $this->created = $data->created;
    }

    /**
     * @param $data
     * @return $this|CommentsModel
     */
    private function convertToModel($data){
        if(empty($data)) return $this;
        $obj = clone $this;
        $obj->id = $data->id;
        $obj->name = $data->name;
        $obj->email = $data->email;
        $obj->product = $data->product;
        $obj->status = $data->status;
        $obj->created = $data->created;
        $obj->updated = $data->updated;
        return $obj;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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



}