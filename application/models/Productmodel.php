<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 4/28/2017
 * Time: 9:48 PM
 */
class ProductModel extends CI_Model
{
    const TABLE_NAME = 'products';
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
    public $basicDescription;
    public $urlCategory;
    public $metaDescription;
    public $metaKeywords;

    /**
     * @return array
     */
    public function loadByCategorieTop($categories ,$limit = 10){
        //$this->db->cache_on();
        $this->db->where_in('products.shop_categorie', $categories);

        $this->db->select(
            'products.id, 
            products.image, 
            products.quantity, 
            translations.title as name,
            translations.basic_description, 
            translations.price, 
            translations.old_price, 
            products.url,
            shop_categories.url_name');

        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->join('shop_categories', 'shop_categories.id = products.shop_categorie');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');

        //$this->db->join('translations as trans2', 'trans2.for_id = products.shop_categorie', 'inner');
        //$this->db->where('trans2.abbr', MY_LANGUAGE_ABBR);
        //$this->db->where('trans2.type', 'shop_categorie');

        $this->db->where('visibility', 1);
        $this->db->where('show_home', 1);
        //$this->db->where('quantity >', 0);
        $this->db->order_by('products.position', 'asc');
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
     * @param int $limit
     * @return array
     */
    public function loadSlider($limit = 10,$isArray = false){
        //$this->db->cache_on();
        $this->db->select(
            'products.id, 
            products.image, 
            translations.title as name,
            translations.basic_description, 
            translations.price, 
            translations.old_price, 
            products.url,
            shop_categories.url_name'
            );


        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->join('shop_categories', 'shop_categories.id = products.shop_categorie');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');


        $this->db->where('visibility', 1);
        $this->db->where('in_slider', 1);
        $this->db->where('quantity >', 0);
        $this->db->order_by('products.position', 'asc');
        $this->db->limit($limit, 0);
        $query = $this->db->get(self::TABLE_NAME);
        $arr = array();
        if ($query !== false) {
            foreach ($query->result_array() as $row) {
                if($isArray)
                    $arr[] = $row;
                else
                    $arr[] = $this->convertToObject($row);
            }
        }
        return $arr;
    }

    /**
     * @param array $categories
     * @param bool $checkQuantity
     * @param int $limit
     * @param int $start
     * @return array
     */
    public function getProducts(array $categories = array(),$checkQuantity = true,$limit = 20,$start = 0,$notId = null)
    {
        //$this->db->cache_on();
        if ($limit !== null && $start !== null) {
            $this->db->limit($limit, $start);
        }
        $this->db->select(
            'products.id,
            products.image, 
            products.quantity, 
            translations.title as name,
            translations.description,
            translations.basic_description,
             translations.price,
              translations.old_price,
               products.url,
               products.meta_description,
               products.meta_keywords,
            shop_categories.url_name');
        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->join('shop_categories', 'shop_categories.id = products.shop_categorie');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');
        $this->db->where('visibility', 1);
        $this->db->where_in('shop_categorie', $categories);
        if ($checkQuantity) {
            $this->db->where('quantity >', 0);
        }
        if(!empty($notId)){
            $this->db->where('products.id <>', $notId);
        }
        $this->db->order_by('products.position', 'asc');
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
     * @param array $categories
     * @param bool $checkQuantity
     * @param int $limit
     * @param int $start
     * @return array
     */
    public function loadAll($checkQuantity = true)
    {
        //$this->db->cache_on();
        $this->db->select(
            'products.id,
            translations.title as name,
            translations.price');
        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');
        $this->db->where('visibility', 1);
        if ($checkQuantity) {
            $this->db->where('quantity >', 0);
        }
        $this->db->order_by('products.position', 'asc');
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
     * @param array $categories
     * @param bool $checkQuantity
     * @param int $limit
     * @param int $start
     * @return array
     */
    public function search($productName = '',$separate = false, $checkQuantity = true)
    {
        $this->db->select(
            'products.id,
            products.image, 
            products.quantity, 
            translations.title as name,
            translations.description,
            translations.basic_description,
             translations.price,
              translations.old_price,
               products.url,
               shop_categories.url_name');
        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->join('shop_categories', 'shop_categories.id = products.shop_categorie');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');
        $this->db->where('visibility', 1);
        $this->db->like('translations.title', $productName);
        if($separate){
            $aSearch = explode(' ',$productName);
            foreach ($aSearch as $search){
                if(empty($aSearch)) continue;
                $this->db->or_like('translations.title', $search);
            }
        }
        if ($checkQuantity) {
            $this->db->where('quantity >', 0);
        }
        $this->db->order_by('products.position', 'asc');
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
     * @param $id
     * @return ProductModel
     */
    public function getProductById($id)
    {
        //$this->db->cache_on();
        $this->db->where('products.id', $id);

        $this->db->select('products.*, translations.title as name,
        translations.description,translations.basic_description, translations.price, translations.old_price,
        products.url,products.meta_description,products.meta_keywords, trans2.name as categorie_name,shop_categories.url_name');

        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');

        $this->db->join('translations as trans2', 'trans2.for_id = products.shop_categorie', 'inner');
        $this->db->where('trans2.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('trans2.type', 'shop_categorie');
        $this->db->where('visibility', 1);
        $this->db->join('shop_categories', 'shop_categories.id = products.shop_categorie');
        $query = $this->db->get('products');
        return $this->convertToObject($query->row_array());
    }

    /**
     * @param $url
     * @return ProductModel
     */
    public function getProductByUrl($url)
    {
        //$this->db->cache_on();
        $this->db->where('products.url', $url);

        $this->db->select('products.*,
         translations.title as name,
        translations.description, 
        translations.basic_description, 
        translations.price, 
        translations.old_price, 
        products.url, 
        products.meta_description, 
        products.meta_keywords, 
        trans2.name as categorie_name');

        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');

        $this->db->join('translations as trans2', 'trans2.for_id = products.shop_categorie', 'inner');
        $this->db->where('trans2.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('trans2.type', 'shop_categorie');
        $this->db->where('visibility', 1);
        $query = $this->db->get('products');
        return $this->convertToObject($query->row_array());
    }

    /**
     * @param $arr
     * @return ProductModel
     */
    public function convertToObject($arr){
        $product = new ProductModel();
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
        $product->description = isset($arr['description'])?$arr['description']:'';
        $product->basicDescription = isset($arr['basic_description'])?$arr['basic_description']:'';
        $product->urlCategory = isset($arr['url_name'])?$arr['url_name']:'';
        $product->metaDescription = isset($arr['meta_description'])?$arr['meta_description']:'';
        $product->metaKeywords = isset($arr['meta_keywords'])?$arr['meta_keywords']:'';
        return $product;
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
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * @param mixed $folder
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getTimeUpdate()
    {
        return $this->timeUpdate;
    }

    /**
     * @param mixed $timeUpdate
     */
    public function setTimeUpdate($timeUpdate)
    {
        $this->timeUpdate = $timeUpdate;
    }

    /**
     * @return mixed
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param mixed $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }

    /**
     * @return mixed
     */
    public function getShopCategorie()
    {
        return $this->shopCategorie;
    }

    /**
     * @param mixed $shopCategorie
     */
    public function setShopCategorie($shopCategorie)
    {
        $this->shopCategorie = $shopCategorie;
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

    /**
     * @return mixed
     */
    public function getProcurement()
    {
        return $this->procurement;
    }

    /**
     * @param mixed $procurement
     */
    public function setProcurement($procurement)
    {
        $this->procurement = $procurement;
    }

    /**
     * @return mixed
     */
    public function getInSlider()
    {
        return $this->inSlider;
    }

    /**
     * @param mixed $inSlider
     */
    public function setInSlider($inSlider)
    {
        $this->inSlider = $inSlider;
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
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @param mixed $brandId
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;
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
    public function getShowHome()
    {
        return $this->showHome;
    }

    /**
     * @param mixed $showHome
     */
    public function setShowHome($showHome)
    {
        $this->showHome = $showHome;
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
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getPriceFormat()
    {
        if($this->price == 0)
            return $this->price;
        return number_format($this->price,0,',','.');
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPriceOld()
    {
        return $this->priceOld;
    }

    /**
     * @param mixed $priceOld
     */
    public function setPriceOld($priceOld)
    {
        $this->priceOld = $priceOld;
    }

    /**
     * @return mixed
     */
    public function getBasicDescription($length = 0)
    {
        if($length<=0 || strlen($this->basicDescription) < $length)
            return $this->basicDescription;

        while ($length>0 && substr($this->basicDescription,$length,1) != ' '){
            $length--;
        }
        return substr($this->basicDescription,0,$length).'...';
    }

    /**
     * @param mixed $basicDescription
     */
    public function setBasicDescription($basicDescription)
    {
        $this->basicDescription = $basicDescription;
    }

    public function getNameLimit($length = 50)
    {
        if($length<=0 || strlen($this->name) < $length)
            return $this->name;

        while ($length>0 && substr($this->name,$length,1) != ' '){
            $length--;
        }
        return substr($this->name,0,$length).'...';
    }

    /**
     * @return mixed
     */
    public function getUrlCategory()
    {
        return $this->urlCategory;
    }

    /**
     * @param mixed $urlCategory
     */
    public function setUrlCategory($urlCategory)
    {
        $this->urlCategory = $urlCategory;
    }

    /**
     * @return mixed
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * @param $meta
     */
    public function setMetaDescription($meta)
    {
        $this->metaDescription = $meta;
    }

    /**
     * @return mixed
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * @param $meta
     */
    public function setMetaKeywords($meta)
    {
        $this->metaKeywords = $meta;
    }

    /**
     * @param int $limit
     * @return array
     */
    public function loadTopSell($limit = 6){

        $this->db->select(
            'products.id, 
            products.image, 
            translations.title as name,
            translations.basic_description, 
            translations.price, 
            translations.old_price, 
            products.url,
            shop_categories.url_name');

        $this->db->join('translations', 'translations.for_id = products.id', 'left');
        $this->db->join('shop_categories', 'shop_categories.id = products.shop_categorie');
        $this->db->where('translations.abbr', MY_LANGUAGE_ABBR);
        $this->db->where('translations.type', 'product');

        $this->db->where('visibility', 1);
        $this->db->where('in_slider', 1);
        $this->db->where('quantity >', 0);
        $this->db->order_by('products.position', 'asc');
        $this->db->limit($limit, 0);
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
     * @param $productId
     */
    public function updateQuantityProduct($productId){
        try{
            $productDetail = new ProductDetailModel();
            $listDetail = $productDetail->loadByProduct($productId);
            $quantity = 0;
            if($listDetail){
                /** @var ProductDetailModel $item */
                foreach ($listDetail as $item){
                    $quantity +=$item->getQuantity();
                }
            }
            $this->db->query('UPDATE products SET quantity=' . $quantity . ' WHERE id = ' . $productId);
        }catch (\Exception $e){

        }

    }


}