<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 8/6/2017
 * Time: 8:26 PM
 */
class Generate_data
{
    protected $CI;

    public function __construct()
    {
        $this->CI = & get_instance();
        $this->CI->load->model('ProductModel');
    }

    /**
     *
     */
    public function listProducts(){
        try{
            $products = $this->getAllProduct();
            $products=json_encode($products);
            file_put_contents(FOLDER_ROOT.'\\'.FOLDER_DATA.'\\product\\search.json',$products);
        }catch (\Exception $e){

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
}