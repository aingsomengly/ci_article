<?php

    class User_model extends CI_Model{
        private $table="tbl_user";
        private $_data = array();

        public function __construct(){
            parent:: __construct();

        }

        function index($limit){
            $offset =$this->uri->segment(3);
            return $this->db->limit($limit, $offset)->get($this->table);
        }
        function count(){
            return $this->db->count_all_results($this->table);
        }

        function insert($param){
            $field = array(
                'u_user'=>$param['user_name'],
                'u_password'=>$param['user_pass'],
                'u_type'=>$param['user_types']
            );
            $this->db->insert($this->table, $field);
        }

        function view($param){
            $query =$this->db->get_where($this->table, $param['condition']);
            return $query->row_array();
        }

        function update($param){
            $fiels = array(
                'u_user'=>$param['user_name'],
                'u_password'=>$param['user_pass'],
                'u_type'=>$param['user_types']
            );
            
            $condition =array('u_id'=> $param['user_id']);

            $query =$this->db->get_where($this->table, $condition);
            $result = $query->result_array();
            if(!empty($result)){
                $this->db->where($condition);
                $this->db->update($this->table, $fiels);
            }
        }

        function delete($param){
            $this->db->delete($this->table, $param['condition']);
        }

        function search($limit, $key){
            $offset =$this->uri->segment(3);
            return $this->db->like('u_user', $key)->limit($limit, $offset)->get($this->table);
          
        }

         function count_search($key){
            return $this->db->like('u_user', $key)->count_all_results($this->table);
        }

        /////log in
    public function validate(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where("u_user", $username);
        $query = $this->db->get($this->table);

        if ($query->num_rows()) 
        {
            // found row by username    
            $row = $query->row_array();
            
            // now check for the password
            if ($row['u_password'] == $password) 
            {
                // we not need password to store in session
                unset($row['password']);
                $this->_data = $row;
                return "ERR_NONE";
            }

            // password not match
            return "ERR_INVALID_PASSWORD";
        }
        else {
            // not found
            return "ERR_INVALID_USERNAME";
        }
    }

    public function get_data(){
        return $this->_data;
    }

    }