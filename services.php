
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Eracle Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
			<a href="index.html">
				<img src="images/lg.png" alt=""/>
				<h1>ERACLE</h1>
				<div class="clear"> </div>
			 </a>
		</div>
		<div class="text">
		  <p>Lorem Ipsum is simply dummy text of the printing</p>
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
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="services.html">Service</a></li>
						<li><a href="pages.html">Pages</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact us</a></li>
					</ul>
				</div>
				<div class="h_search">
		    		<form>
		    			<input type="text" value="" placeholder="search something...">
		    			<input type="submit" value="">
		    		</form>
				</div>
				<div class="clear"> </div>
			</div>
	</div>
</div>
 <div class="main">
   	     <div class="wrap">
				 <div class="cont1 span_2_of_g1">
				      <div class="section group">
						
					<?php
                                        
                                         include 'connection.php';
                                          $sql="SELECT * FROM photos order by id desc limit 0,6";
                                          $result = $conn->query($sql);
                                          while($pic=$result->fetch_assoc()){
                                             
   
                    	
                                           echo' <div class="col_1_of_about-box span_1_of_about-box">
						  	    <div id="nivo-lightbox-demo"> <p> <a href="images/'; echo $pic["image"]; echo '" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
							  	<img src="images/';
                                           echo $pic["image"];
                                                   echo '" alt="" >
					     </div>';
                                          
                                          }
//					?>
				        <div class="clear"></div> 
					</div>
					<div class="section group">
						
						</div>
				        <div class="clear"></div> 
					</div>
					
				</div>
				   <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>
		</div>
		</div>
		</div>
	<div class="footer">
				<div class="wrap">
					<div class="footer-left">
						<h3>About eracle</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
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
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							<span>~12 hours ago</span>
						</div>
						<div class="comments1">
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<span>~2 days ago</span>
						</div>
					</div>
					<div class="clear"> </div>	
				</div>
			</div>
			<div class="copy">
				       <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
			  </div>
</body>
</html>
