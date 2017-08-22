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
class EditSchools  extends ADMIN_Controller
{
    public function index($id = 0)
    {
        $this->load->model('SchoolsModel');
        $this->load->model('DistrictModel');
        $this->load->model('ProvinceModel');
        $this->login_check();
        $data = array();
        $head = array();
        $head['title'] = 'Administration - Edit Comments';
        $head['description'] = '!';
        $head['keywords'] = '';
        $search = null;
        $data = array();
        $schoolsModel = new SchoolsModel();
        $provinceModel = new ProvinceModel();
        $districtModel = new DistrictModel();

        $data['listProvince'] = $provinceModel->loadArray();
        $data['listDistrict'] = $districtModel->loadArray();
        if($id)
            $schoolsModel->load($id);

        $data['schools'] = $schoolsModel;
        $data['links_pagination'] = '';//pagination('admin/blog', $rowscount, $this->num_rows, 3);


        $this->load->view('_parts/header', $head);
        $this->load->view('schools/editSchools', $data);
        $this->load->view('_parts/footer');
        $this->saveHistory('Go to Edit Schools');
    }
    public function save(){
        $this->load->model('SchoolsModel');
        $schoolsModel = new SchoolsModel();
        $result = false;
        if (isset($_POST['submit'])) {

            if(isset($_POST['id']) && $_POST['id']){
                $schoolsModel->load($_POST['id']);
            }
            $schoolsModel->setName(isset($_POST['name'])?$_POST['name']:'');
            $schoolsModel->setDescription(isset($_POST['description'])?$_POST['description']:'');
            $schoolsModel->setUrl(isset($_POST['url'])?$_POST['url']:'');
            $schoolsModel->setAddress(isset($_POST['address'])?$_POST['address']:'');
            $schoolsModel->setDistrict(isset($_POST['district'])?$_POST['district']:'');
            $schoolsModel->setPhone(isset($_POST['phone'])?$_POST['phone']:'');
            //$schoolsModel->set(isset($_POST['district'])?$_POST['district']:'');
            if($schoolsModel->getId())
                $result = $schoolsModel->update();
            else
                $result = $schoolsModel->insert();
        }
        if ($result !== false) {
            $this->session->set_flashdata('result_publish', 'Successful published!');
            redirect('admin/schools');
        } else {
            $this->session->set_flashdata('result_publish', 'Schools post publish error!');
        }
    }
}