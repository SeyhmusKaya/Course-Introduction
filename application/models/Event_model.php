<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model{
  public function getAll(){
    return $this->db->get("event")->result();
  }
  public function lists($limit, $start){
  $this->db->limit($limit,$start);
  $this->db->order_by('id', 'DESC');
  $data = $this->db->get("event");
  return $data->result();
  }
  public function getTableFromIdRow($id){
    $query = $this->db->where("id=",$id)->get("event")->row();
    return $query;
  }
  public function getLastData(){
    $last = $this->db->order_by('id',"desc")
		->limit(1)
		->get('event')
		->row();
    return $last;
  }
  public function addTable($data = array()){
    $add = $this->db->insert('event',$data);
    return $add;
  }
  public function delete($id){
    $delete = $this->db->from("event")->where("id=",$id)->delete();
    return $delete;
  }
  public function updateTable($data = array(),$id){
    $update = $this->db->where("id=",$id)->update("event",$data);
    return $update;
  }
  public function getTableFromId($id){
    $query = $this->db->where("id=",$id)->get("event")->result();
    return $query;
  }
  public function popular(){
    $rows= $this->db->limit(5)->order_by("popular","DESC")->get("event")->result();
    return $rows;
  }
  public function random(){
    $rows= $this->db->limit(5)->order_by("id","random")->get("event")->result();
    return $rows;
  }
  public function countAllTable(){
  $count = $this->db->count_all_results("event");
  return $count;
  }
  public function lastEvent(){
    $rows= $this->db->limit(5)->order_by("id","DESC")->get("event")->result();
    return $rows;
  }
}
