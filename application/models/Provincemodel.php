<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class ProvinceModel extends CI_Model
{
    const TABLE_NAME = 'province';
    public $id;
    public $name;

    /**
     * @return array
     */
    public function load(){
        $this->db->select(
            'province.*');
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
            $result[$item->id] = array('id'=>$item->id,'name'=>$item->name);
        }
        asort($result);
        return $result;
    }


    /**
     * @param $arr
     * @return ProvinceModel
     */
    public function convertToObject($arr){
        $obj = new ProvinceModel();
        $obj->id = isset($arr['id'])?$arr['id']:'';
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