<?php
class Booking extends CI_Model {
    
    public $booking;
    public $details;   

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $refNo
     * @throws Exception
     */
    public function load($refNo){
        try{
            $booking = new BookingModel();
            $this->booking = $booking->getById($refNo);
            $bookingDetail = new BookingDetailModel();
            $this->details = $bookingDetail->load($refNo);
        }catch (\Exception $e){
            throw $e;
        }
    }

}