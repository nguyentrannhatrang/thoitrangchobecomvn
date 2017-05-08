<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends MY_Controller
{

    private $orderId;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('currency_convertor'));
        $this->load->library('email');
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
        $this->load->model('ProductDetailModel');
        $this->load->model('SizeModel');
        $this->load->library('session');
        $this->load->model('TravellerModel');
        $this->load->model('BookingDetailModel');
        $this->load->model('BookingModel');
    }

    public function index()
    {
        $data = array();
        $head = array();
        //$arrSeo = $this->Publicmodel->getSeo('page_checkout');
        //$head['title'] = @$arrSeo['title'];
        //$head['description'] = @$arrSeo['description'];
        //$head['keywords'] = str_replace(" ", ",", $head['title']);

        if($this->input->post()){
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $telephone = $this->input->post('phone');
            $address = $this->input->post('address');
            $message = $this->input->post('message');
            $dataCart = $this->session->userdata('shopping_cart');
            if (!empty($name) && !empty($telephone) && !empty($email) && !empty($dataCart)) {
                /** @var TravellerModel $traveller */
                $traveller = clone $this->TravellerModel;
                $traveller->address = $address;
                $traveller->email = $email;
                $traveller->phone = $telephone;
                $traveller->name = $name;
                list($aDetails,$arrReduce) = $this->getAndCheckQuantity($dataCart);
                if(!empty($aDetails)){
                    try{
                        $this->db->trans_start();
                        /** @var BookingModel $booking */
                        $booking = $this->BookingModel;
                        $travellerId = $traveller->insert();
                        $booking->user_id = $travellerId;
                        $booking->status = BookingModel::STATUS_CONFIRM;
                        $booking->updateDataFromDetail($aDetails);
                        $booking->message = $message;
                        $bkId = $booking->insert();
                        /** @var BookingDetailModel $itemDetail */
                        foreach ($aDetails as $itemDetail){
                            $itemDetail->bkId = $bkId;
                            $itemDetail->insert();
                        }
                        /** @var ProductDetailModel $item */
                        foreach ($arrReduce as $item) {
                            $item->update();
                        }
                        $this->db->trans_complete();
                        $this->db->trans_commit();
                        //send mail
                        //$this->send();
                        redirect('thankyou/index/'.$bkId);
                        return;
                    }catch (\Exception $e){
                        $this->db->trans_rollback();
                        $this->session->set_flashdata('error',
                            'error. try again');
                        redirect('checkout');
                        return;
                    }

                }else{
                    redirect('checkout');
                    return;
                }
            }
            //redirect to thankyou
        }

        $dataCart = $this->session->userdata('shopping_cart');
        if(is_null($dataCart)) $dataCart = array();
        $data['data_carts'] = $dataCart;
        $data['summary'] = $this->totalQuantityPrice();
        $this->render2('checkout', $head, $data);
    }

    protected function getAndCheckQuantity($dataCart){
        $total = 0;
        $arrReduce = array();
        $aDetails = array();
        foreach ($dataCart as $productId=>$arrSize){
            foreach ($arrSize as $sizeId=>$item) {
                if(!is_array($item)) continue;
                $product_db = $this->ProductModel->getProductById($productId);
                $product_total = $product_db->price * intval($item['quantity']);
                //$content .= $product_db->name . ' x ' . $item['quantity'] . ' = ' . $product_total . " Lei \n";
                $total += $product_total;
                /** @var ProductDetailModel $productDetail */
                $productDetail = new ProductDetailModel();
                $arrPDetail = $productDetail->loadByProductSize($productId,$sizeId);
                if(is_array($arrPDetail)) $productDetail = current($arrPDetail);
                else{
                    $this->session->set_flashdata('error','Sản phẩm không tồn tại!');
                    return array(array(),array());
                }
                if($productDetail->getQuantity() < (int)$item['quantity']){
                    $this->session->set_flashdata('error',
                        $product_db->name.',  size '.$item['size'].' không đủ số lượng!');
                    return array(array(),array());
                }
                $productDetail->quantity -= (int)$item['quantity'];
                $arrReduce[] = $productDetail;
                //reduce quantity
                //$arrReduce[] = array('product'=>$productId,'color'=>$colorId,'size'=>$sizeId,'quantity'=>$item['quantity']);
                /** @var BookingDetailModel $modelDetail */
                $modelDetail = clone $this->BookingDetailModel;
                $modelDetail->size = $sizeId;
                $modelDetail->color = $productDetail->getColor();
                $modelDetail->product_name = $product_db->name;
                $modelDetail->quantity = $item['quantity'];
                $modelDetail->product = $productId;
                $modelDetail->price = $product_db->price;
                $modelDetail->total = $product_total;
                $modelDetail->status = BookingDetailModel::STATUS_CONFIRM;
                $aDetails[] = $modelDetail;
            }
        }
        return array($aDetails,$arrReduce);
    }

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
                    $total += $item['price'];
            }
        }
        $result['quantity'] = $quantity;
        $result['total'] = $total;
        return $result;
    }
    private function goToDestination()
    {
        if ($_POST['payment_type'] == 'cashOnDelivery' || $_POST['payment_type'] == 'Bank') {
            $this->shoppingcart->clearShoppingCart();
            $this->session->set_flashdata('success_order', true);
        }
        if ($_POST['payment_type'] == 'Bank') {
            $_SESSION['order_id'] = $this->orderId;
            redirect(LANG_URL . '/checkout/successbank');
        }
        if ($_POST['payment_type'] == 'cashOnDelivery') {
            redirect(LANG_URL . '/checkout/successcash');
        }
        if ($_POST['payment_type'] == 'PayPal') {
            @set_cookie('paypal', $this->orderId, 2678400);
            redirect(LANG_URL . '/checkout/paypalpayment');
        }
    }

    private function userInfoValidate($post)
    {
        $errors = array();
        if (mb_strlen(trim($post['first_name'])) == 0) {
            $errors[] = lang('first_name_empty');
        }
        if (mb_strlen(trim($post['last_name'])) == 0) {
            $errors[] = lang('last_name_empty');
        }
        if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = lang('invalid_email');
        }
        $post['phone'] = preg_replace("/[^0-9]/", '', $post['phone']);
        if (mb_strlen(trim($post['phone'])) == 0) {
            $errors[] = lang('invalid_phone');
        }
        if (mb_strlen(trim($post['address'])) == 0) {
            $errors[] = lang('address_empty');
        }
        if (mb_strlen(trim($post['city'])) == 0) {
            $errors[] = lang('invalid_city');
        }
        return $errors;
    }

    public function orderError()
    {
        if ($this->session->flashdata('order_error')) {
            $data = array();
            $head = array();
            $arrSeo = $this->Publicmodel->getSeo('page_checkout');
            $head['title'] = @$arrSeo['title'];
            $head['description'] = @$arrSeo['description'];
            $head['keywords'] = str_replace(" ", ",", $head['title']);
            $this->render('checkout_parts/order_error', $head, $data);
        } else {
            redirect(LANG_URL . '/checkout');
        }
    }

    public function paypalPayment()
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Publicmodel->getSeo('page_checkout');
        $head['title'] = @$arrSeo['title'];
        $head['description'] = @$arrSeo['description'];
        $head['keywords'] = str_replace(" ", ",", $head['title']);
        $data['paypal_sandbox'] = $this->AdminModel->getValueStore('paypal_sandbox');
        $data['paypal_email'] = $this->AdminModel->getValueStore('paypal_email');
        $data['paypal_currency'] = $this->AdminModel->getValueStore('paypal_currency');
        $this->render('checkout_parts/paypal_payment', $head, $data);
    }

    public function successPaymentCashOnD()
    {
        if ($this->session->flashdata('success_order')) {
            $data = array();
            $head = array();
            $arrSeo = $this->Publicmodel->getSeo('page_checkout');
            $head['title'] = @$arrSeo['title'];
            $head['description'] = @$arrSeo['description'];
            $head['keywords'] = str_replace(" ", ",", $head['title']);
            $this->render('checkout_parts/payment_success_cash', $head, $data);
        } else {
            redirect(LANG_URL . '/checkout');
        }
    }

    public function successPaymentBank()
    {
        if ($this->session->flashdata('success_order')) {
            $data = array();
            $head = array();
            $arrSeo = $this->Publicmodel->getSeo('page_checkout');
            $head['title'] = @$arrSeo['title'];
            $head['description'] = @$arrSeo['description'];
            $head['keywords'] = str_replace(" ", ",", $head['title']);
            $data['bank_account'] = $this->AdminModel->getBankAccountSettings();
            $this->render('checkout_parts/payment_success_bank', $head, $data);
        } else {
            redirect(LANG_URL . '/checkout');
        }
    }

    public function paypal_cancel()
    {
        if (get_cookie('paypal') == null) {
            redirect(base_url());
        }
        @delete_cookie('paypal');
        $orderId = get_cookie('paypal');
        $this->Publicmodel->changePaypalOrderStatus($orderId, 'canceled');
        $data = array();
        $head = array();
        $head['title'] = '';
        $head['description'] = '';
        $head['keywords'] = '';
        $this->render('checkout_parts/paypal_cancel', $head, $data);
    }

    public function paypal_success()
    {
        if (get_cookie('paypal') == null) {
            redirect(base_url());
        }
        @delete_cookie('paypal');
        $this->shoppingcart->clearShoppingCart();
        $orderId = get_cookie('paypal');
        $this->Publicmodel->changePaypalOrderStatus($orderId, 'payed');
        $data = array();
        $head = array();
        $head['title'] = '';
        $head['description'] = '';
        $head['keywords'] = '';
        $this->render('checkout_parts/paypal_success', $head, $data);
    }

}
