<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class Product extends CI_Model
{
    public $id;
    public $folder;
    public $image;
    public $time;
    public $timeUpdate;
    public $visibility;
    public $shopCategorie;
    public $quantity;
    public $procurement;
    public $inSlider;
    public $url;
    public $brandId;
    public $position;
    public $showHome;
    public $description;
    public $name;
    public $price;
    public $priceOld;

    /**
     * @return array
     */
    public function loadByCategorieTop($categories ,$limit = 10){
        
        $this->db->where_in('products.shop_categorie', $categories);

        $this->db->select(
            'products.id, 
            products.image, 
            translations.title as name,
            translations.description, 
            translations.price, 
            translations.old_price, 
            products.url');

        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');

        //$this->db->join('translations as trans2', 'trans2.for_id = products.shop_categorie', 'inner');
        //$this->db->where('trans2.abbr', MY_LANGUAGE_ABBR);
        //$this->db->where('trans2.type', 'shop_categorie');

        $this->db->where('visibility', 1);
        $this->db->where('show_home', 1);
        $this->db->where('quantity >', 0);
        $this->db->order_by('position', 'asc');
        $query = $this->db->get('products');
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
     * @return Category
     */
    public function convertToObject($arr){
        $product = new Product();
        $product->id = isset($arr['id'])?$arr['id']:'';
        $product->folder = isset($arr['folder'])?$arr['folder']:'';
        $product->image = isset($arr['image'])?$arr['image']:'';
        $product->time = isset($arr['time'])?$arr['time']:0;
        $product->timeUpdate = isset($arr['time_update'])?$arr['time_update']:0;
        $product->visibility = isset($arr['visibility'])?$arr['visibility']:0;
        $product->shopCategorie = isset($arr['shop_categorie'])?$arr['shop_categorie']:0;
        $product->quantity = isset($arr['quantity'])?$arr['quantity']:0;
        $product->procurement = isset($arr['procurement'])?$arr['procurement']:0;
        $product->inSlider = isset($arr['in_slider'])?$arr['in_slider']:0;
        $product->url = isset($arr['url'])?$arr['url']:'';
        $product->brandId = isset($arr['brand_id'])?$arr['brand_id']:0;
        $product->position = isset($arr['position'])?$arr['position']:0;
        $product->showHome = isset($arr['show_home'])?$arr['show_home']:0;
        $product->name = isset($arr['name'])?$arr['name']:'';
        $product->priceOld = isset($arr['old_price'])?$arr['old_price']:0;
        $product->price = isset($arr['price'])?$arr['price']:0;
        return $product;
    }


}