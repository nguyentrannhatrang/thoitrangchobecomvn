<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 8/6/2017
 * Time: 8:26 PM
 */
class GenerateData
{
    protected $CI;

    public function __construct()
    {
        $this->CI = & get_instance();
        $this->CI->load->model('ProductModel');
        $this->CI->load->model('CategoryModel');
    }

    /**
     *
     */
    public function listProducts(){
        try{
            $products = $this->getAllProduct();
            $products=json_encode($products);
            file_put_contents(FOLDER_ROOT.'/'.FOLDER_DATA.'/product/search.json',$products);
        }catch (\Exception $e){

        }
    }

    /**
     * @return mixed
     */
    public function loadListProducts(){
        try{
            $products = @file_get_contents(FOLDER_ROOT.'/'.FOLDER_DATA.'/product/search.json');
            return json_decode($products,true);
        }catch (\Exception $e){
            return null;
        }
    }

    /**
     * @return array
     * @throws Exception
     */
    protected function getAllProduct(){
        try{
            $result = array();
            $product = new ProductModel();
            $list = $product->loadAll(false);
            /** @var ProductModel $item */
            foreach ($list as $item){
                $result[] = $item->getName();
            }
            return $result;
           /* if(!empty($result))
                return '"'.implode('","',$result).'"';
            return '';*/
        }catch (\Exception $e){
            throw $e;
        }
    }

    /**
     * 
     */
    public function listCategories(){
        try{
            $categories = $this->getLeftMenu();
            $categories=json_encode($categories);
            file_put_contents(FOLDER_ROOT.'/'.FOLDER_DATA.'/product/categories.json',$categories);
        }catch (\Exception $e){
            
        }
    }

    /**
     * @return mixed|null
     */
    public function loadListCategories(){
        try{
            $categories = @file_get_contents(FOLDER_ROOT.'/'.FOLDER_DATA.'/product/categories.json');
            return json_decode($categories,true);
        }catch (\Exception $e){
            return null;
        }
    }

    /**
     * @return array
     */
    protected function getLeftMenu(){
        $result=array();
        $categoryModel = new CategoryModel();
        $aCategories = $categoryModel->loadAll();
        /** @var CategoryModel $category */
        foreach ($aCategories as $category){
            if(empty($category->subFor)){
                if(!isset($result[$category->id]))
                    $result[$category->id] = array();
                $result[$category->id]['info'] = array('name' => $category->name, 'url' => $category->urlName);
                if(!isset($result[$category->id]['children']))
                    $result[$category->id]['children'] = array();
                continue;
            }
            if(!empty($category->subFor)){
                if(!isset($result[$category->subFor])){
                    $result[$category->subFor] = array('info' => array());
                    $result[$category->subFor]['children'] = array();
                }
                $result[$category->subFor]['children'][] = array('name' => $category->name, 'url' => $category->urlName);
            }
        }
        return $result;
    }

    /**
     * @return array|null
     */
    public function loadProductSlider(){
        try{
            $result = array();
            $data = @file_get_contents(FOLDER_ROOT.'/'.FOLDER_DATA.'/product/slider.json');
            if($data){
                /** @var ProductModel $productModel */
                $productModel = new ProductModel();
                $data = json_decode($data,true);
                foreach ($data as $item){
                    $result[] = $productModel->convertToObject($item);
                }
            }
            return $result;
        }catch (\Exception $e){
            return null;
        }
    }
    
    public function listProductSlider(){
        try{
            /** @var ProductModel $productModel */
            $productModel = new ProductModel();
            $data =  $productModel->loadSlider(10,true);
            file_put_contents(FOLDER_ROOT.'/'.FOLDER_DATA.'/product/slider.json',json_encode($data));
        }catch (\Exception $e){
            
        }
    }
    
}