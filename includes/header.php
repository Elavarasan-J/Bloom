<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bloom Salon &amp; Spa Morristown</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento"> 
		<link rel="stylesheet" href="style/bootstrap.css">
        <link rel="stylesheet" href="style/style.css">
		<link rel="stylesheet" href="style/responsive.css">
    </head>
   <body>
	   <!-- Wrapper -->
	   <div class="wrapper">		    
		   <!-- Header -->
			<nav class="navbar navbar-default sticky<?php echo (isset($home_page) && ($home_page == true))? '':' nav-bg';  ?>">
				<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header visible-xs-block">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img class="logo-black" src="images/logo-black.png" alt="Bloom">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="mobile-menu">
						<ul class="nav navbar-nav custom-nav">
							<li class="active"><a href="#">About Us</a></li>
							<li><a href="#">Home</a></li>
							<li class="logo hidden-xs">
								<a href="#">
									<img class="logo-gray" src="images/logo.png" alt="Bloom">
									<img class="logo-black" src="images/logo-black.png" alt="Bloom">
								</a>
							</li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Contact</a></li>
							<li class="gift-card visible-xs-block"><a href="#"><span class="gift-card-icon"></span> Gift Cards</a></li>
						</ul>
					</div>
				</div>
				
				<a class="gift-card hidden-xs" href="#"><span class="gift-card-icon"></span> Gift Cards</a>
			</nav>
		   <!--/Header -->