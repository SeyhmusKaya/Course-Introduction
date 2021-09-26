<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
    parent::__construct();
    $this->load->helper(array('form'));
		$this->load->model("users_model");
		$this->load->model("event_model");
    }

	public function index()
	{
		$name = "Hesabım";
		if($this->session->has_userdata("user_is_login")){
			$id=$this->session->userdata('id');
			$name = $this->users_model->getWithId($id);

		}
		$data['name'] = $name;
		$data['popularData'] = $this->event_model->popular();
		$data['randomData'] = $this->event_model->random();
		$this->load->view('welcome_message',$data);
	}
}
