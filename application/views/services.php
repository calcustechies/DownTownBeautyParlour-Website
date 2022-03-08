<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="Down Town Gents Beauty Parlour , Christopher Nagar, Ollur, Thrissur, Kerala , Hair Cutting , Hair Dyeing ,Loreal Hair Spa , Hair Colouring , Facials , Bleaching , Pimple Treatment" />
	<meta name="description" content="Down Town Gents Beauty Parlour , Christopher Nagar, Ollur, Thrissur, Kerala , Hair Cutting , Hair Dyeing ,Loreal Hair Spa , Hair Colouring , Facials , Bleaching , Pimple Treatment">
	<meta name="author" content="calcus technologies">

	<title>Down Town Gents Beauty Parlour | Christopher Nagar, Ollur, Thrissur, Kerala | Hair Cutting | Hair Dyeing |
		Loreal Hair Spa | Hair Colouring | Facials | Bleaching | Pimple Treatment</title>

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/icons/downtownlogo.ico">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/isotope/isotope.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/flexslider/flexslider.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/settings-panel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/light.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

	<!-- JS Font Script -->
	<script src="js/bebas-neue.js"></script>



	<!-- Modernizer -->
	<script src="<?php echo base_url(); ?>js/modernizr.custom.97074.js"></script>
	<script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>

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
										<a href="<?php echo base_url(); ?>" class="navbar-brand"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home-page/downtownlogo.png" alt=""></a>
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
										<a href="<?php echo base_url(); ?>" class="navbar-brand"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home-page/downtownlogo.png" alt=""></a>

										<ul class="nav navbar-nav">

										</ul>
									</div>
								</div>
							</div>
						</nav>

						<nav class="navbar navbar-inverse one-menu-top-mob visible-xs hidden-sm hidden-md hidden-lg">
							<div class="container">
								<div class="navbar-header">
									<a href="<?php echo base_url(); ?>" class="navbar-brand"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/home-page/downtownlogo.png" alt=""></a>
									<br>

								</div>

							</div>
						</nav>


					</div>
				</div>
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php echo base_url(); ?>assets/images/slider/1/1.jpeg" alt="" />
						</li>
						<li>
							<img src="<?php echo base_url(); ?>assets/images/slider/1/2.jpeg" alt="" />
						</li>
						<li>
							<img src="<?php echo base_url(); ?>assets/images/slider/1/3.jpeg" alt="" />
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
					<div class="mustache">
						<span><img class="img-responsive" src="images/home-page/mustache.png" alt=""></span>
					</div>
				</div>
			</div>
			<div id="portfolio-gal">
				<div class="col-md-12 main-navigation" style="top: 0px;">
					<ul id="filters" class="clearfix portfolio-gal-filter" data-option-key="filter">
						<li><a href="#filter" class="active" data-option-value="*">All</a></li>
						<li><a href="#filter" data-option-value=".haircutting">Hair Cutting</a></li>
						<li><a href="#filter" data-option-value=".hairdyeing">Hair Dyeing</a></li>
						<li><a href="#filter" data-option-value=".lorealhairspa">Loreal Hair Spa</a></li>
						<li><a href="#filter" data-option-value=".haircolouring">Hair Colouring</a></li>
						<li><a href="#filter" data-option-value=".facials">Facials</a></li>
						<li><a href="#filter" data-option-value=".bleaching">Bleaching</a></li>
						<li><a href="#filter" data-option-value=".pimpletreatment">Pimple Treatment</a></li>
					</ul>
				</div>
				<div class="col-md-12">
					<div class="portfolio-gal isotope">
						<?php
						foreach ($gallery->result_array() as $row2) {
							$image = $row2['f_img'];
							$title = $row2['f_name'];
							$description = $row2['f_des'];
							$catName1 = $row2['category_name'];
							$catName2 = $row2['categoryName'];
						?>

							<div class="folio-item <?php echo $catName1; ?> col-sm-12 col-sm-6 col-md-6 col-lg-6">
								<div class="folio-thumb">
									<a href="images/portfolio/1/1.html" class="pop_lbox">
										<div class="overlay-bg"></div>
										<img src="http://controlpanel.downtownbeautyparlourollur.com/uploads/<?php echo $image; ?>" class="img-responsive" alt="" />
									</a>
									<div class="folio-border">
										<div class="folio-detail">
											<h5><?php echo $title; ?></h5>
											<h6><?php echo $description; ?></h6>
										</div>
									</div>
								</div>
							</div>

						<?php } ?>

					</div>
					<div class="clearfix"></div>
					<div class="space30"></div>
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

	<input type="hidden" id="base" value="<?php echo base_url(); ?>">
	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/navigation/jquery.sticky.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/dialogFx.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/dialog-js.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/navigation/jquery.easing.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/flexslider/jquery.flexslider.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/navigation/scroll.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/isotope/isotope.pkgd.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/superfish/js/hoverIntent.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/superfish/js/superfish.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/tweecool.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.bpopup.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/pikaday/pikaday.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?php echo base_url(); ?>js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.prettyphoto.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/service.js"></script>







</body>

</html>