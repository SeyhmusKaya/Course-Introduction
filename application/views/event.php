<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>Etkinlikerimiz</title>
	<meta name = "description" 
	content = "Dem Eğitim Kurumlarının son dönemlerdeki etkinlikleri">


	<style type="text/css">
	::selection { background-color: #e67e22; color: white; }
	::-moz-selection { background-color: #e67e22; color: white; }
	body {
		background-color: #d9d9d9;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #f07e01;
	}
	#header{
		border-bottom: 1px solid orange;
		background-color: #1c1c1c;
	}
	.nav-item{
		border: 1px solid  #1c1c1c;
		border-radius: 30px;
		padding: 15px;
		margin-right:10px;
	}
	.nav-item:hover{
		color:#cd950c;
	}
	.nav-link{
		font-size:17px;
		color: #f07e01;
		font-weight: bold;
	}
	.nav-link:hover{
		color:#cd950c;
	}
	.dropdown-menu{
		background-color:#1c1c1c;
		padding: 0px;
	}
	.dropdown-item{
		font-size:16px;
		color: #f07e01;
		border-bottom: 1px solid;
		padding:10px;
		border-bottom-color:orange;
	}
	.dropdown-item:hover{
		background-color:#1c1c1c;
		color:#cd950c;
	}

	.user-item{
		border-bottom:none !important;
	}

	#logoImage{
		height: 50px;
		width: 250px;
	}
	.ico{
		margin-top: 5px;
		margin-left: 5px;
		margin-right:5px;
		height: 25px;
		width: 25px;
	}
	.drop-ico{
		height: 25px;
		width: 25px;
	}
 	.carousel{
		border-radius:1em !important;
	}
	.car-img, video{
		height: 450px;
		border-radius:1em !important;
		object-fit: cover;
		overflow: hidden;

	}
	.head-and-content{
		border-radius:1em !important;
	}
	.header-text-a{
		text-decoration: none;
		color:black;
	}
	.header-text-a:hover{
		text-decoration: none;

	}
	p strong{
		padding: 8px 30px;
		text-decoration: none;
		color:white;
		border: 1px solid black;
		background-color: #2d3436;
		font-size: 18px;
	}
	p a{
		padding: 8px 20px;
		text-decoration: none;
		color:black;
		border: 1px solid #2d3436;
		font-size: 18px;

	}
	p a:hover{
		color:white;
		background-color: black;
	}

	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12" id="header">
				    <nav class="navbar navbar-expand-xl text-monospace">
				        <a href=<?php echo base_url(); ?> class="navbar-brand">
									<img src=<?php echo base_url()."assets/logo.png"?> alt="DEM Eğitim Kurumları" id = "logoImage">
								</a>
				        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarCollapse">
									<img src=<?php echo base_url()."assets/menu.png"?> alt="menu" style="height:40px; width:40px;">
				        </button>
				        <div id="navbarCollapse" class="collapse navbar-collapse">
				            <ul class="nav navbar-nav m-auto">
				                <li class="nav-item">
												<div class="row">
													<svg class="bi bi-house-door-fill ico" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
														<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
													</svg>
														<a href=<?php echo base_url();?> class="nav-link">Anasayfa</a>
												</div>
				                </li>

				                <li class="nav-item dropdown">
													<div class="row">
														<svg class="bi bi-collection-fill ico" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
															<rect width="16" height="10" rx="1.5" transform="matrix(1 0 0 -1 0 14.5)"/>
															<path fill-rule="evenodd" d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
														</svg>
														 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Programlarımız</a>
														 <div class="dropdown-menu ">
															 <a href=<?php echo base_url("programlar/Sinava_hazirlik_programi"); ?> class="dropdown-item">
																 <svg class="bi bi-arrow-right-circle-fill"color = "orange" width="20px" height="20px"viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	 <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																 </svg>
																 Sınava Hazırlık Programı</a>
															  <a href=<?php echo base_url("programlar/Oyun_tabanli_ogrenme_programi"); ?> class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" color = "orange" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Oyun Tabanlı Öğrenme Programı
																</a>
														  	<a href=<?php echo base_url("programlar/Ogrenci_koclugu_programi"); ?> class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" color = "orange" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Öğrenci Koçluğu Programı
																</a>
																<a href=<?php echo base_url("programlar/Psikolojik_danismanlik_programi"); ?> class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" color = "orange" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Psikolojik Danışmanlık Programı</a>
																<a href=<?php echo base_url("programlar/Gelecegin_liderleri_programi"); ?> class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" color = "orange" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Geleceğin Liderleri Programı</a>

														  	<a href=<?php echo base_url("programlar/Seminerlerimiz"); ?> class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Seminerlerimiz
																</a>
														  	<a href=<?php echo base_url("programlar/Atolyelerimiz"); ?> class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Atölyelirimiz</a>
																<a href=<?php echo base_url("egitimlerimiz/Egitici"); ?> class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Eğitici Eğitimlerimiz</a>
														  	<a href=<?php echo base_url("egitimlerimiz/Veli"); ?> class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Veli Eğitimlerimiz</a>
														  	<a href=<?php echo base_url("egitimlerimiz/Okul"); ?>  class="dropdown-item">
																	<svg class="bi bi-arrow-right-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	Okul Eğitimlerimiz</a>
																	<a href=<?php echo base_url("egitimlerimiz/Ogretmen"); ?>  class="dropdown-item">
																		<svg class="bi bi-arrow-right-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																			<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																		</svg>
																	Öğretmen Eğitimlerimiz</a>
														 </div>
													</div>
				                </li>
												<li class="nav-item">
													<div class="row">
														<svg class="bi bi-collection-play-fill ico"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														  <path fill-rule="evenodd" d="M1.5 14.5A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zm5.265-7.924A.5.5 0 0 0 6 7v5a.5.5 0 0 0 .765.424l4-2.5a.5.5 0 0 0 0-.848l-4-2.5zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
														</svg>
					                  <a href=<?php echo base_url("Etkinliklerimiz");?> class="nav-link">Etkinliklerimiz</a>
													</div>
				                </li>
												<li class="nav-item">
													<div class="row">
														<svg class="bi bi-envelope-fill ico" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														  <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
														</svg>
					                   <a href=<?php echo base_url("Bize_ulasin");?> class="nav-link">Bize Ulaşın</a>
													</div>
				                </li>
				            </ul>
				            <ul class="nav navbar-nav ml-auto">
				              <li class="nav-item dropdown">
												<div class="row">
													<svg class="bi bi-person-circle ico" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
														<path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
														<path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
														<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
													</svg>
													<?php
													echo "<a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' id='user'>$name</a>";
													?>

 				                 	<div class="dropdown-menu dropdown-menu-right">

															<?php
																if($this->session->has_userdata("user_is_login")){

																	echo '<a href="'.base_url("Cikis").'"class="dropdown-item user-item" >';
																	echo '<svg class="bi bi-box-arrow-in-right" width="20px" height="20px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																	  <path fill-rule="evenodd" d="M8.146 11.354a.5.5 0 0 1 0-.708L10.793 8 8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
																	  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 1 8z"/>
																	  <path fill-rule="evenodd" d="M13.5 14.5A1.5 1.5 0 0 0 15 13V3a1.5 1.5 0 0 0-1.5-1.5h-8A1.5 1.5 0 0 0 4 3v1.5a.5.5 0 0 0 1 0V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v10a.5.5 0 0 1-.5.5h-8A.5.5 0 0 1 5 13v-1.5a.5.5 0 0 0-1 0V13a1.5 1.5 0 0 0 1.5 1.5h8z"/>
																	</svg>
																	Çıkış
																	';
																	echo '</a>';
																}else{
																	echo '<a href="'.base_url("giris").'"class="dropdown-item user-item" >';
																	echo '
																	<svg class="bi bi-arrow-right-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	';
																	echo 'Giriş Yap</a>';

																	echo '<a href="'.base_url("kayit").'"class="dropdown-item user-item" >';
																	echo '
																	<svg class="bi bi-arrow-right-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-8.354 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L9.793 7.5H5a.5.5 0 0 0 0 1h4.793l-2.147 2.146z"/>
																	</svg>
																	';
																	echo 'Kayıt Ol</a>';
																}
															?>
 				                 	</div>
												</div>
				              </li>
				            </ul>
				        </div>
				    </nav>
				</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-9">
				<?php foreach ($viewData as $view ) {?>
					<?php
					$dirPath = "assets/events/$view->random_id";
					$destdir = $dirPath;

					$useId = "#$view->random_id";
					$handle = opendir($destdir);
					$c = 0;
					while ($file = readdir($handle)&& $c<3) {
					    $c++;
					}
					if ($c>2) { ?>
						<?php
						$images = scandir($dirPath, 1);
						$firstSlide =  $dirPath."/".$images[0];
						 ?>
						<div id="<?php echo $view->random_id;?>" class="carousel slide shadow my-2" data-ride="carousel">

							<ol class="carousel-indicators">
							<?php
							for ($i=0; $i < count($images)-2; $i++) { ?>
								<li data-target="<?php echo $useId;?>" data-slide-to="<?php echo $i; ?>"></li>
							<?php } ?>
							</ol>

						  <div class="carousel-inner">
								<div class="carousel-item active text-center">
									<?php
									$firstVideo = substr($firstSlide,-3);
									if ($firstVideo =="mp4" || $firstVideo =="avi"){?>
										<video class="video-fluid"  controls style="width:90%;">
											<source src="<?php echo base_url($firstSlide);?>" type="<?php echo "video/".$firstVideo;?>">
										</video>
									<?php }else{ ?>
										<img class='d-block w-100 car-img' src=<?php echo base_url($firstSlide);?>>
									<?php } ?>
								</div>
								<?php
								for($i = 1; $i <  count($images) -2 ; $i++){ ?>

									<?php
									 $nowSlide = $dirPath."/".$images[$i];
									  ?>
									<div class="carousel-item text-center">
										<?php
										$isVideo = substr($nowSlide,-3);
										if ($isVideo =="mp4" || $isVideo =="avi"){?>
											<video class="video-fluid" controls style="width:90%;">
											  <source src="<?php echo base_url($nowSlide);?>" type="<?php echo "video/".$isVideo;?>">
											</video>
										<?php }else{ ?>
											<img class='d-block w-100 car-img' src=<?php echo base_url($nowSlide);?>>
										<?php } ?>
								 	</div>

								 <?php } ?>

						  </div>

						  <a class="carousel-control-prev" href="<?php echo $useId;?>" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="<?php echo $useId;?>" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					<?php } ?>

				<div class="shadow head-and-content mb-4 ">
					<div class="col-12 text-center header-text pt-3">
						<a class="header-text-a" href="<?php echo base_url("etkinliklerimiz/bak/$view->id");?>"><h2><?php echo $view->header;?> </h2></a>
					</div>
					<div class="text-primary text-right mr-3">
						<span class="badge badge-primary p-2" style="font-size:14px;"><?php echo $view->date;?></span>
					</div>
					<div class="col-12 p-4 ">
						<pre class="content-text text-dark" style="font-size:15px;"><?php echo $view->content;?></pre>
					</div>
				</div>
			<?php }?>
			<div class="links text-center mt-4">
				<p ><?php echo $links;?></p>
			</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 my-2 mt-3">
				<div class="list-group populer-list shadow">
					<a href="#" class="list-group-item list-group-item-action active ">
						<h6>Popüler Etkinlikler</h6>
					</a>
					<?php
					foreach($popularData as $popular){
						$popularUrl = base_url("etkinliklerimiz/bak/$popular->id");
						echo "<a href=$popularUrl class='list-group-item list-group-item-action pop'> $popular->header </a>";
					}
					?>
			  	</div>
					<div class="list-group random-list mt-4 shadow">
					<a href="#" class="list-group-item list-group-item-action active ">
						<h6>Rastgele Etkinlikler</h6>
					</a>
					<?php
						foreach($randomData as $random){
							$randomUrl = base_url("etkinliklerimiz/bak/$random->id");
						echo "<a href=$randomUrl class='list-group-item list-group-item-action pop'> $random->header </a>";
						}
					?>
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
