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
    public $plusPrice;

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
     * @return SizeModel
     */
    public function convertToObject($arr){
        $obj = new SizeModel();
        $obj->code = isset($arr['code'])?$arr['code']:'';
        $obj->name = isset($arr['name'])?$arr['name']:'';
        $obj->plusPrice = isset($arr['plus_price'])?(float)$arr['plus_price']:0;
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
     * @return array
     */
    public function loadArrayWithPrice(){
        $result = array();
        $arr = $this->load();
        /** @var SizeModel $item */
        foreach ($arr as $item){
            $result[$item->code] = array('name'=>$item->name,'price'=>$item->plusPrice);
        }
        /*usort($result, function($a, $b){
            if(isset($a['name']) && isset($b['name'])){
                if($a['name'] == $b['name']) return 0;
                return ($a['name'] > $b['name']) ? 1 : -1;
            }else return 0;
        });*/
        return $result;
    }

    /**
     * @return array
     */
    public function loadPrice(){
        $result = array();
        $arr = $this->load();
        /** @var SizeModel $item */
        foreach ($arr as $item){
            $result[$item->code] = $item->plusPrice;
        }
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

    /**
     * @return mixed
     */
    public function getPlusPrice()
    {
        return $this->plusPrice;
    }

    /**
     * @param mixed $name
     */
    public function setPlusPrice($price)
    {
        $this->plusPrice = $price;
    }

}