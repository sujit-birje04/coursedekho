<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->model('StudentInfo');
        $this->load->model('UserSocialModel');
        $this->load->model('CityModel');
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
		//Get User data
        $userDetails = $this->session->get_userdata('user');
        if(!empty($userDetails['user'])){
	        //Get Student Data
			$this->load->model('StudentInfo');
	        $con['returnType'] = 'single';
	        $con['conditions'] = array(
	            'student_id'=>$userDetails['user']['student_id'],
	        );
	        $arrStudentInfo = $this->StudentInfo->getRows($con);
	        
	        //Get Course Data
			$this->load->model('StudentCourse');
	        $con['conditions'] = array(
	        	//'student_id'=>1,
	            'student_id'=>$userDetails['user']['student_id'],
	        );
	        $arrStudentCourse = $this->StudentCourse->getResult($con);
			$this->load->model('InstituteInfoModel');
	        foreach ($arrStudentCourse as $key => $studentCourse) {
		        $con['returnType'] = 'single';
		        $con['conditions'] = array(
		            'institute_id'=>$studentCourse['institute_id'],
		        );
		        $arrinstituteInfo = $this->InstituteInfoModel->getRows($con);
	        	$arrStudentCourse[$key]['institute'] = $arrinstituteInfo; 
	        }

	        $con['conditions'] = array();
	        $arrCity = $this->CityModel->getList($con);

            $session_city_id = !empty($this->session->get_userdata('session_city')['id']) ? $this->session->get_userdata('session_city')['id'] : 1;
            $con['returnType'] = 'single';
            $con['conditions'] = array('id'=>$session_city_id);
            
	        //var_dump($userDetails);
	        //Perare view data
	        $data['userDetails'] = $userDetails['user'];
	        $data['isSocial'] = isset($userDetails['isSocial']) ? $userDetails['isSocial'] : false;
	        $data['studentInfo'] = $arrStudentInfo;
	        $data['studentCourse'] = $arrStudentCourse;
	        $data['cities'] = $arrCity;
            $data['session_city'] = $this->CityModel->getRows($con);
            

			$this->load->view('header_scripts');
			$this->load->view('header',$data);
			$this->load->view('profile', $data);
			$this->load->view('footer');
			$this->load->view('footer_scripts');
		} else {
			redirect('/home', 'refresh');
		}
	}


	/*
     * User Profile Uppdate
     */
    public function editprofile(){
        $data = array();
        $userData = array();
        $returnData = array('status' => false, 'msg' => 'function does not executed successfully.' );

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('dob', 'password', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        
        $userData = array(
            'name' => strip_tags($this->input->post('name')),
            'dob' => strip_tags($this->input->post('dob')),
            'contact' => strip_tags($this->input->post('phone')),
            'gender' => strip_tags($this->input->post('gender')),
            'city_id' => strip_tags($this->input->post('city')),
        );

        $params['conditions'] = array(
            'id' => strip_tags($this->input->post('id'))
        );

        if($this->form_validation->run() == true){
            $update = $this->UserModel->update($params, $userData);
            if($update){
                $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                $returnData['msg'] = 'Profile updated successfully.';
                $returnData['status'] = true;

                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'id'=>$this->input->post('id'),
                );
                $checkLogin = $this->UserModel->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    $this->session->set_userdata('user',$checkLogin);
                }


            }else{
                $data['error_msg'] = 'Some problems occured, please try again.';
                $returnData['msg'] = 'Some problems occured, please try again.';
            }
        } else {
            $returnData['msg'] = 'validation failed';
        }
        echo json_encode($returnData);
    }


    /*
     * User Profile Uppdate
     */
    public function socialeditprofile(){
        $data = array();
        $userData = array();
        $returnData = array('status' => false, 'msg' => 'function does not executed successfully.' );

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('dob', 'password', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        
        $userData = array(
            'name' => strip_tags($this->input->post('name')),
            'dob' => strip_tags($this->input->post('dob')),
            'contact' => strip_tags($this->input->post('phone')),
            'gender' => strip_tags($this->input->post('gender')),
            'city_id' => strip_tags($this->input->post('city')),
        );

        $params['conditions'] = array(
            'id' => strip_tags($this->input->post('id'))
        );

        if($this->form_validation->run() == true){
            $update = $this->UserSocialModel->update($params, $userData);
            if($update){
                $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                $returnData['msg'] = 'Profile updated successfully.';
                $returnData['status'] = true;

                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'id'=>$this->input->post('id'),
                );
                $checkLogin = $this->UserSocialModel->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    $this->session->set_userdata('user',$checkLogin);
                }


            }else{
                $data['error_msg'] = 'Some problems occured, please try again.';
                $returnData['msg'] = 'Some problems occured, please try again.';
            }
        } else {
            $returnData['msg'] = 'validation failed';
        }
        echo json_encode($returnData);
    }






}
