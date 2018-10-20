<!DOCTYPE html>
<html lang="en">
<head>
	<title>Penguin Perry's | <?PHP echo $currentPage; ?></title>
	<meta charset="utf-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="format-detection" content = "telephone=no" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/camera.css">
	<link rel="stylesheet" href="css/steps.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/jquery.mobilemenu.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.steps.min.js"></script>
	<script src='js/camera.js'></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
	<!--<![endif]-->

	<script>	
		$(window).load( function(){	
			
			   jQuery('.camera_wrap').camera();	 
			   
		});
	</script>
    
    
	<!--[if lt IE 9]>
		<div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
		<link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
		<script src="assets/assets/js/html5shiv.js"></script> 
		<script src="assets/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<!--==============================header=================================-->
	<header id="header">
		<div class="container">
			<div class="row" id="desktop-show">
				<div class="col-sm-4">
					<ul class="social_icons clearfix">
						<li><a href="http://facebook.com/PenguinPerrys"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="http://instagram.com/penguinperrys/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="http://twitter.com/PenguinPerrys"><i class="fa fa-twitter-square"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h1 class="navbar-brand navbar-brand_"><a href="index.php"><img alt="Penguin Perry's" src="img/logo.png"></a></h1>
				</div>
				<div class="col-sm-4 penguin">
					<img src="img/Penguins-04.png">
				</div>
			</div>
			<div class="row" id="mobile-show">
				
				<div class="col-xs-12">
					<h1 class="navbar-brand navbar-brand_"><a href="index.php"><img alt="Penguin Perry's" src="img/logo.png"></a></h1>
				</div>
				<div class="col-xs-12">
					<ul class="social_icons clearfix">
						<li><a href="http://facebook.com/PenguinPerrys"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="http://instagram.com/penguinperrys/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="http://twitter.com/PenguinPerrys"><i class="fa fa-twitter-square"></i></a></li>
					</ul>
				</div>
			</div>
		</div>	
		<div class="menuheader">
			<nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
				
					<ul class="nav sf-menu">
						<?PHP
						include 'datalogin.php';
						$active = ' class="active"';
						
						$result = mysqli_query($conn,"SELECT * FROM press");		
						$num_rows = mysqli_num_rows($result);
						
						?>
						
						<li <?PHP if($currentPage == 'Home'){echo $active;} ?>><a href="index.php">Home</a></li>
						<li<?PHP if($currentPage == 'Menu'){echo $active;} ?>><a href="menu.php">Menu</a></li>
						<li<?PHP if($currentPage == 'Catering'){echo $active;} ?>><a href="catering.php">Catering</a></li>
						<?PHP
							if($num_rows > 0) {
						?>
							<li<?PHP if($currentPage == 'Press'){echo $active;} ?>><a href="press.php">Press</a></li>
						<?PHP } ?>
						<li<?PHP if($currentPage == 'About'){echo $active;} ?>><a href="about.php">About</a></li>
						<li<?PHP if($currentPage == 'Fundraisers'){echo $active;} ?>><a href="fundraising.php">Fundraisers</a></li>
						<li<?PHP if($currentPage == 'Contact'){echo $active;} ?>><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		
	</header>