<?php
class Kayit extends CI_Controller {
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
		if($this->session->has_userdata("user_is_login")){
			$data['popularData'] = $this->event_model->popular();
			$data['randomData'] = $this->event_model->random();
			$this->load->view("welcome_message",$data);
		}else{
      $this->load->view("register",$data);
		}
	}
  public function sonucu(){
		$name = "Hesabım";
		$data['name'] = $name;
		$data['error'] = "";
		$data['popularData'] = $this->event_model->popular();
		$data['randomData'] = $this->event_model->random();
    if($this->session->has_userdata("user_is_login")){
      $id=$this->session->userdata('id');
      $data['name'] = $this->users_model->getWithId($id);

			$this->load->view("welcome_message",$data);
    }else{
			$nameUser = $this->input->post("name");
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$confirm_password = $this->input->post("confirm_password");
			$phone = $this->input->post("phone");
			$date = $this->input->post("date");
			$registerDate = date('d/m/Y');
			$checkEmail = $this->users_model->checkEmail($email);

			if($password != $confirm_password){
				$data['error'] = "Şifreniz uyuşmuyor.";
				$this->load->view("register",$data);
			}elseif($checkEmail == $email){
				$data['error'] = "Email daha önceden kayıtlı.";
				$this->load->view("register",$data);
			}elseif(strlen($password) < 6){
				$data['error'] = "Şifre 6 karakterden küçük olamaz.";
				$this->load->view("register",$data);
			}else{
				$addTable = array(
					"name" => $nameUser,
					"email" => $email,
					"password" => $password,
					"phone" => $phone,
					"date" => $date,
					"registerDate" => $registerDate,
				);
				$add = $this->users_model->addTable($addTable);
				$id = $this->users_model->getWithEmailForId($email);
				if($add == 1){
					$data['name'] = $nameUser;
					$sessionArray = array(
						"user_is_login" => "true",
						"id" => $id,
					);
					$this->session->set_userdata($sessionArray);
					$this->load->view("welcome_message",$data);
				}else{
					$data['error'] = "Bilinmeyen bir hata oluştu.";
					$this->load->view("register",$data);
				}
			}

		}
  }
}
?>
