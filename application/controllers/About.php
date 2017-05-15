<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller
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
        $head['title_page'] = 'Giới thiệu';
        $this->render2('about', $head, $data);
    }

    
    protected function loadBooking($bkId){
        $this->Booking->load($bkId);
    }

}
