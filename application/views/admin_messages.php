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
      th{
        font-size:17px;
      }
      td{
        font-size: 16px;
      }
      .thov:hover{
        cursor:pointer;
      }
    </style>
    <title>Gelen Mesajlar</title>
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
    <div class="row">
      <div class="col-12">
        <h4 class="d-flex w-100 border mt-2 p-3 text-dark justify-content-center text-monospace"  style="box-shadow:0px 0px 8px;">Gelen Mesajlar</h4>
      </div>

      <div class="row w-100 ml-1 mt-2">
        <div class="col mx-auto text-center">
          <table class="table table-hover" cellpadding="5" style="box-shadow:0px 0px 8px;">
            <thead style="background-color: #dfe6e9;">
              <th scope="col-1"></th>
              <th scope="col-7" style="text-align:left !important;">Konu</th>
              <th scope="col-3">Gönderen</th>
              <th scope="col-2"  style="text-align:right !important; ">İşlem &nbsp</th>
            </thead>
            <tbody>
            <?php foreach ($viewData as $view) { ?>
              <tr class="carousel thov " data-toggle="collapse" data-target="<?php echo "#demo$view->id";?>">
                <td style="padding:0px;" class="pt-2">
                  <svg class="bi bi-chevron-double-down" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </td>
                <td style="text-align:left !important;"><?php echo $view->header;?></td>
                <td><?php echo $view->email;?></td>
                <td class="dropdown text-right">
                 <span class="badge badge-primary p-2" style="font-size:14px;"><?php echo $view->date;?></span>
                  <a  class="dropdown-toggle" data-toggle = "dropdown"href="#">
                    <svg class="bi bi-gear-fill" width="25px" height="25px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                    </svg>
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                    <li><a  class="dropdown-item" href=<?php echo base_url()."admin/messagesDelete/$view->id"?>>Sil</a></li>
                  </ul>
                </td>
              </tr>
            </tbody>
            <tr>

              <td class="" colspan="4" style="padding:0px;">
                <div id="<?php echo "demo$view->id";?>" class="collapse mx-5 mt-3">
                  <p style="text-align:left; font-size:16px;">
                    <?php echo $view->content;?>
                  </p>
                </div>
              </td>
            </tr>

            <?php } ?>
          </table>
        </div>
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
