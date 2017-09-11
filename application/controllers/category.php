<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {
    protected $access = array("Admin");
	private $limit = 10;
	public function __construct(){
		parent::__construct();
		$this->load->model('category_model');
		$this->load->library('pagination');
		$this->load->library('form_validation');
	
	}
	
	public function index()
	{
		
		$cat =$this->category_model->index($this->limit);
        $total_rows=$this->category_model->count();

        $config['total_rows']=$total_rows;
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $config['base_url']=site_url("category/index");

        $this->pagination->initialize($config);
        $page_link =$this->pagination->create_links();
        $this->load->view('admin/category',compact('cat', 'page_link') );
		
	}

	function insert(){
            
            $param['category_name']=$this->input->post("category",TRUE);
            //validate
            $this->form_validation->set_rules('category', 'category','trim|required', array('required'=>'Please Input'));
			
            if($this->form_validation->run() !=false){
                $this->category_model->insert($param);
                redirect('/category', 'refresh');
            }else{
            	$this->index();
            }
            

        }


    function delete($x =''){
    	if (!empty($x)) {
            $data['condition']=array('cat_id'=>preg_replace('#[^0-9]#', '', $x));
            $this->category_model->delete($data);
            redirect('/category', 'refresh');
        }else{
        	redirect('/category', 'refresh');
        }
    }


     function view($x =''){
        if (!empty($x)) {
        	$data['condition']=array('cat_id'=>preg_replace('#[^0-9]#', '', $x));
            $index = $this->category_model->view($data);
            //$data =array('index'=>$result);
            $this->load->view('admin/edit_category', compact('index'));
        }else{
        	redirect('/category', 'refresh');
        }      
    }

     function update(){
        	
            $id=Null;
            $category=Null;
            extract($_POST);
            
            $this->form_validation->set_rules('id', 'id','trim|required', array('required'=>'Please Input'));
            $this->form_validation->set_rules('category', 'category','trim|required', array('required'=>'Please Input'));
			
             if($this->form_validation->run() !=false){
             	$param['category_id']=$id;
	            $param['category_name']=$category;
	           
                $result = $this->category_model->update($param);
                redirect('/category', 'refresh');
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
                $cat =$this->category_model->search($this->limit, $key);
                $total_rows=$this->category_model->count_search($key);

                $config['total_rows']=$total_rows;
                $config['per_page']=$this->limit;
                $config['uri_segment']=3;
                $config['base_url']=site_url("category/search");

               
                $this->pagination->initialize($config);

                $page_link =$this->pagination->create_links();
                $this->load->view('admin/category',compact('cat', 'page_link') );
            }else{
                $this->index();
            }

        }

}
