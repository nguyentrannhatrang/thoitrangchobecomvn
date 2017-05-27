<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller
{

    private $num_rows = 1;
    protected  $arhives= false;
    public function __construct()
    {
        parent::__construct();
        if (!in_array('blog', $this->nonDynPages)) {
            show_404();
        }
        $this->load->helper(array('pagination'));
        $this->load->model('PostModel');
    }

    public function index($page = 0)
    {
        $data = array();
        $head = array();
        $arrSeo = $this->Publicmodel->getSeo('page_blog');
        //$head['title'] = @$arrSeo['title'];
        //$head['description'] = @$arrSeo['description'];
        //$head['keywords'] = str_replace(" ", ",", $head['title']);
        /*if (isset($_GET['find'])) {
            $find = $_GET['find'];
        } else {
            $find = null;
        }
        if (isset($_GET['from']) && isset($_GET['to'])) {
            $month = $_GET;
        } else {
            $month = null;
        }*/
        $head['title_page'] = 'Tin Tức';
        $postModel = new PostModel();
        $data['posts'] = $postModel->getPosts($this->num_rows, $page);
        $data['archives'] = $this->getBlogArchiveHtml();
        $data['bestSellers'] = $this->Publicmodel->getbestSellers();
        $rowscount = $this->AdminModel->postsCount();
        $data['links_pagination'] = pagination('blog', $rowscount, $this->num_rows);
        $data['right_menu'] = $this->getLeftMenu();
        $this->render2('blog', $head, $data);
    }

    public function viewPost($id)
    {
        if (!is_numeric($id) || $id <= 0) {
            show_404();
        }
        $data = array();
        $head = array();
        $postModel = new PostModel();
        $data['article'] = $postModel->getOnePost($id);
        if ($data['article'] == null) {
            show_404();
        }
        $data['right_menu'] = $this->getLeftMenu();
        $data['archives'] = $this->getBlogArchiveHtml();
        $head['title'] = $data['article']->getTitle();
        $head['description'] = url_title(character_limiter(strip_tags($data['article']->getDescription()), 130));
        $head['keywords'] = str_replace(" ", ",", $data['article']->getTitle());
        $head['title_page'] = $data['article']->getTitle();
        $this->render2('view_blog_post', $head, $data);
    }

    private function getBlogArchiveHtml()
    {
        $html = '
		<div class="alone title cloth-bg-color">
					<span>' . lang('archive') . '</span>
				</div>
				';
        if ($this->arhives !== false) {

            $html .= '<ul class="blog-artchive">';

            foreach ($this->arhives as $archive) {
                $html .= '
					<li class="item">» <a href="' . LANG_URL . '/blog?from='
                        . $archive['mintime'] . '&to=' . $archive['maxtime'] . '">'
                        . $archive['month'] . '</a></li>
				';
            }
            $html .= '</ul>';
        } else {
            $html = '<div class="alert alert-info">' . lang('no_archives') . '</div>';
        }
        return $html;
    }

}
