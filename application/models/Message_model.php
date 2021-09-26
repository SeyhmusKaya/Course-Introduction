<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model{
  public function getAll(){
    return $this->db->get("message")->result();
  }
  public function addTable($data = array()){
    $add = $this->db->insert("message",$data);
    return $add;
  }
  public function delete($id){
    $delete = $this->db->from("message")->where("id=",$id)->delete();
    return $delete;
  }
  public function countAllTable(){
    $count = $this->db->count_all_results("message");
    return $count;
  }

  public function lastMessage(){
    $rows= $this->db->limit(5)->order_by("id","DESC")->get("message")->result();
    return $rows;
  }
}
