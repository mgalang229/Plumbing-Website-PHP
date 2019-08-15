<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HOME</title>
		<meta charset="utf-8">
		<meta name="description" content="The best plumbing service in town!">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-U-Compatible" content="ie=edge">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body>

		<!-- HEADER CONTAINER -->
		<div class="header-container">

			<!-- TOP HEADER -->
			<div class="top-header">
				<div class="top-header-secondary-menu">
					<ul class="top-header-nav">
						<li><a href="#PhoneNumber"><i class="fas fa-phone-volume"></i>305-240-6577</a></li>
						<li><a href="#Residential"><i class="fas fa-wrench"></i>Residential</a></li>
						<li><a href="#Commercial"><i class="fas fa-wrench"></i>Commercial</a></li>
						<li><a href="#Emergencies"><i class="fas fa-wrench"></i>Emergencies</a></li>
					</ul>
				</div>
			</div>

				
		
			<!-- MAIN HEADER -->
			<div class="main-header">
				<div class="main-header-secondary-menu">
					<img src="<?php echo get_template_directory_uri(); ?>/logo.png" id="home-logo">
					<i id="bars" class="fas fa-bars"></i>
					<ul>
						<li><a href="index.php" id="active">Home</a></li>
						<li><a href="<?php echo get_template_directory_uri(); ?>/about.html">About</a></li>
						<div class="dropdown">
						    <button class="dropbtn"><li><a href="<?php echo get_template_directory_uri(); ?>/services.html">Our Services<i class="fas fa-angle-down"></i></a></li>
						    </button>
						    <div class="dropdown-content">
						      <a href="<?php echo get_template_directory_uri(); ?>/residential-plumbing.html">Residential Plumbing</a>
						      <a href="<?php echo get_template_directory_uri(); ?>/commercial-plumbing.html">Commercial Plumbing</a>
						      <a href="<?php echo get_template_directory_uri(); ?>/emergency-plumbing.html">Emergency Plumbing</a>
						    </div>
						</div> 
						<button class="quote-button"> <a href="<?php echo get_template_directory_uri(); ?>/get-a-quote.html" style="text-decoration: none; color: #fff;">Get A Quote</a></button>
					</ul>
				</div>
			</div>
		</div>