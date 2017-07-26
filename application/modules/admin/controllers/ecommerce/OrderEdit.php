<?php

/*
 * @Author:    Kiril Kirkov
 *  Gitgub:    https://github.com/kirilkirkov
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class OrderEdit extends ADMIN_Controller
{

    /**
     * OrderEdit constructor.
     */
    public function __construct()
    {
        $this->load->library('session');
        $this->load->model('CategoryModel');
        $this->load->model('ProductModel');
        $this->load->model('ProductDetailModel');
        $this->load->model('SizeModel');
        $this->load->model('ColorModel');
        $this->load->model('TravellerModel');
        $this->load->model('BookingDetailModel');
        $this->load->model('BookingModel');
        parent::__construct();
    }

    public function index($id = 0)
    {
        $this->session->unset_userdata('booking_item');
        $this->load->model('Booking');
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Booking';
        $head['description'] = '!';
        $head['keywords'] = '';
        $booking = new Booking();
        $booking->load($id);
        $traveller = new TravellerModel();
        $data['traveller'] = $traveller;
        $data['items'] = [];
        $product = new ProductModel();
        $data['products'] = $product->loadAll();
        $this->session->set_userdata('booking',serialize(new BookingModel()));
        $this->session->set_userdata('booking_item',null);
        if($booking->booking->id){

            $bkItems = $booking->details;
            $data['traveller'] = $traveller->getById($booking->booking->user_id);
            $data['items'] = $bkItems;
            $this->session->set_userdata('booking_item',serialize($bkItems));
            $this->session->set_userdata('booking',serialize($booking->booking));
        }
        $data['booking'] = $booking->booking;
        $color = new ColorModel();
        $data['list_color'] = $color->loadArray();
        $size = new SizeModel();
        $data['list_size'] = $size->loadArray();

        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/order_edit', $data);
        $this->load->view('_parts/footer');
    }
    public function editItem()
    {
        $result = new BookingDetailModel();
        $bkId = isset($_GET['bkId'])?$_GET['bkId']:'';
        $items = $this->session->userdata('booking_item');
        if($items){
            $items = unserialize($items);
            /** @var BookingDetailModel $item */
            foreach ($items as $item) {
                if($item->id == $bkId){
                    $result = $item;
                    break;
                }
            }
        }
        echo json_encode(array('result'=>1,'data'=>$result->convertToArray($result)));
    }

    public function saveItem()
    {
        $bookingDetailModel = new BookingDetailModel();
        $items = $this->session->userdata('booking_item');
        $items = unserialize($items);
        /** @var BookingModel $booking */
        $booking = $this->session->userdata('booking');
        $booking = unserialize($booking);
        if (!empty($_POST)) {
            $itemId = $this->input->post('item_id');
            $product = $this->input->post('product');
            $color = $this->input->post('color');
            $size = $this->input->post('size');
            $quantity = $this->input->post('quantity');
            $status = $this->input->post('status');
            $price = $this->input->post('price');
            /** @var BookingDetailModel $item */
            if($items)
                foreach ($items as &$item) {
                    if($item->id == $itemId){
                        $item->product = $product;
                        /** @var  $productModel */
                        $productModel = $this->getProduct($product);
                        $item->product_name = $productModel->getName();
                        //set product name
                        $item->color = $color;
                        $item->size = $size;
                        $item->quantity = $quantity;
                        $item->status = $status;
                        $item->price = $productModel->getPrice();
                        $item->total = (float)$price;
                        break;
                    }
                }
            if(!$itemId){
                /** @var BookingDetailModel $detail */
                $detail = new BookingDetailModel();
                $detail->id = $detail->generateIdNew();
                $detail->product = $product;
                /** @var  $productModel */
                $productModel = $this->getProduct($product);
                $detail->product_name = $productModel->getName();
                //set product name
                $detail->color = $color;
                $detail->size = $size;
                $detail->quantity = $quantity;
                $detail->status = $status;
                $detail->price = $productModel->getPrice();
                $detail->total = (float)$price;
                $items[] = $detail;
            }
        }
        $booking->updateDataFromDetail($items);
        $this->session->set_userdata('booking_item',serialize($items));
        $this->session->set_userdata('booking',serialize($booking));
        $itemsArr = array();
        foreach ($items as $item){
            $itemsArr[] =  $bookingDetailModel->convertToArray($item);
        }
        $bookingModel = new BookingModel();
        echo json_encode(array('result'=>1,
            'data'=>array(
                'booking'=>$bookingModel->convertToArray($booking),
                'items'=>$itemsArr)
        ));
    }

    /**
     * @param $productId
     * @return string
     */
    private function getProductName($productId){
        /** @var ProductModel $product */
        $product = new ProductModel();
        $product = $product->getProductById($productId);
        return $product->getName();
    }

    /**
     * @param $productId
     * @return ProductModel
     */
    private function getProduct($productId){
        /** @var ProductModel $product */
        $product = new ProductModel();
        $product = $product->getProductById($productId);
        return $product;
    }

    public function save()
    {
        if (!empty($_POST) && !empty($_POST['refno'])) {
            $items = $this->session->userdata('booking_item');
            $items = unserialize($items);
            $booking = $this->session->userdata('booking');
            /** @var BookingModel $booking */
            $booking = unserialize($booking);
            $traveller = new TravellerModel();
            $traveller = $traveller->getById($booking->user_id);
            $traveller->name = isset($_POST['customer_name'])?$_POST['customer_name']:'';
            $traveller->email = isset($_POST['customer_email'])?$_POST['customer_email']:'';
            $traveller->phone = isset($_POST['customer_phone'])?$_POST['customer_phone']:'';
            $traveller->address = isset($_POST['customer_address'])?$_POST['customer_address']:'';
            $booking->status = isset($_POST['booking_status'])?(int)$_POST['booking_status']:0;
            $booking->message = isset($_POST['message'])?$_POST['message']:'';
            $booking->updateAll($traveller,$items);
        } elseif (!empty($_POST)) {//add new
            $traveller = new TravellerModel();
            $traveller->name = isset($_POST['customer_name'])?$_POST['customer_name']:'';
            $traveller->email = isset($_POST['customer_email'])?$_POST['customer_email']:'';
            $traveller->phone = isset($_POST['customer_phone'])?$_POST['customer_phone']:'';
            $traveller->address = isset($_POST['customer_address'])?$_POST['customer_address']:'';
            $items = $this->session->userdata('booking_item');
            $items = unserialize($items);
            $booking = $this->session->userdata('booking');
            $booking = unserialize($booking);
            $booking->status = isset($_POST['booking_status'])?(int)$_POST['booking_status']:0;
            $booking->message = isset($_POST['message'])?$_POST['message']:'';
            $booking->insertAll($traveller,$items);


        }

        echo json_encode(array('result'=>1,
            'data'=>array()));
    }

}
