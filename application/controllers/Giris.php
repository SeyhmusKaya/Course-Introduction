<?php
class Giris extends CI_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model("users_model");
		$this->load->model("event_model");
    }
	public function index()
	{
    $name = "Hesabım";
    if($this->session->has_userdata("user_is_login")){
      $id=$this->session->userdata('id');
      $name = $this->users_model->getWithId($id);
			$data['name'] = $name;
			$data['popularData'] = $this->event_model->popular();
			$data['randomData'] = $this->event_model->random();
			$this->load->view("welcome_message",$data);
    }else{
			$data['name'] = $name;
			$this->load->view("login",$data);
		}
	}
	public function sonucu(){
		$name = "Hesabım";
		if($this->session->has_userdata("user_is_login")){
			$id=$this->session->userdata('id');
			$name = $this->users_model->getWithId($id);
			$data['name'] = $name;
			$data['popularData'] = $this->event_model->popular();
			$data['randomData'] = $this->event_model->random();
			$this->load->view("welcome_message",$data);
		}else{
			$data['name'] = $name;
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$result = $this->users_model->login($email,$password);
			if($result == 1){
				$id = $this->users_model->getWithEmailForId($email);
				$sessionArray = array(
					"user_is_login" => "true",
					"id" => $id,
				);
				$this->session->set_userdata($sessionArray);
				$this->index();
			}elseif($result == 2){
				$data['error'] = "Şifreniz uyuşmuyor.";
				$this->load->view("login",$data);
			}elseif($result== 3){
				$data['error'] = "E mail bulunamadı.";
				$this->load->view("login",$data);

			}else{
				$data['error'] = "Bilinmeyen bir hata oluştu.";
				$this->load->view("login",$data);

			}
		}
	}
}
?>
