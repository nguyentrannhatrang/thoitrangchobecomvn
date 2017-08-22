<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class DistrictModel extends CI_Model
{
    const TABLE_NAME = 'district';
    public $id;
    public $province;
    public $name;

    /**
     * @return array
     */
    public function load(){
        $this->db->select(
            'district.*');
        $query = $this->db->get(self::TABLE_NAME);
        $arr = array();
        if ($query !== false) {
            foreach ($query->result_array() as $row) {
                $arr[] = $this->convertToObject($row);
            }
        }
        return $arr;
    }
    /**
     * @return array
     */
    public function loadArray(){
        $result = array();
        $arr = $this->load();
        /** @var SizeModel $item */
        foreach ($arr as $item){
            $result[$item->id] = array('id'=>$item->id,'province'=>$item->province,'name'=>$item->name);
        }
        asort($result);
        return $result;
    }


    /**
     * @param $arr
     * @return DistrictModel
     */
    public function convertToObject($arr){
        $obj = new DistrictModel();
        $obj->id = isset($arr['id'])?$arr['id']:'';
        $obj->province = isset($arr['province'])?$arr['province']:'';
        $obj->name = isset($arr['name'])?$arr['name']:'';
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
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
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

}