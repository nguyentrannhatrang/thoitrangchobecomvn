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

    /**
     * @param array $filter
     * @return array
     * @throws Exception
     */
    public function loadFilter($filter = array(),$rowPerPage = 10,$page = 0){
        try{
            $this->db->select('booking.*, traveller.name as traveller_name,
        traveller.email,traveller.phone,traveller.address');
            $this->db->join('traveller', 'traveller.id = booking.user_id');

            if(isset($filter['Id']) && $filter['Id'])
                $this->db->where('booking.id', $filter['Id']);
            if(isset($filter['user_id']) && $filter['user_id'])
                $this->db->where('booking.user_id', $filter['user_id']);
            if(isset($filter['status']) && $filter['status'])
                $this->db->where('booking.status', $filter['status']);
            if(isset($filter['created']) && $filter['created'])
                $this->db->where('booking.created', $filter['created']);
            if(isset($filter['less_created']) && $filter['less_created'])
                $this->db->where('booking.created <=', $filter['less_created']);
            if(isset($filter['more_created']) && $filter['more_created'])
                $this->db->where('booking.created >=', $filter['more_created']);
            if(isset($filter['email']) && $filter['email'])
                $this->db->where('traveller.email', $filter['email']);
            if(isset($filter['phone']) && $filter['phone'])
                $this->db->where('traveller.phone', $filter['phone']);
            $this->db->limit($rowPerPage,($page)*$rowPerPage);
            $this->db->order_by('created', 'DESC');
            $query = $this->db->get('booking');
            $arr = array();
            if ($query !== false) {
                foreach ($query->result_array() as $row) {
                    $arr[] = $row;
                }
            }
            return $arr;
        }catch (\Exception $e){
            throw $e;
        }
    }

    /**
     * @param array $filter
     * @return mixed
     * @throws Exception
     */
    public function loadFilterCount($filter = array())
    {
        try{
            $this->db->select('booking.*, traveller.name as traveller_name,
        traveller.email,traveller.phone,traveller.address');
            $this->db->join('traveller', 'traveller.id = booking.user_id');

            if(isset($filter['Id']) && $filter['Id'])
                $this->db->where('booking.id', $filter['Id']);
            if(isset($filter['user_id']) && $filter['user_id'])
                $this->db->where('booking.user_id', $filter['user_id']);
            if(isset($filter['status']) && $filter['status'])
                $this->db->where('booking.status', $filter['status']);
            if(isset($filter['created']) && $filter['created'])
                $this->db->where('booking.created', $filter['created']);
            if(isset($filter['less_created']) && $filter['less_created'])
                $this->db->where('booking.created <=', $filter['less_created']);
            if(isset($filter['more_created']) && $filter['more_created'])
                $this->db->where('booking.created >=', $filter['more_created']);
            if(isset($filter['email']) && $filter['email'])
                $this->db->where('traveller.email', $filter['email']);
            if(isset($filter['phone']) && $filter['phone'])
                $this->db->where('traveller.phone', $filter['phone']);

            return $this->db->count_all_results('booking');           
        }catch (\Exception $e){
            throw $e;
        }
    }

}