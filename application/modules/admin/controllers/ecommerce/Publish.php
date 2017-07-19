<?php

/*
 * @Author:    Kiril Kirkov
 *  Gitgub:    https://github.com/kirilkirkov
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Publish extends ADMIN_Controller
{

    /**
     * Publish constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
    }

    public function index($id = 0)
    {
        $this->login_check();
        $is_update = false;
        $trans_load = null;
        if ($id > 0 && $_POST == null) {
            $_POST = $this->AdminModel->getOneproduct($id);
            $trans_load = $this->AdminModel->getTranslations($id, 'product');
        }
        if (isset($_POST['submit'])) {
            if ($id > 0) {
                $is_update = true;
                if(!$this->isUrlUnique($id,$_POST['title_for_url']))
                    unset($_POST['title_for_url']);
            }
            unset($_POST['submit']);
            $config['upload_path'] = './attachments/shop_images/';
            $config['allowed_types'] = $this->allowed_img_types;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('userfile')) {
                log_message('error', 'Image Upload Error: ' . $this->upload->display_errors());
            }
            $img = $this->upload->data();
            if ($img['file_name'] != null) {
                $_POST['image'] = $img['file_name'];
            }
            if (isset($_GET['to_lang'])) {
                $id = 0;
            }
            $translations = array(
                'abbr' => $_POST['translations'],
                'title' => $_POST['title'],
                'basic_description' => $_POST['basic_description'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'old_price' => $_POST['old_price']
            );
            $flipped = array_flip($_POST['translations']);
            //$_POST['title_for_url'] = $_POST['title'][$flipped[MY_DEFAULT_LANGUAGE_ABBR]];
//            unset($_POST['translations'], $_POST['title'], $_POST['basic_description'], $_POST['description'], $_POST['price'], $_POST['old_price']); //remove for product
            unset($_POST['translations']); //remove for product
            $result = $this->AdminModel->setProduct($this->createDataProduct($_POST), $id);
            if ($result !== false) {
                $this->AdminModel->setProductTranslation($translations, $result, $is_update); // send to translation table
                $this->session->set_flashdata('result_publish', 'product is published!');
                if ($id == 0) {
                    $this->saveHistory('Success published product');
                } else {
                    $this->saveHistory('Success updated product');
                }
                if (isset($_SESSION['filter']) && $id > 0) {
                    $get = '';
                    foreach ($_SESSION['filter'] as $key => $value) {
                        $get .= trim($key) . '=' . trim($value) . '&';
                    }
                    redirect(base_url('admin/products?' . $get));
                } else {
                    redirect('admin/products');
                }
            } else {
                $this->session->set_flashdata('result_publish', 'Problem with product publish!');
            }
        }
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Publish Product';
        $head['description'] = '!';
        $head['keywords'] = '';
        $data['id'] = $id;
        $data['product_id'] = $id;
        $data['trans_load'] = $trans_load;
        
        $data['languages'] = $this->AdminModel->getLanguages();
        $data['colors'] = $this->AdminModel->getColors();
        $data['sizes'] = $this->AdminModel->getSizes();
        $data['shop_categories'] = $this->AdminModel->getShopCategories();
        $data['brands'] = $this->AdminModel->getBrands();
        $data['otherImgs'] = $this->loadOthersImages();
        $data['details'] = $this->AdminModel->getProductDetailByProduct($id);
        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/publish', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to publish product');
    }

    protected function createDataProduct($data){
        unset($data['translations']);
        $data['name'] = $data['title'];
        unset($data['title']);
        $fieldString = array('name','description','basic_description','price','old_price');
        foreach ($data as $key=>&$value){
            if(!in_array($key,$fieldString)) continue;
            if(is_array($value) && isset($value[0]))
                $value = $value[0];

        }
        return $data;
        /*return array(
            'folder'=>$_POST['folder'],
            'name'=>isset($_POST['title']) && $_POST['title'][0]?$_POST['title'][0]:'',
            'basic_description'=>isset($_POST['basic_description']) && $_POST['basic_description'][0]?$_POST['basic_description'][0]:'',
            'description'=>isset($_POST['description']) && $_POST['description'][0]?$_POST['description'][0]:'',
            'price'=>isset($_POST['price']) && $_POST['price'][0]?(float)$_POST['price'][0]:null,
            'old_price'=>isset($_POST['old_price']) && $_POST['old_price'][0]?(float)$_POST['old_price'][0]:null,
            'quantity'=>isset($_POST['quantity'])?(int)$_POST['quantity']:0,
            'shop_categorie'=>isset($_POST['shop_categorie'])?$_POST['shop_categorie']:0,
            'in_slider'=>isset($_POST['in_slider'])?$_POST['in_slider']:'0',
            'show_home'=>isset($_POST['show_home'])?$_POST['show_home']:'0',
            'position'=>isset($_POST['position'])?$_POST['position']:'0',
            'product_url'=>isset($_POST['product_url'])?$_POST['product_url']:''
        );*/
    }

    /*
     * called from ajax
     */

    public function do_upload_others_images()
    {
        if ($this->input->is_ajax_request()) {
            $upath = '.' . DIRECTORY_SEPARATOR . 'attachments' . DIRECTORY_SEPARATOR . 'shop_images' . DIRECTORY_SEPARATOR . $_POST['folder'] . DIRECTORY_SEPARATOR;
            if (!file_exists($upath)) {
                mkdir($upath, 0777);
            }

            $this->load->library('upload');

            $files = $_FILES;
            $cpt = count($_FILES['others']['name']);
            for ($i = 0; $i < $cpt; $i++) {
                unset($_FILES);
                $_FILES['others']['name'] = $files['others']['name'][$i];
                $_FILES['others']['type'] = $files['others']['type'][$i];
                $_FILES['others']['tmp_name'] = $files['others']['tmp_name'][$i];
                $_FILES['others']['error'] = $files['others']['error'][$i];
                $_FILES['others']['size'] = $files['others']['size'][$i];

                $this->upload->initialize(array(
                    'upload_path' => $upath,
                    'allowed_types' => $this->allowed_img_types
                ));
                $this->upload->do_upload('others');
            }
        }
    }

    public function loadOthersImages()
    {
        $output = '';
        if (isset($_POST['folder']) && $_POST['folder'] != null) {
            $dir = 'attachments' . DIRECTORY_SEPARATOR . 'shop_images' . DIRECTORY_SEPARATOR . $_POST['folder'] . DIRECTORY_SEPARATOR;
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                    $i = 0;
                    while (($file = readdir($dh)) !== false) {
                        if (is_file($dir . $file)) {
                            $output .= '
                                <div class="other-img" id="image-container-' . $i . '">
                                    <img src="' . base_url($dir . $file) . '" style="width:100px; height: 100px;">
                                    <a href="javascript:void(0);" onclick="removeSecondaryProductImage(\'' . $file . '\', \'' . $_POST['folder'] . '\', ' . $i . ')">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </a>
                                </div>
                               ';
                        }
                        $i++;
                    }
                    closedir($dh);
                }
            }
        }
        if ($this->input->is_ajax_request()) {
            echo $output;
        } else {
            return $output;
        }
    }

    /*
     * called from ajax
     */

    public function removeSecondaryImage()
    {
        if ($this->input->is_ajax_request()) {
            $img = '.' . DIRECTORY_SEPARATOR . 'attachments' . DIRECTORY_SEPARATOR . 'shop_images' . DIRECTORY_SEPARATOR . '' . $_POST['folder'] . DIRECTORY_SEPARATOR . $_POST['image'];
            unlink($img);
        }
    }

    /*
     * called from ajax
     */

    public function convertCurrency()
    {
        if ($this->input->is_ajax_request()) {
            $amount = $_POST['sum'];
            if ($amount == null) {
                echo 'Please type a price';
                exit;
            }
            $from = $_POST['from'];
            $to = $_POST['to'];
            $url = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
            $data = file_get_contents($url);
            preg_match("/<span class=bld>(.*)<\/span>/", $data, $converted);
            $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
            $this->saveHistory('Convert currency from ' . $from . ' to ' . $to . ' with amount  ' . $amount);
            echo round($converted, 2);
        }
    }

    protected function isUrlUnique($id,$url){
        if(empty($url)) {
            return false;
        }

        $productModel = new ProductModel();
        /** @var ProductModel $product */
        $product = $productModel->getProductByUrl($url);
        if($product->id !== '' && (int)$product->id != $id){
            return false;
        }
        return true;
    }

    public function checkUrlUnique($id){
        $url = isset($_GET['product_url'])?$_GET['product_url']:'';
        if(empty($url)) {
            echo json_encode(array('result' => 1));
            return ;
        }

        $productModel = new ProductModel();
        /** @var ProductModel $product */
        $product = $productModel->getProductByUrl($url);
        if($product->id !== '' && (int)$product->id != $id){
            echo json_encode(array('result'=>0));
            return ;
        }
        echo json_encode(array('result'=>1));
    }

}
