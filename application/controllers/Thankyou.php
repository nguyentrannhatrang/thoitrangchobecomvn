<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends MY_Controller
{

    private $orderId;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BookingDetailModel');
        $this->load->model('CategoryModel');
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
        $data['listSize'] = $this->SizeModel->loadArray();
        $head['title_page'] = 'Thankyou';
        $this->send();
        $this->render2('thankyou', $head, $data);
    }

    public function send(){
        // Set SMTP Configuration
        $emailConfig = $this->config->item('setting_email');
        // Set your email information
        $from = $this->config->item('email_from');

        $to = array('nguyentrannhatrang@gmail.com');
        $subject = 'Your gmail subject here';
        //  $message = 'Type your gmail message here'; // use this line to send text email.
        // load view file called "welcome_message" in to a $message variable as a html string.
        try{
            $message = '000000';//$this->load->view('email_template.php',array(),true);
            // Load CodeIgniter Email library
            $this->load->library('email', $emailConfig);
            // Sometimes you have to set the new line character for better result
            $this->email->set_newline("\r\n");
            // Set email preferences
            $this->email->from($from['email'], $from['name']);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);
            // Ready to send email and check whether the email was successfully sent
            if (!$this->email->send()) {
                // Raise error message
                show_error($this->email->print_debugger());
            } else {
                // Show success notification or other things here
                echo 'Success to send email';
            }
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }
    protected function loadBooking($bkId){
        $this->Booking->load($bkId);
    }

}
