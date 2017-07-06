<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
        $this->load->model('ProductDetailModel');
        $this->load->model('SizeModel');
        $this->load->library('session');
    }

    public function index($url = '')
    {
        if($this->input->post()){
            //update cart
            $this->clearShoppingCart();
            $this->updateCart();
        }
        $data = array();
        $head = array();
       // $arrSeo = $this->Publicmodel->getSeo('page_shoppingcart');
        //$head['title'] = @$arrSeo['title'];
        $head['isCartPage'] = true;
        //$head['description'] = @$arrSeo['description'];
        //$head['keywords'] = str_replace(" ", ",", $head['title']);

        $dataCart = $this->session->userdata('shopping_cart');
        $data['top_sell_products'] = array();
        if(empty($dataCart)) {
            $dataCart = array();
            $data['top_sell_products'] =  $this->topProduct();
        }
        $data['data_carts'] = $dataCart;
        $data['quantity_available'] = $this->getQuantityAvailable();
        $data['summary'] = $this->totalQuantityPrice();
        $head['title_page'] = 'Giỏ hàng';
        $head['page_name'] = 'cart';

        $this->renderUa('shopping_cart', $head, $data);

    }

    protected function topProduct(){

        /** @var ProductModel $productModel */
        $productModel = $this->ProductModel;
        return $productModel->loadTopSell();
    }

    /**
     * @return array
     */
    protected function getQuantityAvailable(){
        $result = array();
        $dataCart = $this->session->userdata('shopping_cart');
        if(is_null($dataCart)) $dataCart = array();
        foreach ($dataCart as $productId=>$dataCart){
            foreach ($dataCart as $size=>$item){
                $arr = $this->ProductDetailModel->loadByProductSize($productId,$size);
                /** @var ProductDetailModel $itemSize */
                foreach ($arr as $itemSize){
                    if(!isset($result[$itemSize->getProduct()])) 
                        $result[$itemSize->getProduct()] = array();                    
                    $result[$itemSize->getProduct()][$itemSize->getSize()] = $itemSize->getQuantity();
                }
            }
        }
        return $result;
    }

    /**
     *
     */
    protected function updateCart(){
        if(isset($_POST['quantity']) && is_array($_POST['quantity'])){
            foreach ($_POST['quantity'] as $productId=>$data){
                if(!is_array($data)) continue;
                foreach ($data as $sizeCode=>$quantity){
                    if(empty($quantity)) continue;
                    $this->addItemToCart($productId,$sizeCode,$quantity);
                }
            }
        }
    }

    public function addCart()
    {
        //$this->clearShoppingCart();
        $productId= isset($_POST['product_id'])?$_POST['product_id']:'';
        $size= isset($_POST['size'])?$_POST['size']:'';
        $quantity= isset($_POST['quantity']) && $_POST['quantity']?$_POST['quantity']:1;
        $dataCart = $this->session->userdata('shopping_cart');
        if(is_null($dataCart)) $dataCart = array();
        if(empty($productId) || empty($size) || empty($quantity)){
            echo json_encode(array('result'=>1,'data'=>$dataCart));
            return;
        }
        $this->addItemToCart($productId,$size,$quantity);
        $dataCart = $this->session->userdata('shopping_cart');
        if(is_null($dataCart)) $dataCart = array();
        echo json_encode(array('result'=>1,'data'=>$dataCart,'summary'=>$this->totalQuantityPrice()));
        return;        
    }

    /**
     * @param $productId
     * @param $size
     * @param $quantity
     */
    protected function addItemToCart($productId,$size,$quantity){
        $dataCart = $this->session->userdata('shopping_cart');
        if(is_null($dataCart)) $dataCart = array();
        if(isset($dataCart[$productId]) &&
            isset($dataCart[$productId][$size]))
            $dataCart[$productId][$size]['quantity'] += (int)$quantity;
        else{
            /** @var ProductModel $product */
            $product = $this->ProductModel->getProductById($productId);
            if($product){
                if(!isset($dataCart[$productId])) $dataCart[$productId] = array();
                if(!isset($dataCart[$productId])) $dataCart[$productId][$size] = array();
                $productName = $product->getName();
                $price = $product->getPrice();
                $image = $product->getImage();
                $linkProduct = '/product-'.$product->getUrl();
                $listSize = $this->SizeModel->loadArrayWithPrice();
                $dataSize = $listSize[$size];
                $itemCart = [
                    'size'=>$dataSize['name'],
                    'quantity'=>(int)$quantity,
                    'name'=>$productName,
                    'price'=>(float)$price + (float)$dataSize['price'],
                    'image'=>$image,
                    'link'=>$linkProduct
                ];
                $dataCart[$productId][$size] = $itemCart;
            }
        }
        $this->session->set_userdata('shopping_cart',$dataCart);
    }

    /**
     * 
     */
    public function getCart(){
        $dataCart = $this->session->userdata('shopping_cart');
        if(is_null($dataCart)) $dataCart = array();
        echo json_encode(array('result'=>1,'data'=>$dataCart,'summary'=>$this->totalQuantityPrice()));
        return;
    }

    public function clearShoppingCart()
    {
        unset($_SESSION['shopping_cart']);
        @delete_cookie('shopping_cart');
    }
    /**
     * @return array
     */
    protected function totalQuantityPrice(){
        $result = array('quantity'=>0,'total'=>0);
        $dataCart = $this->session->userdata('shopping_cart');
        if(is_null($dataCart)) $dataCart = array();
        $quantity = 0;
        $total = 0;
        foreach ($dataCart as $arr) {
            foreach ($arr as $item) {
                if (isset($item['quantity']) && $item['quantity'] > 0)
                    $quantity += $item['quantity'];
                if (isset($item['price']) && $item['price'] > 0)
                    $total += (float)$item['price'] * (int)$item['quantity'];
            }
        }
        $result['quantity'] = $quantity;
        $result['total'] = $total;
        return $result;
    }

    /**
     *
     */
    public function removeItem(){
        try{
            $dataCart = $this->session->userdata('shopping_cart');
            if(is_null($dataCart)) $dataCart = array();
            $productId = isset($_GET['product'])?$_GET['product']:'';
            $size = isset($_GET['size'])?$_GET['size']:'';
            if($productId && $size) {

                if (isset($dataCart[$productId]) &&
                    isset($dataCart[$productId][$size])
                ) {
                    unset($dataCart[$productId][$size]);
                    if(empty($dataCart[$productId]))
                        unset($dataCart[$productId]);
                }
                $this->session->set_userdata('shopping_cart',$dataCart);
            }
            echo json_encode(array('result'=>1));
        }catch (\Exception $e){
            echo json_encode(array('result'=>0));
        }
    }

    

}
