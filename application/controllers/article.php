<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller {
    protected $access = array("Admin", "User");
	private $limit = 5;
	public function __construct(){
		parent::__construct();
		$this->load->model(array('article_model','category_model'));
		$this->load->library('pagination');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$category = $this->category_model->listAll();
		$article =$this->article_model->index($this->limit);
        $total_rows=$this->article_model->count();

        $config['total_rows']=$total_rows;
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $config['base_url']=site_url("article/index");

        $this->pagination->initialize($config);
        $page_link =$this->pagination->create_links();
        $this->load->view('admin/article',compact('article', 'page_link', 'category') );
		
	}

	 function insert(){
	 		$config['upload_path']          = './asset/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['encrypt_name'] 		=TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('img');
            $data = $this->upload->data();
            /*var_dump($data);
            die();*/
            $img=$data['file_name'];
            
            if (empty($img)) {
            	$img="default.jpg";
            }
            $user="1";

            $param['article_title']=$this->input->post("title",TRUE);
            $param['article_description']=$this->input->post("description",TRUE);
            $param['article_category']=$this->input->post("category",TRUE);
            $param['article_user']=$user;
            $param['article_image']=$img;
            //validate
            
            $this->form_validation->set_rules('title', 'title','trim|required', array('required'=>'Please Input'));
			$this->form_validation->set_rules('description', 'description','trim|required', array('required'=>'Please Input'));
			$this->form_validation->set_rules('category', 'category','trim|required', array('required'=>'Please Input'));
			
			
            if($this->form_validation->run() !=false){
                $this->article_model->insert($param);
                redirect('/article', 'refresh');
            }else{
            	$this->index();
            }
            

        }


	    function delete($x =''){
	    	if (!empty($x)) {
	            $data['condition']=array('art_id'=>preg_replace('#[^0-9]#', '', $x));
	            $this->article_model->delete($data);
	            redirect('/article', 'refresh');
	        }else{
	        	redirect('/article', 'refresh');
	        }
	    }

	  function view($x =''){
	        if (!empty($x)) {
	        	$category = $this->category_model->listAll();
	        	$data['condition']=array('art_id'=>preg_replace('#[^0-9]#', '', $x));
	            $view = $this->article_model->view($data);
	            $this->load->view('admin/edit_aticle', compact('category','view')) ;
	        }else{
	        	redirect('/article', 'refresh');
	        }
	        
	    }


    function update(){
            $config['upload_path']          = './asset/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $config['encrypt_name']         =TRUE;
            $this->load->library('upload', $config);
            $this->upload->do_upload('NEW_IMG');
            $data = $this->upload->data();

          
            $NEW_IMG=$data['file_name'];
            $OLD_IMG=$this->input->post("OLD_IMG",TRUE);
            $img=Null;
           

            if (!empty($NEW_IMG)) {
               $img=$NEW_IMG;
            }else{
                $img =$OLD_IMG;
            }
            

            $this->form_validation->set_rules('id', 'id','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('title', 'title','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('description', 'description','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('OLD_IMG', 'OLD_IMG','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('u_id', 'u_id','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('category', 'category','trim|required', array('required'=>'Please Input'));

             if($this->form_validation->run() !=false){

                $param['article_id']=$this->input->post("id",TRUE);
                $param['article_title']=$this->input->post("title",TRUE);
                $param['article_description']=$this->input->post("description",TRUE);
                $param['article_image']=$img;
                $param['article_user']=$this->input->post("u_id",TRUE);
                $param['article_category']=$this->input->post("category",TRUE);

                $result = $this->article_model->update($param);
                redirect('/article', 'refresh');
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
            	$category = $this->category_model->listAll();
                $article =$this->article_model->search($this->limit, $key);
		        $total_rows=$this->article_model->count_search($key);

		        $config['total_rows']=$total_rows;
		        $config['per_page']=$this->limit;
		        $config['uri_segment']=3;
		        $config['base_url']=site_url("article/search");

		       
		        $this->pagination->initialize($config);

		        $page_link =$this->pagination->create_links();
		        $this->load->view('admin/article',compact('article', 'page_link', 'category') );
            }else{
            	$this->index();
            }

        }




}
