<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appeal_model extends CI_Model{
  public function getAll(){
    return $this->db->get("users")->result();
  }
  public function delete($id){
    $delete = $this->db->from("users")->where("id=",$id)->delete();
    return $delete;
  }
  public function countAllTable(){
  $count = $this->db->count_all_results("users");
  return $count;
  }
  public function lastAppeal(){
    $rows= $this->db->limit(5)->order_by("id","DESC")->get("users")->result();
    return $rows;
  }
}
