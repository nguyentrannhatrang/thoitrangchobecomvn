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
        $this->load->model('TravellerModel');
    }

    public function index($bkId = '')
    {
        $data = array();
        $head = array();
        unset($_SESSION['shopping_cart']);
        @delete_cookie('shopping_cart');
        /** @var Booking $bookingModel */
        $bookingModel = $this->Booking;
        $bookingModel->load($bkId);
        $data['booking'] = $bookingModel;
        /** @var TravellerModel $travellerModel */
        $travellerModel = $this->TravellerModel;
        $traveller = $travellerModel->getById($bookingModel->booking->user_id);
        $listSize = $this->SizeModel->loadArray();
        $data['traveller'] = $traveller;
        $data['listSize'] = $listSize;
        $head['title_page'] = 'Thankyou';
        $head['page_name'] = 'thankyou';
        if($bookingModel->booking->getSent() != 1)
            $this->send($bookingModel,$traveller,$listSize);
        $this->renderUa('thankyou', $head, $data);
    }

    public function send(Booking $booking,TravellerModel $traveller,array $listSize = array()){
        // Set SMTP Configuration
        $emailConfig = $this->config->item('setting_email');
        // Set your email information
        $from = $this->config->item('email_from');
        $reply = $this->config->item('email_reply');

        $to = array($traveller->getEmail());
        $subject = 'Xác nhận đơn hàng #'.$booking->booking->getRefNo();
        //  $message = 'Type your gmail message here'; // use this line to send text email.
        // load view file called "welcome_message" in to a $message variable as a html string.
        try{
            $message = $this->load->view($this->template . 'email/confirm','',true);
            $message = $this->fillDataTraveller($message,$traveller);
            $message = $this->fillDataSystem($message);
            $message = $this->fillDataBooking($message,$booking,$listSize);
            //$message = '000000';//$this->load->view('email_template.php',array(),true);
            // Load CodeIgniter Email library
            $this->load->library('email', $emailConfig);
            // Sometimes you have to set the new line character for better result
            $this->email->set_newline("\r\n");
            // Set email preferences
            $this->email->from($from['email'], $from['name']);
            $this->email->reply_to($reply['email'], $reply['name']);
            $this->email->bcc($reply['email'], $reply['name']);
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);
            // Ready to send email and check whether the email was successfully sent
            if (!$this->email->send()) {
                // Raise error message
                show_error($this->email->print_debugger());
            } else {
                // Show success notification or other things here
               // echo 'Success to send email';
                $oBooking = new BookingModel();
                $oBooking->updateSent($booking->booking->getId());
            }
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * @param $html
     * @param TravellerModel $traveller
     * @return mixed
     * @throws Exception
     */
    protected function fillDataTraveller($html,TravellerModel $traveller)
    {
        try{
            $html = str_replace('{{traveller-name}}',$traveller->getName(),$html);
            $html = str_replace('{{email}}',$traveller->getEmail(),$html);
            $html = str_replace('{{phone}}',$traveller->getPhone(),$html);
            $html = str_replace('{{address}}',$traveller->getAddress(),$html);
            return $html;
        }catch (\Exception $e){
            throw $e;
        }
    }
    protected function fillDataBooking($html,Booking $booking,array $listSize = array())
    {
        try{
            $bookingModel = $booking->booking;
            $details = $booking->details;
            $html = str_replace('{{date-time}}',$this->getDateFormat($bookingModel->getCreated()),$html);
            $html = str_replace('{{refno}}',$bookingModel->getRefNo(),$html);
            $html = str_replace('{{booking-id}}',$bookingModel->getId(),$html);
            $html = str_replace('{{total}}',number_format($bookingModel->getTotal(), 0, '', '.'),$html);
            $data = PartitionString('<!--s-item-->','<!--e-item-->',$html);
            $contentItem = '';
            if(isset($data[1])){
                /** @var BookingDetailModel $item */
                foreach ($details as $item){
                    $itemHtml = $data[1];
                    $itemHtml = str_replace('{{product-name}}',$item->getProductName(),$itemHtml);
                    $itemHtml = str_replace('{{size-name}}',
                        isset($listSize[$item->getSize()])?$listSize[$item->getSize()]:$item->getSize(),
                        $itemHtml
                        );
                    $itemHtml = str_replace('{{price}}',number_format($item->getPrice(), 0, '', '.'),$itemHtml);
                    $itemHtml = str_replace('{{quantity}}',$item->getQuantity(),$itemHtml);
                    $itemHtml = str_replace('{{total-item}}',number_format($item->getTotal(), 0, '', '.'),$itemHtml);
                    $contentItem .= $itemHtml;
                }
            }
            $html = $data[0].$contentItem.(isset($data[2])?$data[2]:'');
            return $html;
        }catch (\Exception $e){
            throw $e;
        }
    }

    /**
     * @param $time
     * @return string
     */
    protected function getDateFormat($time){
        $year = date('Y',$time);
        $month = date('m',$time);
        $day = date('d',$time);
        return 'Ngày '.$day.' Tháng '.$month.' Năm '.$year. ' '.date('H:i:s',$time);
    }

    /**
     * @param $html
     * @return mixed
     * @throws Exception
     */
    protected function fillDataSystem($html)
    {
        try{
            $html = str_replace('{{domain}}',$_SERVER['SERVER_NAME'],$html);
            return $html;
        }catch (\Exception $e){
            throw $e;
        }
    }
    protected function loadBooking($bkId){
        $this->Booking->load($bkId);
    }

}
