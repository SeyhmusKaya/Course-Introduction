<?php
class Bize_ulasin extends CI_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model("message_model");
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
		$this->load->view("contact_us",$data);
	}
		public function sonucu(){
			$name = "Hesabım";

			if($this->session->has_userdata("user_is_login")){
				$id=$this->session->userdata('id');
				$name = $this->users_model->getWithId($id);
			}
			$data['name'] = $name;
			$data['message'] ="";
			$data['error'] ="";

			$name = $this->input->post("name");
			$header = $this->input->post("header");
			$email = $this->input->post("email");
			$content = $this->input->post("content");
			$date = date('d/m/Y');
			$array = array(
				"name" => $name,
				"header" => $header,
				"email" => $email,
				"content" => $content,
				"date" => $date,
			);
			$add = $this->message_model->addTable($array);
			if($add == 1){
				$data['message'] = "Mesajınız başarıyla gönderildi.";
			}else{
				$data['error'] = "Bilinmeyen bir hata oluştu lütfen tekrar deneyin";
			}
			$this->load->view("contact_us",$data);
		}
}
?>
