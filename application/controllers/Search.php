<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
    }

    public function index()
    {
        $data = array();
        $head = array();
        $search = $this->input->get('s');
        $data['products'] = $this->getListProduct($search);
        //$data['left_menu'] = $this->getLeftMenu();
        $head['title_page'] = 'Tìm kiếm';
        $head['page_name'] = 'search';
        $this->renderUa('search', $head, $data);
    }

    /**
     * @param $categorie
     * @return mixed
     */
    protected function getListProduct($search){
        /** @var ProductModel $productModel */
        $productModel = $this->ProductModel;
        $result = $productModel->search($search);
        if(empty($result))
            $result = $productModel->search($search,true);
        return $result;
        
    }
}
