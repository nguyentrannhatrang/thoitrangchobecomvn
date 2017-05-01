<?php
/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class CategoryModel extends CI_Model
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
     * @return array
     */
    public function loadAllTopCategorie(){

        $this->db->select('shop_categories.sub_for, shop_categories.id, translations.name,shop_categories.url_name');
        $this->db->where('abbr', MY_LANGUAGE_ABBR);
        $this->db->where('type', 'shop_categorie');
        $this->db->order_by('position', 'asc');
        $this->db->join('shop_categories', 'shop_categories.id = translations.for_id', 'INNER');
        $query = $this->db->get('translations');
        $arr = array();
        if ($query !== false) {
            foreach ($query->result_array() as $row) {
                $arr[] = $row;
            }
        }
        return $arr;

    }

    /**
     * @param $url
     * @return $this|Category
     */
    public function getByUrl($url){
        $this->db->select('shop_categories.sub_for, shop_categories.id, translations.name,shop_categories.url_name');
        $this->db->where('abbr', MY_LANGUAGE_ABBR);
        $this->db->where('type', 'shop_categorie');
        $this->db->where('url_name', $url);
        $this->db->join('shop_categories', 'shop_categories.id = translations.for_id', 'INNER');
        $query = $this->db->get('translations');
        if ($query !== false) {
            $result = $query->row_array();
            return $this->convertToObject($result);
        }
        return $this;
    }

    /**
     * @param $url
     * @return $this|Category
     */
    public function getById($id){
        $this->db->select('shop_categories.sub_for, shop_categories.id, translations.name,shop_categories.url_name');
        $this->db->where('abbr', MY_LANGUAGE_ABBR);
        $this->db->where('type', 'shop_categorie');
        $this->db->where('shop_categories.id', $id);
        $this->db->join('shop_categories', 'shop_categories.id = translations.for_id', 'INNER');
        $query = $this->db->get('translations');
        if ($query !== false) {
            $result = $query->row_array();
            return $this->convertToObject($result);
        }
        return $this;
    }

    /**
     * @param $url
     * @return array
     */
    public function getIdByUrl($url){
        $this->db->select('shop_categories.sub_for,
         shop_categories.id');
        $this->db->where('url_name', $url);
        $query = $this->db->get('shop_categories');
        $result = array();
        if ($query !== false) {
            $result = $query->row_array();
            if(isset($result['sub_for']) && !$result['sub_for']){
                return array_merge(array($result['id']),$this->getIdBySubfor($result['id']));
            }else{
                return array($result['id']);
            }
        }
        return array();
    }

    /**
     * @param $category
     * @return array
     */
    public function getIdBySubfor($category){
        $this->db->select('shop_categories.sub_for,
         shop_categories.id,');
        $this->db->where('sub_for', $category);
        $query = $this->db->get('shop_categories');
        $arr =array();
        if ($query !== false) {
            foreach ($query->result_array() as $row) {
                $arr[] = $row['id'];
            }
        }
        return $arr;
    }

    /**
     * @param $arr
     * @return Category
     */
    public function convertToObject($arr){
        $category = new CategoryModel();
        $category->id = isset($arr['id'])?$arr['id']:'';
        $category->subFor = isset($arr['sub_for'])?$arr['sub_for']:'';
        $category->position = isset($arr['position'])?$arr['position']:0;
        $category->urlName = isset($arr['url_name'])?$arr['url_name']:'';
        $category->name = isset($arr['name'])?$arr['name']:'';
        return $category;
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
    public function getSubFor()
    {
        return $this->subFor;
    }

    /**
     * @param mixed $subFor
     */
    public function setSubFor($subFor)
    {
        $this->subFor = $subFor;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getUrlName()
    {
        return $this->urlName;
    }

    /**
     * @param mixed $urlName
     */
    public function setUrlName($urlName)
    {
        $this->urlName = $urlName;
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