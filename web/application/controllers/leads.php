<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class policy extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('CityModel');
        $this->load->model('LeadsModel');
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
		

		$this->load->view('header_scripts');
		$this->load->view('header',$data);
		$this->load->view('leads');
		$this->load->view('footer');
		$this->load->view('footer_scripts');
	}



    /*
     * Save Leads
     */
    public function savelead(){
        $data = array(
            'status'=>TRUE,
            'msg' =>'Sorry!! Some issue while purforming the task.'
        );
        $userData = array();
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('course', 'course', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');
        $saveData = array(
            'name' => strip_tags($this->input->post('name')),
            'email' => strip_tags($this->input->post('email')),
            'course_id' => $this->input->post('course'),
            'contact' => strip_tags($this->input->post('phone')),
            'note' => strip_tags($this->input->post('message')),
            'lead_id' => '',
            'institute_id' => strip_tags($this->input->post('institute_id'))
        );

        if($this->form_validation->run() == true){
            $insert = $this->LeadsModel->insert($saveData);
            if($insert){
                $this->session->set_userdata('msg', 'Lead saved successfully');
                
                $data['msg'] = 'Lead saved successfully';
                $data['status'] = TRUE;
            
            }else{
                $data['msg'] = 'Some problems occured, please try again.';
            }
            
        }
        echo json_encode($data);
    }
    


}
