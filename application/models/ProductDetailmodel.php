<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class ProductDetailModel extends CI_Model
{
    const TABLE_NAME = 'product_detail';
    public $product;
    public $color;
    public $size;
    public $quantity;

    /**
     * @return array
     */
    public function loadByProduct($product = '',$checkAllotment = false){
        
        $this->db->where('product_detail.product', $product);
        $this->db->select(
            'product_detail.*');
        if($checkAllotment)
            $this->db->where('quantity >', 0);
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
        $product = new ProductDetailModel();
        $product->product = isset($arr['product'])?$arr['product']:'';
        $product->color = isset($arr['color'])?$arr['color']:'';
        $product->size = isset($arr['size'])?$arr['size']:'';
        $product->quantity = isset($arr['quantity'])?$arr['quantity']:0;
        return $product;
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

}