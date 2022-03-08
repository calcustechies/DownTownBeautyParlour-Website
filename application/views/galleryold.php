<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>  

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Down Town Gents Beauty Parlour | Christopher Nagar, Ollur, Thrissur, Kerala | Hair Cutting | Hair Dyeing |
		Loreal Hair Spa | Hair Colouring | Facials | Bleaching | Pimple Treatment</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/icons/downtownlogo.ico">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/isotope/isotope.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/flexslider/flexslider.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/settings-panel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/light.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">

	<!-- JS Font Script -->
	<script src="js/bebas-neue.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Modernizer -->
	<script src="<?php echo base_url();?>js/modernizr.custom.97074.js"></script>
	<script src="<?php echo base_url();?>js/modernizr.custom.js"></script>

</head>

<body id="onepage">

	<div class="wrapper">
		<!-- INTRO -->
		<div id="intro">
			<header class="header">
				<div class="stick">
					<div id="main-nav">
						<nav class="navbar navbar-inverse one-menu-top hidden-xs hidden-sm">
							<div class="container-fluid">
								<div class="navbar-collapse collapse" id="navbar">
									<div class="col-md-5">
										<div class="pull-right onemenu-right">
											<ul class="nav navbar-nav">

											</ul>
										</div>
									</div>

									<div class="col-md-2">
										<a href="<?php echo base_url();?>" class="navbar-brand"><img class="img-responsive"
												src="<?php echo base_url();?>assets/images/home-page/downtownlogo.png" alt=""></a>
									</div>

									<div class="col-md-5">
										<div class="pull-left onemenu-left">
											<ul class="nav navbar-nav">

											</ul>
										</div>
									</div>

								</div>
							</div>
						</nav>

						<nav class="navbar navbar-inverse one-menu-top-ipad visible-sm hidden-xs hidden-md hidden-lg">
							<div class="container-fluid">
								<div class="navbar-collapse collapse" id="navbar2">
									<div class="col-md-12">
										<a href="<?php echo base_url();?>" class="navbar-brand"><img class="img-responsive"
												src="<?php echo base_url();?>assets/images/home-page/downtownlogo.png" alt=""></a>

										<ul class="nav navbar-nav">

										</ul>
									</div>
								</div>
							</div>
						</nav>

						<nav class="navbar navbar-inverse one-menu-top-mob visible-xs hidden-sm hidden-md hidden-lg">
							<div class="container">
								<div class="navbar-header">
									<a href="<?php echo base_url();?>" class="navbar-brand"><img class="img-responsive"
											src="<?php echo base_url();?>assets/images/home-page/downtownlogo.png" alt=""></a>
									<br>
									
								</div>

							</div>
						</nav>


					</div>
				</div>
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php echo base_url();?>assets/images/slider/1/1.jpg" alt="" />
						</li>
						<li>
							<img src="<?php echo base_url();?>assets/images/slider/1/2.jpg" alt="" />
						</li>
						<li>
							<img src="<?php echo base_url();?>assets/images/slider/1/3.jpg" alt="" />
						</li>
					</ul>
				</div>
			</header>
		</div>
		<!-- INTRO -->






		<!-- GALLERY -->
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="h-page-title">
					<h1>gallery</h1>
					<span class="sub-title">our works</span>
					<div class="mustache">
						<span><img class="img-responsive" src="<?php echo base_url();?>assets/images/home-page/mustache.png" alt=""></span>
					</div>
				</div>
			</div>
			<div id="portfolio-gal">
				<div class="col-md-12 main-navigation"  style="top: 0px;">
					<ul id="filters" class="clearfix portfolio-gal-filter" data-option-key="filter">
						<li><a href="#filter" class="active" data-option-value="*">All</a></li>
						<li><a href="#filter" data-option-value=".headshaves" id="2" onclick="viewHairCutting(this.id)">Hair Cutting</a></li>

						<li><a href="#filter" data-option-value=".restyle" id="3" onclick="viewHairCutting(this.id)">Hair Dyeing</a></li>

						<li><a href="#filter" data-option-value=".manicure" id="4" onclick="viewHairCutting(this.id)">Loreal Hair Spa</a></li>

						<li><a href="#filter" data-option-value=".stubble" id="5" onclick="viewHairCutting(this.id)">Hair Colouring</a></li>

						<li><a href="#filter" data-option-value=".stubble" id="6" onclick="viewHairCutting(this.id)">Facials</a></li>
						<li><a href="#filter" data-option-value=".stubble" id="7" onclick="viewHairCutting(this.id)">Bleaching</a></li>
						<li><a href="#filter" data-option-value=".stubble" id="8" onclick="viewHairCutting(this.id)">Pimple Treatment</a></li>
					</ul>
				</div>
				<div class="col-md-12">
					<div class="portfolio-gal isotope" id=testImg>
					<?php
					foreach($img->result_array()as $row)
					{
				?>
						<div class="folio-item headshaves col-sm-12 col-sm-6 col-md-6 col-lg-6">
							<div class="folio-thumb">
								<a href="images/portfolio/1/1.html" class="pop_lbox">
									<div class="overlay-bg"></div>
									<img src="http://localhost/downtownadminpanel/uploads/<?php echo $row['f_img'];?>" class="img-responsive" alt="" />
								</a>
								<div class="folio-border">
									<div class="folio-detail">
										<h5><?php echo $row ['f_name'];?></h5>
										<h6><?php echo $row ['f_des'];?></h6>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
						?>


						<!-- <div class="folio-item restyle col-sm-12 col-sm-6 col-md-6 col-lg-6">
							<div class="folio-thumb">
								<a href="assets/images/portfolio/1/2.html" class="pop_lbox">
									<div class="overlay-bg"></div>
									<img src="<//?php echo base_url();?>assets/images/home-page/projects/2.jpg" class="img-responsive" alt="" />
								</a>
								<div class="folio-border">
									<div class="folio-detail">
										<h5>OUR Best restle</h5>
										<h6>design and idea</h6>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="folio-item manicure col-sm-12 col-sm-6 col-md-6 col-lg-6">
							<div class="folio-thumb">
								<a href="<//?php echo base_url();?>assets/images/portfolio/1/3.html" class="pop_lbox">
									<div class="overlay-bg"></div>
									<img src="<//?php echo base_url();?>assets/images/home-page/projects/3.jpg" class="img-responsive" alt="" />
								</a>
								<div class="folio-border">
									<div class="folio-detail">
										<h5>OUR Best manicure</h5>
										<h6>design and idea</h6>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="folio-item stubble col-sm-12 col-sm-6 col-md-6 col-lg-6">
							<div class="folio-thumb">
								<a href="images/portfolio/1/4.html" class="pop_lbox">
									<div class="overlay-bg"></div>
									<img src="</?php echo base_url();?>assets/images/home-page/projects/4.jpg" class="img-responsive" alt="" />
								</a>
								<div class="folio-border">
									<div class="folio-detail">
										<h5>OUR Best stubble</h5>
										<h6>design and idea</h6>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</section>
		<!-- GALLERY -->



		<!-- FOOTER -->
		<footer id="footer" class="blog-f">
			<div class="container">
				<span>Follow, Like, Pin all the social stuff</span>
				<ul class="footer-social">
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-youtube"></a></li>
				</ul>
				<p>Down Town Gents beauty Parlour &copy;Copyright 2020</p>
				<p>Powered By <a target="_blank" href="http://calcus.in">Calcus Technologies</a></p>
			</div>
		</footer>
		<!-- FOOTER -->
	</div>

<input type="hidden" id="base" value="<?php echo base_url();?>">
	<!-- Javascript -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/navigation/jquery.sticky.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/dialogFx.js"></script>
	<script src="<?php echo base_url();?>assets/js/dialog-js.js"></script>
	<script src="<?php echo base_url();?>assets/js/navigation/jquery.easing.js"></script>
	<script src="<?php echo base_url();?>assets/js/flexslider/jquery.flexslider.js"></script>
	<script src="<?php echo base_url();?>assets/js/navigation/scroll.js"></script>
	<script src="<?php echo base_url();?>assets/js/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/isotope/isotope.pkgd.js"></script>
	<script src="<?php echo base_url();?>assets/js/superfish/js/hoverIntent.js"></script>
	<script src="<?php echo base_url();?>assets/js/superfish/js/superfish.js"></script>
	<script src="<?php echo base_url();?>assets/js/tweecool.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.bpopup.js"></script>
	<script src="<?php echo base_url();?>assets/js/pikaday/pikaday.js"></script>
	<script src="<?php echo base_url();?>assets/js/classie.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo base_url();?>js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.prettyphoto.js"></script>
	<script src="<?php echo base_url();?>assets/js/script.js"></script>
	<script src="<?php echo base_url();?>assets/js/service.js"></script>







</body>

</html>