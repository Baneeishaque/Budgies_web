<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<tittle>The Eracle Website Template | Home :: w3layouts</tittle>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
	<script>
			$(document).ready(function() {
				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});
			});
		</script>
		<!-- //Owl Carousel Assets -->
		<!-----768px-menu----->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
		</script>
		<!-----//768px-menu----->
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html">
				<img src="images/og.png" alt="" width="248" height="101"/>
				<div class="clear"> </div>
				
		  </a>
	  </div>
		<div class="text">
		  <div class="soc_icons soc_icons1">
							<ul>
								<li><a class="icon1" href="#"> </a> </li>
								<li><a class="icon2" href="#"> </a></li>
								<li><a class="icon3" href="#"> </a></li>
								<div class="clear"></div>	
							</ul>
								
		  </div>
		</div>
		<div class="clear"> </div>
	</div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
	<div class="wrap">
		<!------start-768px-menu---->
			<div id="page">
					<div id="header">
						<a class="navicon" href="#menu-left"> </a>
					</div>
					<nav id="menu-left">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="services.html">Service</a></li>
							<li><a href="pages.html">Pages</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</nav>
			</div>
		<!------start-768px-menu---->
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<?php
                                                    include_once 'tab.php';
                                                    print_header('Home');
                                                ?>
					</ul>
				</div>
				
				<div class="clear"> </div>
			</div>
	</div>
</div>
			<!---start-banner---->
			<div class="banner" id="move-top">
				<!----start-image-slider---->
					<div data-scroll-reveal="enter bottom but wait 0.7s" class="img-slider" id="home">
						<div class="wrap">
							<div class="slider">
								<ul id="jquery-demo">
								  <li>
								    <a href="#slide1">
								    </a>
								    <div data-scroll-reveal="enter bottom but wait 0.7s" class="slider-detils">
								    	<h3>Lorem ipsum dolor sit amet.</h3>
								    	<span>consectetur adipisc ing elit</span>
								    </div>
								  </li>
								  <li>
								    <a href="#slide2">
								    </a>
								      <div data-scroll-reveal="enter bottom but wait 1s" class="slider-detils">
								    	<h3>Lorem Ipsum has been the industry's</h3>
								    	<span>Aliquam viverra consectetur nibh a blan dit.</span>
								    	</div>
								  </li>
								  <li>
								    <a href="#slide3">
								    </a>
								      <div data-scroll-reveal="enter bottom but wait 1.5s" class="slider-detils">
								      	<h3>There are many variations of passages </h3>
								    	<span>Proin at amet consectetur adipisc lacinia.</span>
								    </div>
								  </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
						<!---slider---->
				<link rel="stylesheet" href="css/slippry.css">
				<script src="js/jquery-ui.js" type="text/javascript"></script>
				<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
				<script>
					  jQuery('#jquery-demo').slippry({
					  // general elements & wrapper
					  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
					  // options
					  adaptiveHeight: false, // height of the sliders adapts to current slide
					  useCSS: false, // true, false -> fallback to js if no browser support
					  autoHover: false,
					  transition: 'fade'
					});
				</script>
				<!---scrooling-script--->
					<!----//End-image-slider---->
					<div class="simple-text">
						<div class="wrap">
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h4>
							
						</div>
					</div>
			
			<div class="testimonial"><!-- start last_posts -->
				<div class="wrap">
					<h5 class="heading">Recent Notifications</h5>
					<div class="test-grids">
						<div class="test-desc">
                                                    <ul class="sidebar_1">
			           	<li><a href="#">Lorem Ipsum is simply dummy</a></li>
			            <li><a href="#">Lorem Ipsum is simply dummy</a></li>
			           	<li><a href="#">Lorem Ipsum is simply dummy</a></li>
			            <li><a href="#">Lorem Ipsum is simply dummy</a></li>
			          </ul>
								</div>
						<div class="img_1">
							<img src="images/avator.png">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			<div class="get_in_touch"><!-- start last_posts -->
				<div class="wrap">
					<h5 class="heading">get in touch</h5>
					
					<div class="get-right">
						<form action="addfeedaction.php" methode="POST">
								<ul>
									<li class="name">
										<a href="#" class="icon user"> </a>
										<input name="title "type="text" placeholder="Title" required="">
										<div class="clear"> </div>
									</li> 
									<li class="email_1">
										<input type="email" placeholder="<?php echo date("d/m/Y"); ?>">
                                                                                <div class="clear"> </div>
									</li> 
										<div class="clear"> </div>
										<li>
										  <textarea name="feedback" class="plain buffer" placeholder="Feedback"></textarea>
										</li>
                                                                                <input class="send" type="submit" value="Submit" />
										<input class="send" type="submit" value="Cancel" />
										<!--
									<div class="send">
											<a href="#">SEND</a>
									</div>
									-->
								</ul>
						</form>
				</div>
				<div class="clear"> </div>
					</div>
			</div>
			<div class="footer">
				<div class="wrap">
					<div class="footer-left">
						<h3>About budgies</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
					</div>
					<div class="footer-right">
						<div class="comments1">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li><a href="#">home/</a></li>
							<li><a href="#">term of services/</a></li>
							<li><a href="#">license/</a></li>
							<li><a href="#">pess</a></li>
							
						</div>
					</div>
					<div class="clear"> </div>	
				</div>
			</div>
			<div class="copy">
				       <p>copyright © 2015 <a href="http://w3layouts.com" target="_blank">Budgies</a></p>
			  </div>
</body>
</html>