<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class institutedetails extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('CityModel');
        $this->load->model('InstituteInfoModel');
        $this->load->model('FacultyModel');
        $this->load->model('InstituteBannerModel');
        $this->load->model('InstituteCommentModel');
        $this->load->model('InstituteCourseModel');
	        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{


		//Loading url helper for css and js
		$this->load->helper('url');

        $con['conditions'] = array();
        $arrCity = $this->CityModel->getList($con);
        $data['cities'] = $arrCity;     
        $session_city_id = !empty($this->session->get_userdata('session_city')['id']) ? $this->session->get_userdata('session_city')['id'] : 1;
        $con['returnType'] = 'single';
        $con['conditions'] = array('id'=>$session_city_id);
        $data['session_city'] = $this->CityModel->getRows($con);

        $inst_id=$this->input->get('id');
        $arrInstituteInfo = array();
        if($inst_id){
        	$con['returnType'] = 'single';
	        $con['conditions'] = array(
	            'institute_id'=>$inst_id,
	        );
	        $arrInstituteInfo = $this->InstituteInfoModel->getRows($con);

            $city_id = $arrInstituteInfo['city_id'];
            $con['returnType'] = 'single';
            $con['conditions'] = array('id'=>$city_id);
            $arrInstituteInfo['city'] = $this->CityModel->getRows($con);


            $con['returnType'] = 'single';
            $con['conditions'] = array('institute_id'=>$inst_id);
            $arrInstituteInfo['faculties'] = $this->FacultyModel->getResult($con);

            $con['returnType'] = 'single';
            $con['conditions'] = array('institute_id'=>$inst_id);
            $arrInstituteInfo['banners'] = $this->InstituteBannerModel->getResult($con);

            $con['returnType'] = 'single';
            $con['conditions'] = array('institute_id'=>$inst_id);
            $arrInstituteInfo['comments'] = $this->InstituteCommentModel->getResult($con);

            $con['returnType'] = 'single';
            $con['conditions'] = array('institute_id'=>$inst_id);
            $arrInstituteInfo['courses'] = $this->InstituteCourseModel->getResult($con);

        }

		$this->load->view('header_scripts');
		$this->load->view('header',$data);
		if(!empty($arrInstituteInfo)){
			$data['instituteInfo'] = $arrInstituteInfo;
			$this->load->view('institutedetails', $data);
		} else {
			$this->load->view('404');
		}
		$this->load->view('footer');
		$this->load->view('footer_scripts');
	}
}
