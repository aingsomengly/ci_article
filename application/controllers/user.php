<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    protected $access = array("Admin");
	private $limit = 2;
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('pagination');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		
		$userlist =$this->user_model->index($this->limit);
        $total_rows=$this->user_model->count();

        $config['total_rows']=$total_rows;
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $config['base_url']=site_url("user/index");

        $this->pagination->initialize($config);
        $page_link =$this->pagination->create_links();
        $this->load->view('admin/user',compact('userlist', 'page_link') );
		
	}


     function insert(){
           
           
            $param['user_name']=$this->input->post("username",TRUE);
            $param['user_pass']=$this->input->post("password",TRUE);
            $param['user_types']=$this->input->post("roles",TRUE);
            //validate
            $this->form_validation->set_rules('username', 'username','trim|required', array('required'=>'Please Input'));
			$this->form_validation->set_rules('password', 'password','trim|required', array('required'=>'Please Input'));
			$this->form_validation->set_rules('roles', 'roles','trim|required', array('required'=>'Please Input'));

            if($this->form_validation->run() !=false){
                $this->user_model->insert($param);
                redirect('/user', 'refresh');
            }else{
            	$this->index();
            }
            

        }

        function delete($x =''){
        	if (!empty($x)) {
	            $data['condition']=array('u_id'=>preg_replace('#[^0-9]#', '', $x));
	            $this->user_model->delete($data);
                redirect('/user', 'refresh');
	        }else{
            	redirect('/user', 'refresh');
	        }
        }


         function view($x =''){
            if (!empty($x)) {
            	$data['condition']=array('u_id'=>preg_replace('#[^0-9]#', '', $x));
	            $result = $this->user_model->view($data);
	            $data =array('index'=>$result);
	            $this->load->view('admin/edit_user', $data);
            }else{
            	redirect('/user', 'refresh');
            }
            
        }

        function update(){
        	
            $this->form_validation->set_rules('id', 'id','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('username', 'username','trim|required', array('required'=>'Please Input'));
			$this->form_validation->set_rules('password', 'password','trim|required', array('required'=>'Please Input'));
			$this->form_validation->set_rules('roles', 'roles','trim|required', array('required'=>'Please Input'));
			
             if($this->form_validation->run() !=false){
             	$param['user_id']=$this->input->post("id",TRUE);
	            $param['user_name']=$this->input->post("username",TRUE);
	            $param['user_pass']=$this->input->post("password",TRUE);
	            $param['user_types']=$this->input->post("roles",TRUE);

                $result = $this->user_model->update($param);
                redirect('/user', 'refresh');
            }else{
            	$this->view($id);
            }
        }

          function search(){
            $key="";
            if ($this->input->post("key",TRUE)) {
                $key =$this->input->post("key",TRUE);
                $this->session->set_userdata('key', $key);
            }elseif ($this->session->userdata('key')) {
                $key =$this->session->userdata('key');
            }
           	
            if(!empty($key)){
                $userlist =$this->user_model->search($this->limit, $key);
		        $total_rows=$this->user_model->count_search($key);

		        $config['total_rows']=$total_rows;
		        $config['per_page']=$this->limit;
		        $config['uri_segment']=3;
		        $config['base_url']=site_url("user/search");

		       
		        $this->pagination->initialize($config);

		        $page_link =$this->pagination->create_links();
		        $this->load->view('admin/user',compact('userlist', 'page_link') );
            }else{
            	$this->index();
            }

        }


}
