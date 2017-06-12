<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<php>
<head>
<title>The Eracle Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
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
			<a href="index.php">
				<img src="images/og.png" alt="" width="248" height="101"/>
				<div class="clear"> </div>
			 </a>
		</div>
		<div class="text">
		 <div class="soc_icons soc_icons1">
							<ul>
                                                            <li><a class="icon4" href="signup-student.php"> </a> </li>
                                                            <li><a class="icon4" href="signup-teacher.php"> </a></li>
                                                            <li><a class="icon5" href="login.php"> </a></li>
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">About us</a></li>
							<li><a href="services.php">Service</a></li>
							<li><a href="pages.php">Pages</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact us</a></li>
						</ul>
					</nav>
			</div>
		<!------start-768px-menu---->
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<?php
                                                    include_once 'tab.php';
                                                    print_header('Contact us');
                                                ?>
					</ul>
				</div>
				
				<div class="clear"> </div>
			</div>
	</div>
</div>
		<div class="header_bottom">
		</div>
		<!-----end-header-------->
		<!---start-getintouch---->
			<div class="get-intouch" id="contact">
				<div class="wrap">
				  <h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Contact Us</h3>
				<div class="get-intouch-grids">
					<div class="get-intouch-left-address">
						<h4>BUDGIES</h4>
						<p>123 Z Street, 1234</p>
						<p>Washington. United States.</p>
						<p>(401) 1234 567</p>
						<p><a href="mailto:hello@budgies.com">123.com</a></p>
					</div>
					<div class="get-intouch-center-form">
						<h5>Follow thE dreaM</h5>
						<form method="post" action="contact-post.php">
							<input class="frist" type="text" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
							<textarea onFocus="if(this.value == 'Your Message') this.value='';" onBlur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
							<input type="submit" value="Send message" />
							<div class="clear"> </div>
						</form>
					</div>
					<!-- aToolTip js -->
						<script type="text/javascript" src="js/jquery.atooltip.js"></script>
						<script type="text/javascript">
							$(function(){ 
								$('a.normalTip').aToolTip();
								}); 
						</script>
					<div class="clear"> </div>
				</div>
			  </div>
				
			</div>
			<!---//End-getintouch---->
			<!----start footer------>
			<div class="footer">
				<div class="wrap">
					<div class="footer-left">
						<h3>About Budgies</h3>
						<p>We are a group of boys from SSM polytechnic Tirur</p>
						<p>We tied up togather for making the application </p>
					<div class="detail">
						<ul>
							<li><a href="#">home/</a></li>
							<li><a href="#">term of services/</a></li>
							<li><a href="#">license/</a></li>
							<li><a href="#">pess</a></li>
							<div class="clear"> </div>	
						</ul>
					</div>
					<div class="soc_icons soc_icons1">
							<ul>
								<li><a class="icon1" href="#"> </a> </li>
								<li><a class="icon2" href="#"> </a></li>
								<li><a class="icon3" href="#"> </a></li>
								<div class="clear"> </div>	
							</ul>
								
					</div>
					</div>
					<div class="footer-right">
						<h3>twitter</h3>
						<div class="comments1">
							<p>Follow us on twitter #budgiesnet</p>
                                                        <p>Follow us on twitter #budgiesnet</p>
                                                        <p>Follow us on twitter #budgiesnet</p>
                                                        <p>Follow us on twitter #budgiesnet</p>
							
						</div>
						<div class="comments1">
							<p>budgiesnet@gmail.com </p>
						</div>
					</div>
					<div class="clear"> </div>	
				</div>
			</div>
			<div class="copy">
				        <p>copyright © 2015 <a href="http://w3layouts.com" target="_blank">Budgies</a></p>
			  </div>
</body>
</php>