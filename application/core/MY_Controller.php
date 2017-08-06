<?php

class MY_Controller extends MX_Controller
{

    public $nonDynPages = array();
    private $dynPages = array();
    protected $template;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
        $this->load->library('GenerateData');
        $this->getActivePages();
        $this->checkForPostRequests();
        $this->setReferrer();
        //set selected template
        $this->loadTemplate();
    }

    /*
     * Render page from controller
     * it loads header and footer auto
     */

    public function render($view, $head, $data = null, $footer = null)
    {
        ///$head['cartItems'] = $this->shoppingcart->getCartItems();
        //$head['sumOfItems'] = $this->shoppingcart->sumValues;
        $head['menu'] = $this->getListMenu();
        $head['current_menu'] = array($view=>true);
        $vars = $this->loadVars();
        $this->load->vars($vars);
        $this->load->view($this->template . '_parts/header', $head);
        $this->load->view($this->template . $view, $data);
        $this->load->view($this->template . '_parts/footer', $footer);
    }

    /**
     * @return array
     */
    public function getListMenu(){
        $topCategories = array();
        /** @var Categorymodel[]  $categories */
        $categories = $this->CategoryModel->loadAll();
        /** @var CategoryModel $category */
        foreach ($categories as $category){
            if(!$category->subFor && !isset($topCategories[$category->id])){
                $topCategories[$category->id]= $category;
            }           
        }
        return $topCategories;
    }
    
    

    /*
     * Render page from controller
     * it loads header and footer auto
     */

    public function render2($view, $head, $data = null, $footer = null)
    {
        //$head['cartItems'] = $this->shoppingcart->getCartItems();
        //$head['sumOfItems'] = $this->shoppingcart->sumValues;
        $head['menu'] = $this->getListMenu();
        $head['current_menu'] = array($view=>true);
        $vars = $this->loadVars();
        $this->load->vars($vars);
        $sufix = '1';
        if(strpos($this->template,'\\ua\\'))
            $sufix ='';
        $this->load->view($this->template . '_parts/header'.$sufix, $head);
        $this->load->view($this->template . $view, $data);
        $this->load->view($this->template . '_parts/footer'.$sufix, $footer);
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getAllProduct(){
        try{
            $generate = new GenerateData();
            $result = $generate->loadListProducts();
            if(is_null($result)){
                $result = array();
                $product = new ProductModel();
                $list = $product->loadAll(false);
                /** @var ProductModel $item */
                foreach ($list as $item){
                    $result[] = $item->getName();
                }
            }
            if(!empty($result))
                return '"'.implode('","',$result).'"';
            return '';
        }catch (\Exception $e){
            throw $e;
        }
    }



    /*
     * Render page from controller
     * it loads header and footer auto
     */

    public function renderUa($view, $head, $data = null, $footer = null)
    {
        if(empty($footer))
            $footer = array();
        //$head['cartItems'] = $this->shoppingcart->getCartItems();
        //$head['sumOfItems'] = $this->shoppingcart->sumValues;
        //$head['menu'] = $this->getListMenu();
        $head['current_menu'] = array($view=>true);
        $data['top_menu'] = $this->getLeftMenu();
        $data['listProductName'] = $this->getAllProduct();
        $vars = $this->loadVars();
        $this->load->vars($vars);
        $this->load->view($this->template . '_parts/header', $head);
        $this->load->view($this->template . $view, $data);
        $this->load->view($this->template . '_parts/footer', $footer);
    }

    /*
     * Load variables from values-store
     * texts, social media links, logos, etc.
     */

    private function loadVars()
    {
        $vars = array();
        $vars['nonDynPages'] = $this->nonDynPages;
        $vars['dynPages'] = $this->dynPages;
        $vars['footerCategories'] = $this->Publicmodel->getFooterCategories();
        $vars['sitelogo'] = $this->AdminModel->getValueStore('sitelogo');
        $vars['naviText'] = htmlentities($this->AdminModel->getValueStore('navitext'));
        $vars['footerCopyright'] = htmlentities($this->AdminModel->getValueStore('footercopyright'));
        $vars['contactsPage'] = $this->AdminModel->getValueStore('contactspage');
        $vars['footerContactAddr'] = htmlentities($this->AdminModel->getValueStore('footerContactAddr'));
        $vars['footerContactPhone'] = htmlentities($this->AdminModel->getValueStore('footerContactPhone'));
        $vars['footerContactEmail'] = htmlentities($this->AdminModel->getValueStore('footerContactEmail'));
        $vars['footerAboutUs'] = $this->AdminModel->getValueStore('footerAboutUs');
        $vars['footerSocialFacebook'] = $this->AdminModel->getValueStore('footerSocialFacebook');
        $vars['footerSocialTwitter'] = $this->AdminModel->getValueStore('footerSocialTwitter');
        $vars['footerSocialGooglePlus'] = $this->AdminModel->getValueStore('footerSocialGooglePlus');
        $vars['footerSocialPinterest'] = $this->AdminModel->getValueStore('footerSocialPinterest');
        $vars['footerSocialYoutube'] = $this->AdminModel->getValueStore('footerSocialYoutube');
        $vars['addedJs'] = $this->AdminModel->getValueStore('addJs');
        $vars['publicQuantity'] = $this->AdminModel->getValueStore('publicQuantity');
        $vars['moreInfoBtn'] = $this->AdminModel->getValueStore('moreInfoBtn');
        $vars['allLanguages'] = $this->getAllLangs();
        $vars['load'] = $this->loop;
        $vars['cookieLaw'] = $this->Publicmodel->getCookieLaw();
        return $vars;
    }

    /*
     * Get all added languages from administration
     */

    private function getAllLangs()
    {
        $arr = array();
        $langs = $this->AdminModel->getLanguages();
        foreach ($langs->result() as $lang) {
            $arr[$lang->abbr]['name'] = $lang->name;
            $arr[$lang->abbr]['flag'] = $lang->flag;
        }
        return $arr;
    }

    /*
     * Active pages for navigation
     * Managed from administration
     */

    private function getActivePages()
    {
        $activeP = $this->AdminModel->getPages(true);
        $dynPages = $this->config->item('no_dynamic_pages');
        $actDynPages = [];
        foreach ($activeP as $acp) {
            if (($key = array_search($acp, $dynPages)) !== false) {
                $actDynPages[] = $acp;
            }
        }
        $this->nonDynPages = $actDynPages;
        $dynPages = getTextualPages($activeP);
        $this->dynPages = $this->Publicmodel->getDynPagesLangs($dynPages);
    }

    /*
     * Email subscribe form from footer
     */

    private function checkForPostRequests()
    {
        if (isset($_POST['subscribeEmail'])) {
            $arr = array();
            $arr['browser'] = $_SERVER['HTTP_USER_AGENT'];
            $arr['ip'] = $_SERVER['REMOTE_ADDR'];
            $arr['time'] = time();
            $arr['email'] = $_POST['subscribeEmail'];
            if (filter_var($arr['email'], FILTER_VALIDATE_EMAIL) && !$this->session->userdata('email_added')) {
                $this->session->set_userdata('email_added', 1);
                $res = $this->Publicmodel->setSubscribe($arr);
                $this->session->set_flashdata('emailAdded', lang('email_added'));
            }
            if (!headers_sent()) {
                redirect();
            } else {
                echo 'window.location = "' . base_url() . '"';
            }
        }
    }

    /*
     * Set referrer to save it in orders
     */

    private function setReferrer()
    {
        if ($this->session->userdata('referrer') == null) {
            if (!isset($_SERVER['HTTP_REFERER'])) {
                $ref = 'Direct';
            } else {
                $ref = $_SERVER['HTTP_REFERER'];
            }
            $this->session->set_userdata('referrer', $ref);
        }
    }

    /*
     * Check for selected template 
     * and set it in config if exists
     */

    private function loadTemplate()
    {
        $template = $this->AdminModel->getValueStore('template');
        if ($template == null) {
            $template = $this->config->item('template');
        } else {
            $this->config->set_item('template', $template);
        }
        if (!is_dir(TEMPLATES_DIR . $template)) {
            show_error('The selected template does not exists!');
        }
        $this->template = 'templates' . DIRECTORY_SEPARATOR . $template . DIRECTORY_SEPARATOR;
    }

    /**
     * only 2 level
     * @return array
     */
    protected function getLeftMenu(){
        $generate = new GenerateData();
        $result = $generate->loadListCategories();
        if(is_null($result)){
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
        }

        return $result;
    }


}
