<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class SizeModel extends CI_Model
{
    const TABLE_NAME = 'sizes';
    public $code;
    public $name;

    /**
     * @return array
     */
    public function load(){
        $this->db->select(
            'sizes.*');
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
     * @param $arr
     * @return ProductDetailModel
     */
    public function convertToObject($arr){
        $obj = new SizeModel();
        $obj->code = isset($arr['code'])?$arr['code']:'';
        $obj->name = isset($arr['name'])?$arr['name']:'';
        return $obj;
    }
    /**
     * @return array
     */
    public function loadArray(){
        $result = array();
        $arr = $this->load();
        /** @var SizeModel $item */
        foreach ($arr as $item){
            $result[$item->code] = $item->name;
        }
        asort($result);
        return $result;
    }
    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
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