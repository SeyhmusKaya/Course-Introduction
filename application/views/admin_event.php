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
      .aaz:hover{
        background-color: #dfe6e9;
      }
      .box{
        border: 1px solid #ecf0f1;
        box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.28);
      }
      .box:focus{
        box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.28);
      }
      .pop{
        font-size:14px;
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
    <div class="row mt-4">
      <div class="col-sm-12 col-md-12 col-lg-9" >
        <ul class="list-group box">
          <li class="list-group-item list-group-item-primary text-monospace " style="font-weight:bold; font-size:17px;">
            Tüm Etkinlikler
          </li>
          <?php foreach ($viewData as $view) {?>
            <li class="list-group-item aaz">
                <?php echo $view->header;?>
                <div class="pull-right action-buttons float-right">
                  <a href="<?php echo base_url()."admin/eventDelete/$view->id"?>">
                    <span class="badge badge-light badge-pill box text-center">
                      Sil &nbsp
                        <svg class="bi bi-trash-fill" width="23px" height="23px" viewBox="0 0 16 16" fill="red" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg>
                    </span>
                  </a>
                  <a href="<?php echo base_url()."admin/eventUpdate/$view->id"?>">
                     <span class="badge badge-light badge-pill box text-center">
                       Düzenle &nbsp
                       <svg class="bi bi-pencil" width="23px" height="23px" viewBox="0 0 16 16" fill="blue" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                         <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                       </svg>
                     </span>
                  </a>
                </div>
            </li>
          <?php }?>
        </ul>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="list-group populer-list shadow">
        			  <a href="#" class="list-group-item list-group-item-action active">
        			   	<h6>Popüler Etkinlikler</h6>
        			  </a>
        				<?php
        				foreach($popularData as $popular){
        					$popularUrl = base_url()."main/read/".$popular->id;
        					echo "<a href='#' class='list-group-item list-group-item-action pop'> $popular->header </a>";
        				}
        				?>
        			</div>

        			<div class="list-group random-list mt-4 shadow">
        				<a href="#" class="list-group-item list-group-item-action active">
        					<h6>Rastgele Etkinlikler</h6>
        				</a>
        				<?php
        				foreach($randomData as $random){
        					echo "<a href='#' class='list-group-item list-group-item-action pop'> $random->header </a>";
        				}
        				?>
        			</div>
        		</div>
      </div>
    </div>
    <div class="row">

    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
