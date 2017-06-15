<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
        $this->load->model('ProductDetailModel');
        $this->load->model('SizeModel');
        $this->load->model('CommentsModel');
    }

    public function index($url = '')
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Publicmodel->getSeo('page_home');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        /** @var ProductModel $productModel */
        $productModel = $this->ProductModel;
        //$data['right_menu'] = $this->getLeftMenu();
        /** @var ProductModel $product */
        $product = $productModel->getProductByUrl($url);
        $data['product'] = $product;
        $head['title_page'] = $product->getName();
        $data['others_image'] = $this->loadOthersImages($product->getFolder());
        $listSize = $this->SizeModel->loadArray();
        $productDetails = $this->ProductDetailModel->loadByProduct($product->id);
        $aSize = $this->getSizes($productDetails,$listSize);
        $data['sizes_data'] = $aSize;
        $data['count_reviews'] = $this->CommentsModel->countByProduct($product->getId());
        $data['current_categorie'] = $this->CategoryModel->getById($product->shopCategorie);
        $data['relation_products'] = $productModel->getProducts(array($product->shopCategorie),true,3,0,$product->getId());
        $this->renderUa('product', $head, $data);
    }

    /**
     * @param array $productDetails
     * @param array $size
     * @return array
     */
    protected function getSizes($productDetails = array(),$size = array()){
        $result = array();
        /** @var ProductDetailModel $detail */
        foreach ($productDetails as $detail){
            $result[$detail->size] = array('name'=>isset($size[$detail->size])?$size[$detail->size]:'',
                'quantity'=>$detail->quantity,
                'code'=>$detail->size);
        }
        return $result;
    }

    /**
     * @param null $folder
     * @return array
     */
    public function loadOthersImages($folder = null)
    {
        $aResult = array();
        if ($folder != null) {
            $dir = 'attachments/shop_images/'  . $folder . '/';
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                    while (($file = readdir($dh)) !== false) {
                        if (is_file($dir . $file)) {
                            $aResult[] = base_url($dir . $file);
                        }
                    }
                    closedir($dh);
                }
            }
        }
        return $aResult;
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
    
    public function saveComment($product){
        if($this->input->post()) {
            $message = $this->input->post('comment');
            $name = $this->input->post('author');
            $email = $this->input->post('email');
            $comment = new CommentsModel();
            $comment->email = $email;
            $comment->name = $name;
            $comment->message = strip_tags($message);
            $comment->product = $product;
            $comment->status = CommentsModel::DE_ACTIVE;
            $comment->insert();
        }
        echo json_encode(array('result'=>1));
    }
    
    public function loadComment($product,$page){
        $limit = 10;
        $start = ($page-1)*$limit;
        /** @var CommentsModel $commentModel */
        $commentModel = $this->CommentsModel;
        $data = $commentModel->getByProductArray($product,$limit,$start);
        foreach ($data as &$_data){
            if(isset($_data['created'])){
                $ago = time() - $_data['created'];
                if($ago < 86400){
                    $_data['created'] = $this->getStringTime($ago);
                }else
                    $_data['created'] = 'Ngày '.date('d').' Tháng '.date('m').' Năm '.date('Y');
            }
        }
        echo json_encode(array('count'=>count($data),'data'=>$data));
    }

    /**
     * @param $time
     * @return string
     */
    protected function getStringTime($time){
        $hour = floor($time/3600);
        $time -= $hour*3600;
        $minute = floor($time/60);
        $time -= $minute*60;
        $str = '';
        if($hour)
            $str = $hour .' giờ ';
        if($minute)
            $str .= $minute .' phút ';
        if(empty($str))
            $str = $time .' giây';
        return $str .' trước';
    }

}
