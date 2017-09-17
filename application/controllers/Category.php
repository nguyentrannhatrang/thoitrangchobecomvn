<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
    }

    public function index($category = '')
    {
        $data = array();
        $head = array();
//        $arrSeo = $this->Publicmodel->getSeo('page_home');
//        $head['description'] = @$arrSeo['description'];
//        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $data['products'] = $this->getListProduct($category);
        //$data['left_menu'] = $this->getLeftMenu();
        /** @var CategoryModel $modelCategory */
        $modelCategory = $this->CategoryModel->getByUrl($category);
        $data['current_categorie'] = $modelCategory;
        $head['title_page'] = $data['current_categorie']->getName();
        $head['page_name'] = 'category';
        $head['url_category'] = 'category-'.$modelCategory->getUrlName();
        $this->renderKinder('category', $head, $data);
    }

    /**
     * @param $categorie
     * @return mixed
     */
    protected function getListProduct($categorie){
        $aCategories = $this->CategoryModel->getIdByUrl($categorie);
        return $this->ProductModel->getProducts($aCategories,false);
        
    }

    


    private function sendEmail()
    {
        $myEmail = $this->AdminModel->getValueStore('contactsEmailTo');
        if (filter_var($myEmail, FILTER_VALIDATE_EMAIL) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->load->library('email');

            $this->email->from($_POST['email'], $_POST['name']);
            $this->email->to($myEmail);

            $this->email->subject($_POST['subject']);
            $this->email->message($_POST['message']);

            $this->email->send();
            return true;
        }
        return false;
    }

}
