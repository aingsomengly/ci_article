<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	/*public function __construct(){
		parent::__construct();
	
	}*/
	
	public function logged_in_check()
	{
		if ($this->session->userdata("logged_in")) {
			redirect("article");
		}
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules("username", "username", "trim|required" , array('required'=>'Please Input'));
		$this->form_validation->set_rules("password", "password", "trim|required" , array('required'=>'Please Input'));
		if ($this->form_validation->run() == true) {

			$this->load->model('user_model', 'user');

			// check the username & password of user
			$status = $this->user->validate();

			if ($status == "ERR_INVALID_USERNAME") {
				//echo $status;
				$this->session->set_flashdata("error", "Username OR Password is invalid");
				$this->index();
			}
			elseif ($status == "ERR_INVALID_PASSWORD") {
				$this->session->set_flashdata("error", "Password OR Password is invalid");
			}
			else
			{
				// success
				// store the user data to session
				$this->session->set_userdata($this->user->get_data());
				$this->session->set_userdata("logged_in", true);
				// redirect to dashboard
				redirect("article");
			}
		}else{
			$this->index();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata("logged_in");
		$this->session->sess_destroy();
		redirect('/admin', 'refresh');
	}
}
