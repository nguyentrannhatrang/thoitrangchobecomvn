<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCartPage extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Publicmodel');
    }

    public function index()
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Publicmodel->getSeo('page_shoppingcart');
        $head['title'] = @$arrSeo['title'];
        $head['isCartPage'] = true;
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $this->render2('shopping_cart', $head, $data);
    }

}
