<?php
class Cikis extends CI_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model("users_model");
		$this->load->model("event_model");
    }
	public function index()
	{
    $name = "Hesabım";
		$data['popularData'] = $this->event_model->popular();
		$data['randomData'] = $this->event_model->random();
    if($this->session->has_userdata("user_is_login")){
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('user_is_login');
    }
    $data['name'] = $name;
		$this->load->view("welcome_message",$data);
	}
}
?>
