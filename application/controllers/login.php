<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "username", "trim|required" , array('required'=>'Please Input'));
		$this->form_validation->set_rules("password", "password", "trim|required" , array('required'=>'Please Input'));
		if ($this->form_validation->run() == true) {
			echo "good to login";
		}
	}
}
