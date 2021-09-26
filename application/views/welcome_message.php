<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://kit.fontawesome.com/1cd5c35992.js" crossorigin="anonymous"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>DEM Eğitim Kurumları - İnsanlar ışığı görmez ışıkla görür...</title>
	<meta name = "description"
	content = "DEM Eğitim Kurumları öğrencinize yapabileceğiniz en büyük yaptırımdır. Bizimle öğrencinizin başarı seviyesini kat kat arttırın. ">

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TPVV7KG');</script>
<!-- End Google Tag Manager -->

<meta name="google-site-verification" content="dDJDRKbNtFxCnaI2rItdHlBtjMTJoRCuxizhWRJp6og" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156785009-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156785009-1');
</script>

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
	.crd-image{
		height:400px;
		width: 400px;
		border-right: 1px solid #fff;
		margin: 0px !important;
	}
	.card{
		background: transparent;
		border: 1px solid #d9d9d9;
		box-shadow: 0px 0px 16px white;
		color:black;
	}
	.card-title{
		margin-top:10px;
		text-align: center;
		font-weight: bold;
	}
	.card-subtitle{
		text-align: center;
		border: 1px solid #d9d9d9;
		border-radius: 1em;
		padding-top: 5px;
		padding-bottom: 5px;
		margin-top: 15px;
		background-color: #007bff;
	}
	.card-subtitle a{
		font-size: 14px;
		color: #fff
 !important;
	}
	.card-subtitle:hover{
		background-color: orange;
	}
	.card-subtitle a:hover{
		color:white !important;

	}
	.card-body{
		margin:0px !important;
		padding:0px !important;

	}
	.reg-button{
		margin:0px !important;
		width: 100%;
		font-size:12px;
		text-align: center;
	}
	.content{
		font-size:15px;
	}

	.atolye{
		background-color: #ff6a6a !important;
	}
	.veli{
		background-color: #cdaa7d !important;
	}
	.egitici{
		background-color: #cd0000 !important;
	}
	.ogretmen{
		background-color: #cd2990 !important;
	}

	.social-menu ul {
		margin-left: 300px !important;
    transform: translate(-50%, -50%);
    padding: 0;
    margin: 0;
    display: flex;
}
.social-menu ul li {
	margin-right: 30px !important;
	margin-left: 30px !important;
  list-style: none;
  margin: 0 10px;
}
.social-menu ul li .fa {
    color: #000000;
    font-size: 25px;
    line-height: 50px;
    transition: .5s;
}
.social-menu ul li .fa:hover {
    color: #ffffff;
}
.social-menu ul li a {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: white;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
}
.social-menu ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
    background-color: #3b5999;
}
.social-menu ul li:nth-child(2) a:hover {
    background-color: #55acee;
}
.social-menu ul li:nth-child(3) a:hover {
    background-color: #e4405f;
}
.social-menu ul li:nth-child(4) a:hover {
    background-color: #cd201f;
}
.social-menu ul li:nth-child(5) a:hover {
    background-color: #0077B5;
}

.prog-text{
  font-family: "Comic Sans MS", cursive, sans-serif;

	margin-top: 15px;
	margin-bottom:15px;
}
.program-text{
	margin-top:15px;
}
.program-image{
	transition: 0.5s;
	transform: translate(0,0px);

}
.program-image:hover{
	    transform: rotate(0deg) skew(0deg) translate(0, -10px);
			color: white;
}
.program-image-img{
	width: 270px;
	height: 270px;
	border-radius:50%;
	border:3px solid orange;
}
.program-link{
	text-decoration: none !important;
}

