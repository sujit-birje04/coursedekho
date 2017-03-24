<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
    function __construct() {
        parent::__construct();
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


        $con['conditions'] = array();
        $arrCity = $this->CityModel->getList($con);
        $data['cities'] = $arrCity;     
        $session_city_id = !empty($this->session->get_userdata('session_city')['id']) ? $this->session->get_userdata('session_city')['id'] : 1;
        $con['returnType'] = 'single';
        $con['conditions'] = array('id'=>$session_city_id);
        $data['session_city'] = $this->CityModel->getRows($con);
		

		$this->load->view('header_scripts');
		$this->load->view('header',$data);
		$this->load->view('register-institute');
		$this->load->view('footer');
		$this->load->view('footer_scripts');
	}
}
