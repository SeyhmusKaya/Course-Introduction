<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
  public function getAll(){
    return $this->db->get("admin")->result();
  }
  public function updateAll($data = array()){
    $update = $this->db->where("id=",1)->update("admin",$data);
    return $update;
  }
}
