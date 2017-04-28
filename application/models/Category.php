<?php
/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class Category extends CI_Model
{
    public $id;
    public $subFor;
    public $position;
    public $urlName;
    public $name;

    /**
     * @return array
     */
    public function loadAll(){
        $this->db->select('shop_categories.sub_for, shop_categories.id, translations.name,shop_categories.url_name');
        $this->db->where('abbr', MY_LANGUAGE_ABBR);
        $this->db->where('type', 'shop_categorie');
        $this->db->order_by('position', 'asc');
        $this->db->join('shop_categories', 'shop_categories.id = translations.for_id', 'INNER');
        $query = $this->db->get('translations');
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
        $category = new Category();
        $category->id = isset($arr['id'])?$arr['id']:'';
        $category->subFor = isset($arr['sub_for'])?$arr['sub_for']:'';
        $category->position = isset($arr['position'])?$arr['position']:0;
        $category->urlName = isset($arr['url_name'])?$arr['url_name']:'';
        $category->name = isset($arr['name'])?$arr['name']:'';
        return $category;
    }


}