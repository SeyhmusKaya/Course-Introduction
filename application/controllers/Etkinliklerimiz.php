<?php
class Etkinliklerimiz extends CI_Controller {
	public function __construct(){
    parent::__construct();
		$this->load->model("users_model");
		$this->load->model("event_model");
    }
	public function index()
	{
		$data['popularData'] = $this->event_model->popular();
		$data['randomData'] = $this->event_model->random();
    $name = "Hesabım";
    if($this->session->has_userdata("user_is_login")){
      $id=$this->session->userdata('id');
      $name = $this->users_model->getWithId($id);
    }
		$this->load->library("pagination");  // Sayfalama kütüphanesini sayfaya yükle
		$config['base_url'] = base_url("etkinliklerimiz/index"); // Sayfalamanın yapılacağı url
		$config['uri_segment'] = 3;
		$config['per_page'] = 3;   // Her sayfada kaç tane gözükecek
		$config['use_page_numbers'] = TRUE;  // Sayfa numaralarını kullan
		$config['total_rows'] =$this->event_model->countAllTable();  // Toplam kaç tane kayıt var
		$this->pagination->initialize($config);  // Ayarları kaydet
		$data["links"] = $this->pagination->create_links();  // Html çıktsını değişkene depola
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;  // Sayfa numarası url de 3.kısımda yazacağı için üçüncü kısmı alıyoruz eğer boşsa 0 olarak belirliyoruz
		if($page > 0)  // Eğer sayfa 0 dan büyükse
		{
			$offset = ($page*$config['per_page']) - $config['per_page'];  // Offset değerimizi bu işlemler ile buluyoruz
		}else
		{
			$offset = $page; // Eğer Sayfa 0 dan küçükse veya eşitse direk sayfa değişkeninin değerini al
		}
		$data["viewData"] = $this->event_model->lists($config['per_page'], $offset);  // Modelimiz içerisinde oluşturduğumuz listele metoduna kaç tane veri gösterileceğini ve kaçıncı veriden başlıyacağını yazıyoruz.
    $data['name'] = $name;
		$data['popularData'] = $this->event_model->popular();
		$data['randomData'] = $this->event_model->random();
		$this->load->view("event",$data);
	}
	public function Bak($id){
		$name = "Hesabım";
		$data['popularData'] = $this->event_model->popular();
		$data['randomData'] = $this->event_model->random();

		if($this->session->has_userdata("user_is_login")){
			$ids=$this->session->userdata('id');
			$name = $this->users_model->getWithId($ids);
		}
		$data['name'] = $name;
		if(is_numeric($id)){
			$data['popularData'] = $this->event_model->popular();
			$data['randomData'] = $this->event_model->random();
			$data["viewData"] = $this->event_model->getTableFromId($id);

			$get = $this->event_model->getTableFromIdRow($id);
			$getPopular = $get->popular;
			$updateArray = array(
				"popular" => $getPopular + 1,
			);
			$update = $this->event_model->updateTable($updateArray,$id);
			$this->load->view("show_event",$data);
		}else{
			$this->load->view("welcome_message",$data);
		}
	}
}
?>
