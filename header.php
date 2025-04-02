<!DOCTYPE html>
<html>

<head>
	<!-- Basic -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Site Metas -->
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>Troweld</title>

	<!-- bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="<?php echo bloginfo( 'template_directory' ); ?>/css/bootstrap.css" />

	<!-- fonts style -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<!--owl slider stylesheet -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
	<!-- nice select -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
	<!-- font awesome style -->
	<link href="<?php echo bloginfo( 'template_directory' ); ?>/css/font-awesome.min.css" rel="stylesheet" />

	<!-- Custom styles for this template -->
	<link href="<?php echo bloginfo( 'template_directory' ); ?>/css/style.css" rel="stylesheet" />
	<!-- responsive style -->
	<link href="<?php echo bloginfo( 'template_directory' ); ?>/css/responsive.css" rel="stylesheet" />
</head>

<body>
	<div class="hero_area">
	<!-- header section strats -->
	<header class="header_section">
		<div class="header_top">
		<div class="container-fluid header_top_container">
			<a class="navbar-brand " href="index.html"> Tro<span>Weld</span> </a>
			<div class="contact_nav">
			<a href="">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				<span>
				Location
				</span>
			</a>
			<a href="">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<span>
				Call : +01 123455678990
				</span>
			</a>
			<a href="">
				<i class="fa fa-envelope" aria-hidden="true"></i>
				<span>
				demo@gmail.com
				</span>
			</a>
			</div>
			<div class="social_box">
			<a href="">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a>
			<a href="">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</a>
			<a href="">
				<i class="fa fa-linkedin" aria-hidden="true"></i>
			</a>
			<a href="">
				<i class="fa fa-instagram" aria-hidden="true"></i>
			</a>
			</div>
		</div>
		</div>
		<div class="header_bottom">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg custom_nav-container ">
			<a class="navbar-brand navbar_brand_mobile" href="index.html"> Tro<span>Weld</span> </a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class=""> </span>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary-menu',
					'menu_class'      => 'navbar-nav',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarSupportedContent',
				)
			);
			?>
			</nav>
		</div>
		</div>
	</header>
	<!-- end header section -->
