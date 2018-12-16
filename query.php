<?php
 class query extends CI_Model{
     public function getpost(){
         $queries=$this->db->get('tbl_post');
         if($queries->num_rows()> 0){
             return $queries->result();
         }
     }
     public function addpost($data){
         return $this->db->insert('tbl_post',$data);
     }
 }

?>