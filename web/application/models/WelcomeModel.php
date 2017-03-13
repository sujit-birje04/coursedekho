<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model {

	public function getData(){
		$query = $this->db->get('tbl_faculty');
		return $query->result();
	}


	public function getMethodTwo(){
		$query = $this->db->query("SELECT * FROM tbl_faculty;");
		return $query->result();
	}


}
