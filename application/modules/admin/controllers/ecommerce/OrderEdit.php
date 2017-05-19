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

    public function index($id = 0)
    {
        $this->load->model('Booking');
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Booking';
        $head['description'] = '!';
        $head['keywords'] = '';
        $booking = new Booking();$this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/order_edit', $data);
        $this->load->view('_parts/footer');
    }

}
