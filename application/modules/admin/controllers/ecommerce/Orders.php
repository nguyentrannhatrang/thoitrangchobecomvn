<?php

/*
 * @Author:    Kiril Kirkov
 *  Gitgub:    https://github.com/kirilkirkov
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Orders extends ADMIN_Controller
{

    private $num_rows = 10;

    public function index($page = 0)
    {
        $this->load->model('Booking');
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Booking';
        $head['description'] = '!';
        $head['keywords'] = '';

        $order_by = null;
        if (isset($_GET['order_by'])) {
            $order_by = $_GET['order_by'];
        }
        $filter = array();
        $booking = new Booking();
        $rowscount = $booking->loadFilterCount($filter);
        $data['orders'] = $booking->loadFilter($filter,$this->num_rows, $page);
        $data['links_pagination'] = pagination('admin/orders', $rowscount, $this->num_rows, 3);
        $this->load->view('_parts/header', $head);
        $this->load->view('ecommerce/orders', $data);
        $this->load->view('_parts/footer');
        if ($page == 0) {
            $this->saveHistory('Go to orders page');
        }
    }

    public function changeOrdersOrderStatus()
    {
        $this->login_check();
        $result = $this->AdminModel->changeOrderStatus($_POST['the_id'], $_POST['to_status']);
        if ($result == true) {
            echo 1;
        } else {
            echo 0;
        }
        $this->saveHistory('Change order status on product Id ' . $_POST['the_id'] . ' to status ' . $_POST['to_status']);
    }

}
