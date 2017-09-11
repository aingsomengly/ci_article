<?php

    class Category_model extends CI_Model{
        private $table="tbl_category";

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
                'cat_name'=>$param['category_name']
            );
            //process insert
            $this->db->insert($this->table, $field);
        }

        function view($param){
            $query =$this->db->get_where($this->table, $param['condition']);
            return $query->row_array();
        }

        function update($param){
            $fiels = array(
               'cat_name'=>$param['category_name']
            );

            $condition =array('cat_id'=> $param['category_id']);

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

        function listAll(){
            return $this->db->get($this->table);
        }

         function search($limit, $key){
            $offset =$this->uri->segment(3);
            return $this->db->like('cat_name', $key)->limit($limit, $offset)->get($this->table);
          
        }

         function count_search($key){
            return $this->db->like('cat_name', $key)->count_all_results($this->table);
        }

    }