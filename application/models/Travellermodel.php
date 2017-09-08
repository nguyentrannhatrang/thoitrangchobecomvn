<?php
class TravellerModel extends CI_Model {    
    public $id;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $created;
    private $table = 'traveller';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $this->created = time();
        $this->db->insert($this->table, $this);
        return $this->db->insert_id();
    }

    public function update()
    {
        $this->db->where(array('id'=>$this->id));
        $update = $this->db->update($this->table, $this);
        return (boolean)$update;
    }

    public function getByPhone($phone)
    {
        $query = $this->db->get_where($this->table, ['phone' => $phone]);

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
        return $this->convertToModel(end($data));
    }

    /**
     * @param $data
     * @return $this|TravellerModel
     */
    private function convertToModel($data){
        if(empty($data)) return $this;
        $obj = clone $this;
        $obj->id = $data->id;
        $obj->name = $data->name;
        $obj->address = $data->address;
        $obj->phone = $data->phone;
        $obj->email = $data->email;
        $obj->created = $data->created;
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
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