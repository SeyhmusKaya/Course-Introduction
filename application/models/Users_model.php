<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model{
  public function getAll(){
    return $this->db->get("users")->result();
  }
  public function addTable($data = array()){
    $add = $this->db->insert("users",$data);
    return $add;
  }
  public function checkEmail($data){
     $this->db->where('email=',$data);
     $search = $this->db->get('users')->result();
     foreach ($search as $key) {
       return $key->email;
     }
  }
  public function getWithEmailForId($email){
     $this->db->where('email=',$email);
     $search = $this->db->get('users')->result();
     foreach ($search as $key ) {
        return $key->id;
     }
  }
  public function getWithId($id){
    //for name dont delete this
    $this->db->where("id=",$id);
    $insert = $this->db->get("users")->result();
    foreach ($insert as $key) {
      return $key->name;
    }

  }
  public function login($email,$password){
    $this->db->where('email', $email);
    $query = $this->db->get('users');
    if($query->num_rows() > 0 ){
      foreach ($query->result() as $row) {
        $storedPassword = $row->password;
        if($storedPassword == $password){
          return 1;
        }else{
          return 2;
        }
      }
    }else{
      return 3;
    }
  }
}
