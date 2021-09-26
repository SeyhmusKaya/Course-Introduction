<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style media="screen">
    html, body{
      margin:0px;
      padding: 0px;
    }
    .nav-item{
      padding-right: 30px;
    }
    .nav-link{
      font-family: Cambria !important;
      font-size: 21px !important;
      margin:0px !important;
    }
    .nav-link:hover{
      color: #cc6600 !important;
    }
    .img{
      height: 23px;
      width: 23px;
      padding-right: 8px;
    }
    .txt{
      font-size: 17px;
    }
    .box{
      border: 1px solid #ecf0f1;
      box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.28);
    }
    .box:focus{
      box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.28);
    }
    .bg{
      background-color: #dfe6e9 !important;
    }
    </style>
    <title>Admin Anasayfa</title>
  </head>
  <body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
    			<nav class="navbar navbar-expand-lg navbar-light w-100" >
    				<!-- Brand -->
    				<a class="navbar-brand" href=<?php echo base_url();?>><div class="col"><img style ="height:70px; width:300px;"src=<?php echo base_url("assets/logo.png")?>></div></a>
    				<!-- Toggler/collapsibe Button -->
    				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    					<span class="navbar-toggler-icon"></span>
    				</button>

    				<!-- Navbar links -->
    				<div class="collapse navbar-collapse mt-3" id="collapsibleNavbar">
    					<ul class="navbar-nav" >
    						<li class="nav-item">
    							<a class="nav-link" style = "color:#2d3436;" href=<?php echo base_url()."admin"?>>
                    <div class="row">
                      <img class="img"src=<?php echo base_url()."assets/home.png"?>>
                      <div class="txt">Anasayfa</div>
                    </div>
                  </a>
    						</li>
    						<li class="nav-item">
    							<a class="nav-link" style = "color:#2d3436;" href=<?php echo base_url()."admin/change"?>>
                    <div class="row">
                      <img class="img"src=<?php echo base_url()."assets/admin.png"?>>
                      <div class="txt">Admin Bilgileri</div>
                    </div>
                  </a>
    						</li>
    						<li class="nav-item">
    							<a class="nav-link" style = "color:#2d3436;" href=<?php echo base_url()."admin/event"?>>
                    <div class="row">
                      <img class="img"src=<?php echo base_url()."assets/event.png"?>>
                      <div class="txt">Etkinlikleri Görüntüle</div>
                    </div>
                  </a>
    						</li>
                <li class="nav-item">
    							<a class="nav-link" style = "color:#2d3436;" href=<?php echo base_url()."admin/eventAdd"?>>
                    <div class="row">
                      <img class="img"src=<?php echo base_url()."assets/add.png"?>>
                      <div class="txt">Etkinlik Ekle</div>
                    </div>
                  </a>
    						</li>
                <li class="nav-item">
      							<a class="nav-link" style = "color:#2d3436;" href=<?php echo base_url()."admin/appeal"?>>
                      <div class="row">
                        <img class="img"src=<?php echo base_url()."assets/list.png"?>>
                        <div class="txt">Kullanıcılar</div>
                      </div>
                    </a>
    						</li>
                <li class="nav-item">
    							<a class="nav-link" style = "color:#2d3436;" href=<?php echo base_url()."admin/messages"?>>
                    <div class="row">
                      <img class="img"src=<?php echo base_url()."assets/message.png"?>>
                      <div class="txt">Gelen Mesajlar</div>
                    </div>
                  </a>
    						</li>
    					</ul>
    				</div>
    			</nav>
    		</div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-12 col-md-12 col-lg-6 ">
        <ul class="list-group box">
          <li class="list-group-item mb-1 text-monospace bg" style="font-weight:bold; font-size:17px;">
            Son Mesajlar
            <span class="badge badge-primary float-right " style="font-size:16px;" >
              <?php echo $countMessage;?>
            </span>
          </li>
          <?php
          if($countMessage == 0){
            echo '<li class="list-group-item">Hiç mesaj yok.</li>';
          }
          ?>
          <?php foreach ($lastMessage as $message) {?>
           <a href=<?php echo base_url()."admin/messages"?> class="list-group-item list-group-item-action">
             <?php echo $message->header; ?>
             <svg class="bi bi-eye-fill float-right ico" width="23px" height="23px" viewBox="0 0 16 16" fill="orange" xmlns="http://www.w3.org/2000/svg">
               <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
               <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
             </svg>
           </a>
          <?php } ?>
        </ul>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6">
        <ul class="list-group box">
          <li class="list-group-item mb-1 text-monospace bg" style="font-weight:bold; font-size:17px;">
            Son Kullanıcılar
            <span class="badge badge-primary float-right " style="font-size:16px;" >
              <?php echo $countAppeal;?>
            </span>
          </li>
          <?php
          if($countAppeal == 0){
            echo '<li class="list-group-item">Hiç başvuru yok.</li>';
          }
          ?>

          <?php foreach ($lastAppeal as $appeal) {?>
           <a href=<?php echo base_url()."admin/appeal"?> class="list-group-item list-group-item-action">

             <?php echo $appeal->name; ?>
             <svg class="bi bi-eye-fill float-right ico" width="23px" height="23px" viewBox="0 0 16 16" fill="orange" xmlns="http://www.w3.org/2000/svg">
               <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
               <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
             </svg>
           </a>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-none col-md-none col-lg-3">

      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 justify-content-center">
        <ul class="list-group box">
          <li class="list-group-item mb-1 text-monospace bg" style="font-weight:bold; font-size:17px;">
            Son Etkinlikler
            <span class="badge badge-primary float-right " style="font-size:16px;" >
              <?php echo $countEvent;?>
            </span>
          </li>
          <?php
          if($countEvent == 0){
            echo '<li class="list-group-item">Hiç etkinlik yok.</li>';
          }
          ?>
          <?php foreach ($lastEvent as $event) {?>
           <a href=<?php echo base_url()."admin/event"?> class="list-group-item list-group-item-action">
             <?php echo $event->header; ?>
             <svg class="bi bi-eye-fill float-right ico" width="23px" height="23px" viewBox="0 0 16 16" fill="orange" xmlns="http://www.w3.org/2000/svg">
               <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
               <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
             </svg>
           </a>
          <?php } ?>
        </ul>
      </div>
      <div class="col-sm-none col-md-none col-lg-3">

      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
