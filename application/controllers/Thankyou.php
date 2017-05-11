<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends MY_Controller
{

    private $orderId;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BookingDetailModel');
        $this->load->model('BookingModel');
        $this->load->model('Booking');
        $this->load->model('SizeModel');
    }

    public function index($bkId = '')
    {
        $data = array();
        $head = array();
        unset($_SESSION['shopping_cart']);
        @delete_cookie('shopping_cart');
        $this->Booking->load($bkId);
        $data['booking'] = $this->Booking;
        $data['listSize'] = $this->SizeModel->loadArray();;
        $this->render2('thankyou', $head, $data);
    }

    
    protected function loadBooking($bkId){
        $this->Booking->load($bkId);
    }

}
