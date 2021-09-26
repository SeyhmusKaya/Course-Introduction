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
      textarea {
      padding-top:10px;
      padding-bottom:25px;
      width:100%;
      display:block;
    }
    .box{
      border: 1px solid #ecf0f1;
      box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.28);
    }
    .box:focus{
      box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.28);
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
    <div class="row justify-content-center mt-3">
          <?php echo form_open_multipart('admin/procces');?>
          <form class="form" action=<?php echo base_url()."admin/procces"?> method="post"  enctype="multipart/form-data">
            <div class="row">
              <div class="col form-group">
              <input type="text" name="head" value="Başlık" class="form-control form-control-lg box text-monospace" style="font-weight:bold;">
              </div>
            </div>
            <div class="row">
              <div class="col form-group">
                <textarea id="txtarea" class="box form-control" name="content" rows="15" cols="100" style="white-space: pre-wrap;" placeholder="Bir şeyler yaz."></textarea>
              </div>
            </div>
            <div class="row form-group">
                <div class="col-10">
                  <input type="button" class="btn btn-primary box" value="Resimleri veya videoları yükle" onclick="document.getElementById('file').click();" enctype="multipart" />
                  <h6 id="fileLabel" style="visibility: hidden;">Resimler seçildi.</h6>
                  <input type="file" id="file" name="files[]"  accept="image/*,video/*" style="display:none;" multiple  >
                </div>
                <div class="col-2">
                  <input type="submit" name="submit" value="Gönder" class="btn btn-primary box" style="padding-right: 20px !important;padding-left:20px;">
                </div>
            </div>
          </form>
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
