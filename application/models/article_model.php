<?php

    class Article_model extends CI_Model{
        private $tbl_article="tbl_article";
        private $tbl_category="tbl_category";
        private $tbl_user="tbl_user";

        public function __construct(){
            parent:: __construct();

        }

        function index($limit){
            $offset =$this->uri->segment(3);
            $this->db->select(array('art_id','title','description','public_date','image','cat_name','u_type'));
            $this->db->from($this->tbl_article);
            $this->db->join($this->tbl_category, 'tbl_category.cat_id = tbl_article.cat_id');
            $this->db->join($this->tbl_user, 'tbl_user.u_id = tbl_article.u_id');
            return $this->db->limit($limit, $offset)->get();
            
        }
        function count(){
            return $this->db->count_all_results($this->tbl_article);
        }

        function insert($param){
            date_default_timezone_set('Asia/Phnom_Penh'); 
             $create_date = date("Y-m-d H:i:s");

            $field = array(
                'title'=>$param['article_title'],
                'description'=>$param['article_description'],
                'public_date'=>$create_date,
                'image'=>$param['article_image'],
                'u_id'=>$param['article_user'],
                'cat_id'=>$param['article_category']
            );

            //process insert
            $this->db->insert($this->tbl_article, $field);
        }

        function view($param){
            $query =$this->db->get_where($this->tbl_article, $param['condition']);
            return $query->row_array();
        }

        function update($param){
            $fiels = array(
                'title'=>$param['article_title'],
                'description'=>$param['article_description'],
                'image'=>$param['article_image'],
                'u_id'=>$param['article_user'],
                'cat_id'=>$param['article_category']
            );

            $condition =array('art_id'=> $param['article_id']);

            $query =$this->db->get_where($this->tbl_article, $condition);
            $result = $query->result_array();
            if(!empty($result)){
                $this->db->where($condition);
                $this->db->update($this->tbl_article, $fiels);
            }
        }

        function delete($param){
            $this->db->delete($this->tbl_article, $param['condition']);
        }

         function search($limit, $key){
            
            $offset =$this->uri->segment(3);
            $this->db->select(array('art_id','title','description','public_date','image','cat_name','u_type'));
            $this->db->from($this->tbl_article);
            $this->db->join($this->tbl_category, 'tbl_category.cat_id = tbl_article.cat_id');
            $this->db->join($this->tbl_user, 'tbl_user.u_id = tbl_article.u_id');
            return $this->db->like('title', $key)->limit($limit, $offset)->get();
          
        }

         function count_search($key){
            return $this->db->like('title', $key)->count_all_results($this->tbl_article);
        }

    }