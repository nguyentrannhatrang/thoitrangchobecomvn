<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 8/21/2017
 * Time: 4:20 PM
 */
class SchoolsModel extends CI_Model {

    private $table = 'schools';
    public $id;
    public $name;
    public $district;
    public $description;
    public $address;
    public $international;
    public $standard;
    public $url;
    public $phone;

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

    public function load($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);

        $data = $query->result();
        if(isset($data[0]))
        $this->convertToModel($data[0],false);
    }

    /**
     * @param string $district
     * @return array
     */
    public function loadByDistrict($district = '')
    {
        $query = $this->db->get_where($this->table, ['district' => $district]);

        $data = $query->result();
        $result = array();
        if($data){
            foreach ($data as $_data){
                $result[] = $this->convertToModel($_data);
            }
        }
        return $result;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function loadByUrl($url = '')
    {
        $query = $this->db->get_where($this->table, ['url' => $url]);

        $data = $query->result();
        if($data && isset($data[0])){
            $this->convertToModel($data[0],false);
        }
        return $this;
    }
    /**
     * @param string $district
     * @return array
     */
    public function loadTop($limit = 10, $start = 0)
    {
        $this->db->limit($limit,$start);
//        $this->db->order_by($limit,$start);
        $query = $this->db->get($this->table);
        $data = $query->result();
        $result = array();
        if($data){
            foreach ($data as $_data){
                $result[] = $this->convertToModel($_data);
            }
        }
        return $result;
    }
    /**
     * @param $data
     * @return $this|CommentsModel
     */
    private function convertToModel($data,$isClone = true){
        if($isClone)
            $obj = clone $this;
        else
            $obj = $this;
        $obj->id = $data->id;
        $obj->name = $data->name;
        $obj->address = $data->address;
        $obj->district = $data->district;
        $obj->description = $data->description;
        $obj->international = $data->international;
        $obj->standard = $data->standard;
        $obj->url = $data->url;
        $obj->phone = $data->phone;
        return $obj;
    }
    /**
     * @param $data
     * @return $this|CommentsModel
     */
    private function convertArrayToModel($data){
        if(empty($data)) return $this;
        $obj = clone $this;
        $obj->id = isset($data['id'])?$data['id']:'';
        $obj->name = isset($data['name'])?$data['name']:'';
        $obj->address = isset($data['address'])?$data['address']:'';
        $obj->district = isset($data['district'])?$data['district']:'';
        $obj->description = isset($data['description'])?$data['description']:'';
        $obj->international = isset($data['international'])?$data['international']:0;
        $obj->standard = isset($data['standard'])?$data['standard']:0;
        $obj->url = isset($data['url'])?$data['url']:'';
        $obj->phone = isset($data['phone'])?$data['phone']:'';
        return $obj;
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
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
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getInternational()
    {
        return $this->international;
    }

    /**
     * @param mixed $international
     */
    public function setInternational($international)
    {
        $this->international = $international;
    }

    /**
     * @return mixed
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * @param mixed $standard
     */
    public function setStandard($standard)
    {
        $this->standard = $standard;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
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


}