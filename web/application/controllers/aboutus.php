<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutus extends CI_Controller {

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


		$this->load->view('header_scripts');
		$this->load->view('header');
		$this->load->view('about_us');
		$this->load->view('footer');
		$this->load->view('footer_scripts');
	}
}