/* Banner */

	#banner {
		display: -ms-flexbox;
		-ms-flex-pack: center;
		-ms-flex-align: center;
		padding: 8em 0 6em 0;
		-moz-align-items: center;
		-webkit-align-items: center;
		-ms-align-items: center;
		align-items: center;
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-justify-content: center;
		-webkit-justify-content: center;
		-ms-justify-content: center;
		justify-content: center;
		background-image: url("<?php echo base_url("assets/login.jpg");?>");
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		border-top: 0;
		min-height: 50vh;
		height: 50vh !important;
		position: relative;
		text-align: center;
		overflow: hidden;
	}

		#banner .inner {
			-moz-transform: scale(1.0);
			-webkit-transform: scale(1.0);
			-ms-transform: scale(1.0);
			transform: scale(1.0);
			-moz-transition: opacity 1s ease, -moz-transform 1s ease;
			-webkit-transition: opacity 1s ease, -webkit-transform 1s ease;
			-ms-transition: opacity 1s ease, -ms-transform 1s ease;
			transition: opacity 1s ease, transform 1s ease;
			opacity: 1;
			position: relative;
			z-index: 2;
		}

		#banner h1 {
			font-size: 4em;
			margin-bottom: .25em;
			color: #FFF;
		}

		#banner p {
			color: rgba(255, 255, 255, 0.85);
			font-size: 1.75em;
		}

	@-moz-keyframes more {
		0% {
			bottom: -3em;
		}

		100% {
			bottom: 0;
		}
	}

	@-webkit-keyframes more {
		0% {
			bottom: -3em;
		}

		100% {
			bottom: 0;
		}
	}

	@-ms-keyframes more {
		0% {
			bottom: -3em;
		}

		100% {
			bottom: 0;
		}
	}

	@keyframes more {
		0% {
			bottom: -3em;
		}

		100% {
			bottom: 0;
		}
	}

		#banner:before {
			-moz-transition: opacity 3s ease;
			-webkit-transition: opacity 3s ease;
			-ms-transition: opacity 3s ease;
			transition: opacity 3s ease;
			-moz-transition-delay: 1.25s;
			-webkit-transition-delay: 1.25s;
			-ms-transition-delay: 1.25s;
			transition-delay: 1.25s;
			content: '';
			display: block;
			background-color: #000;
			height: 100%;
			left: 0;
			opacity: 0.65;
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 1;
		}

		@media screen and (max-width: 980px) {

			#banner {
				font-size: .85em;
			}

				#banner br {
					display: none;
				}

		}

		@media screen and (max-width: 736px) {

			#banner {
				min-height: 0;
				padding: 8em 2em 4em 2em;
			}

				#banner .inner {
					width: 100%;
				}

				#banner h1 {
					font-size: 2.25em;
					margin-bottom: 0.5em;
					padding-bottom: 0;
				}

				#banner p {
					font-size: 1.75em;
				}



		}

		@media screen and (max-width: 480px) {
			#banner {

			}

			#banner p {
				font-size: 1em;
			}

		}

		body.is-loading #banner .inner {
			-moz-transform: scale(0.99);
			-webkit-transform: scale(0.99);
			-ms-transform: scale(0.99);
			transform: scale(0.99);
			opacity: 0;
		}

		body.is-loading #banner:before {
			opacity: 1;
		}

	</style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPVV7KG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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

		<section id="banner" class="row">
			<div class="inner">
				<header class="mb-3">
					<h1>Dem Eğitim Kurumları</h1>
					<p>Başaracağınıza inanmıyoruz! Bizimle başaracağınızı biliyoruz çünkü...</p>
				</header>
				<a href="<?php echo base_url("bize_ulasin");?>" class="btn btn-primary mt-5">Bize Ulaşın</a>
			</div>
		</section>

		<div class="row bg-dark">
			<div class="col-sm-12 col-md-12 col-lg-12" style="padding: 0px !important;">
				<div class="col">
					<h3 class="text-center prog-text text-light">Eğitimler Ve Programlarımız</h3>
				</div>
			</div>
		</div>

		<div class="row program-row mt-2">
			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("programlar/oyun_tabanli_ogrenme_programi");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/oyun_tabanli/1.jpg");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Oyun Tabanlı Öğrenme</h3>
				</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("programlar/ogrenci_koclugu_programi");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/ogrenci_koclugu/1.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Öğrenci Koçluğu</h3>
				</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("programlar/atolyelerimiz");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/5.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Sınav Kazandıran Stratejiler</h3>
				</div>
				</a>
			</div>
		</div>

		<div class="row program-row mt-4">

			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("programlar/atolyelerimiz");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/10.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Atölyelerimiz</h3>
				</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("programlar/seminerlerimiz");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/2.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Seminerlerimiz</h3>
				</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("programlar/gelecegin_liderleri_programi");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/18.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Geleceğin Liderleri Programı</h3>
				</div>
				</a>
			</div>


		</div>

		<div class="row program-row mt-4">
			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("egitimlerimiz/egitici");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/11.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Eğitici Eğitimlerimiz</h3>
				</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("egitimlerimiz/okul");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/17.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Okul Eğitimlerimiz</h3>
				</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 sol-md-6 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("egitimlerimiz/veli");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/15.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Veli Eğitimlerimiz</h3>
				</div>
				</a>
			</div>
		</div>


		<div class="row program-row mt-4 px-5 mb-3">
			<div class="col-sm-none col-md-2 col-lg-2">

			</div>
			<div class="col-xs-12 col-sm-6 sol-md-4 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("egitimlerimiz/Ogretmen");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/13.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Öğretmen Eğitimlerimiz</h3>
				</div>
				</a>
			</div>

			<div class="col-xs-12 col-sm-6 sol-md-4 col-lg-4 text-center program">
				<a class="program-link" href="<?php echo base_url("programlar/psikolojik_danismanlik_programi");?>">
				<div class="program-image">
					<img class="program-image-img" src="<?php echo base_url("assets/programs/1.png");?>" alt="">
				</div>
				<div class="program-text text-dark">
					<h3>Psikolojik Danışmanlık</h3>
				</div>
				</a>
			</div>
			<div class="col-sm-none col-md-2 col-lg-2">

			</div>
		</div>


		<div class="row d-flex justify-content-center pt-2  bg-dark" style="height:70px !important; ">
			<div class="social-menu mt-4">
				<ul>
					<li><a href="https://www.facebook.com/mindupdiyarbakir-103146281384671/" target="_blank"><i class="fa fa-facebook"  aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/mind_up_diyarbakir/" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.instagram.com/Dem_egitim/" target="_blank"><i class="fa fa-instagram"></i></a></li>
				</ul>
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
