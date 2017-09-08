<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Schools extends MY_Controller
{

    private $orderId;

    public function __construct()
    {
        $this->load->model('DistrictModel');
        $this->load->model('ProvinceModel');
        $this->load->model('SchoolsModel');
        parent::__construct();

    }

    public function index()
    {
        $data = array();
        $head = array();
        $head['title_page'] = 'Danh sách trường mầm non';
        $head['page_name'] = 'schools';
        $listDistrict = $this->loadListDistrict();
        $data['list_district'] = $listDistrict;
        $district = isset($_GET['district'])?$_GET['district']:current($listDistrict)->getId();
        $data['current_district'] = $district;
        $data['list_schools'] = $this->getSchoolsByDistrict($district);
        $this->renderUa('schools', $head, $data);
    }

    /**
     * @param $district
     * @return array
     */
    protected function getSchoolsByDistrict($district){
        $schoolsModel = new SchoolsModel();
        return $schoolsModel->loadByDistrict($district);
    }

    /**
     * @param string $province
     * @return array
     */
    protected function loadListDistrict($province = 'HCM'){
        $districtModel = new DistrictModel();
        return $districtModel->load();
    }

    /**
     * @param string $url
     * @return SchoolsModel
     */
    protected function loadSchoolsByUrl($url = ''){
        $schoolsModel = new SchoolsModel();
        return $schoolsModel->loadByUrl($url);
    }



    public function load($url)
    {
        $data = array();
        $head = array();

        $head['page_name'] = 'schools-detail';
        $schools = $this->loadSchoolsByUrl($url);
        $head['title_page'] = $schools->getName();
        $head['url_schools'] = $schools->getUrl();
        $data['schools'] = $schools;
        $this->renderUa('schools-detail', $head, $data);
    }

}
