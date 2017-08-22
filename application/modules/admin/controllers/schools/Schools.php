<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 8/21/2017
 * Time: 4:18 PM
 */
class Schools  extends ADMIN_Controller
{
    public function index($page = 0)
    {
        $this->load->model('SchoolsModel');
        $this->load->model('DistrictModel');
        $this->load->model('ProvinceModel');
        $this->login_check();
        /*if (isset($_GET['delete'])) {
            $this->AdminModel->deletePost($_GET['delete']);
            redirect('admin/blog');
        }*/
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Top Schools';
        $head['description'] = '!';
        $head['keywords'] = '';


        /*if ($this->input->get('search') !== NULL) {
            $search = $this->input->get('search');
        } else {
            $search = null;
        }*/
        $search = null;
        $data = array();
        $schoolsModel = new SchoolsModel();
        //$rowscount = $this->AdminModel->postsCount($search);

        $data['schools'] = $schoolsModel->loadTop();
        $data['links_pagination'] = '';//pagination('admin/blog', $rowscount, $this->num_rows, 3);
        $data['page'] = $page;

        $this->load->view('_parts/header', $head);
        $this->load->view('schools/schools', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to Schools');
    }
}