<?php
class Ogrenci_koclugu_programi extends CI_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model("users_model");

  }
  public function index()
	{
		$name = "Hesabım";
    if($this->session->has_userdata("user_is_login")){
			$id=$this->session->userdata('id');
			$name = $this->users_model->getWithId($id);
    }
    $data['name'] = $name;
		$this->load->view("program/ogrenci_koclugu_programi",$data);
  }
}
?>
