<?php
class test_model   extends CI_Model {
 public function show(){
    $query = $this->db->get('test'); 
    return $query->result();
 }
}
?>