<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {



    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->model('StudentInfo');
        $this->load->model('UserSocialModel');

    }
    
    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('users/account', $data);
        }else{
            redirect('users/login');
        }
    }
    
    /*
     * User login
     */
    public function login(){
        $data = array();
        $data['isUserLoggedIn'] = FALSE;
    	$data['error_msg'] = 'Wrong email or password, please try again.';
        

        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('email') && $this->input->post('password')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password'=>$this->input->post('password'),
                    'is_active'=>1,
                    //'password' => md5($this->input->post('password')),
                );
                $checkLogin = $this->UserModel->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('isSocial',FALSE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    $this->session->set_userdata('user',$checkLogin);
                    $data['isUserLoggedIn'] = TRUE;
                    $data['isSocial'] = FALSE;
                    $data['userId'] = $checkLogin['id'];
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                    $data['query'] = $this->db->last_query();
                    $data['isUserLoggedIn'] = FALSE;
                }
            }
        }
        //load the view
        //$this->load->view('users/login', $data);
        echo json_encode($data);
    }
    
    /*
     * User registration
     */
    public function register(){
        $data = array(
            'status'=>TRUE,
            'msg' =>'Sorry!! Unable to register'
        );
        $userData = array();
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('cpassword', 'confirm password', 'required|matches[password]');
        $session_city_id = !empty($this->session->get_userdata('user')['session_city']) ? $this->session->get_userdata('user')['session_city']['id'] : 1;
        $userData = array(
            'name' => strip_tags($this->input->post('name')),
            'email' => strip_tags($this->input->post('email')),
            //'password' => md5($this->input->post('password')),
            'password' => $this->input->post('password'),
            'contact' => strip_tags($this->input->post('phone')),
            'city_id' => $session_city_id,
            'dob' => ''
        );

        if($this->form_validation->run() == true){
            $is_email_present = $this->isEmailPresent(strip_tags($this->input->post('email')));
            if(!$is_email_present){
                $insert = $this->UserModel->insert($userData);
                if($insert){
                    $this->session->set_userdata('msg', 'Your registration was successfully. Please login to your account.');
                    
                    $con['returnType'] = 'single';
                    $con['conditions'] = array(
                        'email'=>$this->input->post('email'),
                        'password'=>$this->input->post('password'),
                        'is_active'=>1,
                        //'password' => md5($this->input->post('password')),
                    );
                    $checkLogin = $this->UserModel->getRows($con);
                    if($checkLogin){
                        $this->session->set_userdata('isUserLoggedIn',TRUE);
                        $this->session->set_userdata('userId',$checkLogin['id']);
                        $this->session->set_userdata('user',$checkLogin);
                        $data['isUserLoggedIn'] = TRUE;
                        $data['status'] = TRUE;
                        $data['userId'] = $checkLogin['id'];
                    }else{
                        $data['msg'] = 'Registered successfully but not able to login';
                        $data['isUserLoggedIn'] = FALSE;
                        $data['status'] = FALSE;
                    }
                    //redirect('users/login');
                }else{
                    $data['msg'] = 'Some problems occured, please try again.';
                }
            } else {
                    $data['msg'] = 'This email id is already present.';
            }
        }

        //$data['user'] = $userData;
        //load the view
        //$this->load->view('users/registration', $data);
        echo json_encode($data);
    }
    
    
    /*
     * Social Login
     */
    public function socialLogin(){
        $userData = array();
        $data = array('status' => false, 'msg' => 'function does not executed successfully.' );
        $checkLogin = array();
        $userData = array(
            'name' => strip_tags($this->input->post('first_name')).' '.strip_tags($this->input->post('last_name')),
            'email' => strip_tags($this->input->post('email')),
            'oauth_provider' => strip_tags($this->input->post('oauth_provider')),
            'oauth_uid' => strip_tags($this->input->post('oauth_uid')),
            'gender' => strtoupper(strip_tags($this->input->post('gender'))),
            'locale' => strip_tags($this->input->post('locale')),
            'picture' => strip_tags($this->input->post('picture')),
            'contact' => '',
            'city_id' => 0,
            'dob' => '',
            'link' => strip_tags($this->input->post('link'))
        );

        //Check if email id is already present in tbl_users
        $data['isSocial'] = TRUE;
        $this->session->set_userdata('isSocial',TRUE);
        $is_email_present = $this->isEmailPresent(strip_tags($this->input->post('email')));
        if($is_email_present){
            //if Present Store user_id in student_id of tbl_social_user, Get details from tbl_user and show him logged in
            $con['returnType'] = 'single';
            $con['conditions'] = array(
                'email'=>$this->input->post('email'),
            );
            $checkLogin = $this->UserModel->getRows($con);  
            $data['isSocial'] = FALSE;
            $this->session->set_userdata('isSocial',FALSE);
            //$insert = $this->UserSocialModel->insert($userData);
        } else {
            //If Email is not presnt.
            //Check if already social_user
            $consocial['returnType'] = 'single';
            $consocial['conditions'] = array(
                'email' => strip_tags($this->input->post('email')),
                'oauth_provider' => strip_tags($this->input->post('oauth_provider')),
                'oauth_uid' => strip_tags($this->input->post('oauth_uid')),
            );
            $checkSocial = $this->UserSocialModel->getRows($consocial);
            if($checkSocial){
                //If he is old social user, fetch data and make him login
                $checkLogin = $checkSocial;
                $data['query'] = 'not';
            } else {
                //else insert and fetch and make login    
                $insert = $this->UserSocialModel->insert($userData);             
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email' => strip_tags($this->input->post('email')),
                    'oauth_provider' => strip_tags($this->input->post('oauth_provider')),
                    'oauth_uid' => strip_tags($this->input->post('oauth_uid')),
                );
                $checkLogin = $this->UserSocialModel->getRows($con);
            }
            
        }


        if($checkLogin){
            $this->session->set_userdata('isUserLoggedIn',TRUE);
            $this->session->set_userdata('userId',$checkLogin['id']);
            $this->session->set_userdata('user',$checkLogin);
            $data['status'] = TRUE;
            $data['userId'] = $checkLogin['id'];
        }else{
            $data['msg'] = 'Wrong email or password, please try again.';
            //$data['query'] = $this->db->last_query();
            $data['status'] = FALSE;
        }
        echo json_encode($data);
    }





    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->unset_userdata('user');
        $this->session->sess_destroy();
        $data['status'] = TRUE;
        echo json_encode($data);
    }
    
    /*
     * Existing email check during validation
     */
    public function isEmailPresent($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->UserModel->getRows($con);
        if(!empty($checkEmail)){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return TRUE;
        } else {
            return FALSE;
        }
    }


}
