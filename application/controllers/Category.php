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
        $arrSeo = $this->Publicmodel->getSeo('page_home');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $data['products'] = $this->getListProduct($category);
        $data['left_menu'] = $this->getLeftMenu();
        $data['current_categorie'] = $this->CategoryModel->getByUrl($category);
        $this->render2('category', $head, $data);
    }

    /**
     * @param $categorie
     * @return mixed
     */
    protected function getListProduct($categorie){
        $aCategories = $this->CategoryModel->getIdByUrl($categorie);
        return $this->ProductModel->getProducts($aCategories);
        
    }

    /**
     * only 2 level
     * @return array
     */
    protected function getLeftMenu(){
        $result=array();
        $aCategories = $this->CategoryModel->loadAll();
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
