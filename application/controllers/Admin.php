<?php

class Admin extends CI_Controller {
	public function __construct(){
    parent::__construct();
    $this->load->helper(array('form'));
		$this->load->model("appeal_model");
		$this->load->model("message_model");
		$this->load->model("event_model");
    }

	public function index()
	{
		if($this->session->has_userdata("isLogged")){
			$data['countMessage'] = $this->message_model->countAllTable();
			$data['countEvent'] = $this->event_model->countAllTable();
			$data['countAppeal'] = $this->appeal_model->countAllTable();
			$data['lastMessage'] = $this->message_model->lastMessage();
			$data['lastEvent'] = $this->event_model->lastEvent();
			$data['lastAppeal'] = $this->appeal_model->lastAppeal();
			$this->load->view("admin_page",$data);
		}else{
			$this->login();
		}
	}
	public function appeal(){
		if($this->session->has_userdata("isLogged")){
			$data = $this->appeal_model->getAll();
			$viewData = array(
				"viewData" => $data,
			);
			$this->load->view("admin_appeal",$viewData);
		}else{
			$this->login();
		}
  }
	public function deleteAppeal($id){
		if($this->session->has_userdata("isLogged")){
			$data = $this->appeal_model->delete($id);
			if($data==1){
				$this->load->view("admin_status");
			}else{
				echo "Bir şeyler ters gitti.";
			}
		}else{
			$this->login();
		}
	}
	public function messages(){
		if($this->session->has_userdata("isLogged")){
			$data = $this->message_model->getAll();
			$viewData = array(
				"viewData" => $data,
			);
			$this->load->view("admin_messages",$viewData);
		}else{
			$this->login();
		}
	}
	public function messagesDelete($id){
		if($this->session->has_userdata("isLogged")){
			$data = $this->message_model->delete($id);
			if($data==1){
				$this->load->view("admin_status");
			}else{
				echo "Bir şeyler ters gitti.";
			}
		}else{
			$this->login();
		}
	}
	public function eventAdd(){
		if($this->session->has_userdata("isLogged")){
			$this->load->view("admin_event_add");
		}else{
			$this->login();
		}
	}
	public function event(){
		if($this->session->has_userdata("isLogged")){
			$data['popularData'] = $this->event_model->popular();
      $data['randomData'] = $this->event_model->random();
			$data['viewData'] = $this->event_model->getAll();
			$this->load->view("admin_event",$data);
		}else{
			$this->login();
		}
	}
	public function eventUpdate($id){
		if($this->session->has_userdata("isLogged")){
			$data["viewData"] = $this->event_model->getTableFromId($id);
			$this->load->view("admin_event_update",$data);
		}else{
			$this->login();
		}
	}
	public function eventUpdateProcces(){
		if($this->session->has_userdata("isLogged")){
			$header = $this->input->post("head");
			$content = $this->input->post("content");
			$id = $this->input->post("id");
			$updateTable = array(
						"header" => $header,
						"content" => $content,
					);
		  $update = $this->event_model->updateTable($updateTable,$id);
			if($update ==1){
				$this->load->view("admin_status");
			}else{
				echo "Bir şeyler ters gitti.";
			}
		}else{
			$this->login();
		}
	}
	public function eventDelete($id){
		if($this->session->has_userdata("isLogged")){
			$getId = $this->event_model->getTableFromIdRow($id)->random_id;
			$url = "assets/events/".$getId."/"; //for delete folder
			$url2 = "assets/events/".$getId."/*"; // for delete all item in folder
			$delete = $this->event_model->delete($id);
			if($delete == 1){
				$files = glob($url2); // get all file names
				foreach($files as $file){ // iterate files
				  if(is_file($file))
				    unlink($file); // delete file
				}
				rmdir($url); //delete folder
				$this->load->view("admin_status");
			}else{
				echo "Bir şeyler ters gitti";
			}
		}else{
			$this->login();
		}
	}
	public function delete($id){
	 if($this->session->has_userdata("isLogged")){
		 $eventId = $this->write_model-
		 $delete = $this->write_model->delete($id);

		 if($delete ==1){
			 $this->load->view("deletePage");
		 }else{
			 echo "Bir hata oluştu.";
		 }
	 }else{
		 $this->index();
	 }
	}
	public function change(){
		if($this->session->has_userdata("isLogged")){
			$rows = $this->admin_model->getAll();
			$viewData = array(
				"rows" => $rows,
			);
			$this->load->view("admin_change",$viewData);
		}else{
				$this->login();
		}
	}
	public function changeProcces(){
		if($this->session->has_userdata("isLogged")){
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$data = array(
				"username" => $username,
				"password" => $password
			);
			$update = $this->admin_model->updateAll($data);
			if($update==1){
			$this->load->view("admin_status");
			}else{
				echo "Bir şeyler ters gitti.";
			}
		}else{
			$this->login();
		}
	}
	public function procces(){
		if($this->session->has_userdata("isLogged")){
			$id = $this->input->post("id");
			$header = $this->input->post("head");
			$content = $this->input->post("content");
			$now = date('d-m-Y');
			$photo_url = "";
			$config['upload_path']          = "./assets/events/";
			$config['allowed_types']        = 'gif|jpg|png|avi|mp4|mkv|flv|jpeg';
			$config['max_size']             = 1024*250;
			$config['max_width']            = 3000;
			$config['max_height']           = 2000;

			$this->load->library('upload', $config);
			$allowTypes = array('jpg','png','jpeg','gif','avi','mp4','mkv','flv');
			$randomId = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
			$targetDir = "assets/events/$randomId/";
			mkdir($targetDir, 0777);

			$statusMsg = $errorMsg = $errorUpload = $errorUploadType = '';
			$fileNames = array_filter($_FILES['files']['name']);
			if(!empty($fileNames)){
							foreach($_FILES['files']['name'] as $key=>$val){
									//path organizing
									$fileName = basename($_FILES['files']['name'][$key]);
									$targetFilePath = $targetDir.$fileName;
									// Check whether file type is valid
									$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
									if(in_array($fileType, $allowTypes)){
											// Upload file to server
											if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){


											}else{
													$errorUpload .= $_FILES['files']['name'][$key].' | ';
											}
									}else{
											$errorUploadType .= $_FILES['files']['name'][$key].' | ';
									}
							}
					}else{
							$statusMsg = 'Please select a file to upload.';
					}
					$popular = 0;
					$dataTable = array(
						"header" => $header,
						"content" => $content,
						"date" => $now,
						"random_id" => $randomId,
						"popular" => $popular
					);
					$insert = $this->event_model->addTable($dataTable);
					if($insert == 1){
						$this->load->view("admin_status");
					}else{
						echo "bir hata oluştu";
					}
		}else{
			$this->login();
		}
	}
	public function login(){
		if($this->session->has_userdata("isLogged")){
			$this->index();
		}else{
		$this->load->view("admin_login");
		}
	}
	public function main(){
		if($this->session->has_userdata("isLogged")){
			$this->index();
		}else{
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$data  = $this->admin_model->getAll();
			foreach ($data as $row) {
				if($username== $row->username && $password == $row->password){
					$sessionData= array(
	           "username"  => $username,
	           "password"  => $password,
	           "isLogged"  => TRUE,
	          );
						$this->session->set_userdata($sessionData);
						$this->index();
				}
				else{
					$this->login();
				}
			}
		}
	}
}
?>
