<?php

/**
 * Created by PhpStorm.
 * User: ntnt
 * Date: 8/21/2017
 * Time: 3:39 PM
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Comment  extends ADMIN_Controller
{
    private $num_rows = 10;

    public function index($page = 0)
    {
        $this->load->model('CommentsModel');
        $this->login_check();
        /*if (isset($_GET['delete'])) {
            $this->AdminModel->deletePost($_GET['delete']);
            redirect('admin/blog');
        }*/
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Top Comments';
        $head['description'] = '!';
        $head['keywords'] = '';


        /*if ($this->input->get('search') !== NULL) {
            $search = $this->input->get('search');
        } else {
            $search = null;
        }*/
        $search = null;
        $data = array();
        $commentModel = new CommentsModel();
        $rowscount = $this->AdminModel->postsCount($search);

        $data['posts'] = $commentModel->loadTop();
        $data['links_pagination'] = '';//pagination('admin/blog', $rowscount, $this->num_rows, 3);
        $data['page'] = $page;

        $this->load->view('_parts/header', $head);
        $this->load->view('comment/comments', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to Comments');
    }
}