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
<!--------start-blog----------->
<div class="blog">
	<div class="main">
		  	<div class="wrap">
			 	<div class="single-top">
				 <div class="wrapper_single">
                                     
					  <div class="wrapper_top">
						<?php
                                                    include 'connection.php';
                                                    $sql="SELECT * FROM forum  ";
                                                     $result = $conn->query($sql);
                                                     $row=$result->fetch_assoc();
                                              echo'<div class="grid_1 alpha">
							<div class="date">
								<span>';
									$date=$row["date"];
                                                                        echo substr($date,0,2);
								echo'</span>';
								echo substr($date,3);
							echo'</div>
						</div>';
                                                      ?>
					 	<div class="content span_2_of_single">
						   <?php		
                                                    echo'<h5 class="blog_title"><a href="bloginner.html">'; echo $row["tittle"]; 
                                                    echo'</a></h5>';
                                                            ?>
						   		<div class="links">
									<h3 class="nam">By<a href="bloginner.html">&nbsp;Lorem Ipsum</a></h3>
									<h3 class="comments"><a href="#">126comments</a></h3>
									<h3 class="like"><a href="#">Like</a></h3>
									<h3 class="tags">Tags: <a href="#">Design</a>,<a href="#">Creative</a>,<a href="#">wordpress theme</a></h3>
								
									<h3>Share</h3>
									<h3>
										<div class="social_1">
											<ul>	
											    <li class="icon1_t"><a href="#"><span> </span></a></li>
											    <li class="icon2_f"><a href="#"><span> </span></a></li>	 	
										    </ul>
										</div>
									</h3>
									<div class="clear"> </div>
								</div>
						<?php		
                                                    echo '<div class="content">
									<div class="span-1-of-1">
										<a href="#"><img class="m_img"  src="images/'; echo $row["image"]; echo'" alt=""/></a>
									</div>
									<div class="span-1-of-2">
						 				<p>'; echo $row["description"];echo'</p>
						 				
						 			</div>
						 			<div class="clear"> </div>
								</div>';
                                                                ?>
								
								<h3 class="heading_1">Share With Youir Friends</h3>
								<div class="share_icons">
									<a href="#"><img src="images/share_icon1.png"/></a>
								 </div>
								<div class="grid_2_page">
									<ul>
										<li class="preview"><a href="#"><span> </span></a></li>
										<li><a href="#">Previous Post </a></li>
										<li><a href="#">Next Post</a></li>
										<li class="next"><a href="#"><span> </span></a></li>
										<div class="clear"> </div>
									</ul>
								</div>
								<div class="recentpost">
							 		<h4>Recent Post</h4>
								 	<ul class="sidebar_1">
							           	<li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</a></li>
							            <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</a></li>
							           	<li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</a></li>
							            <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</a></li>
						          </ul>
						        </div>
						        <div class="comments">
                                                            <h4>3&nbsp;Comments</h4>
						        	<div class="c_grid">
						        		<div class="person_1">
						        			<a href="#"><span> </span></a>
						        		</div>
						        		<div class="desc">
						        			<div class="c_sub_grid">
						        			<p><a href="#">Lorem Ipsum,10 Jan 2013 </a></p>
						        			<h6><a href="#">Reply</a></h6>
						        			<div class="clear"> </div>
						        			</div>
						        			<div class="para">
						        			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
						        			</div>
						        		</div>
						        		<div class="clear"> </div>
						        	</div>
						        	<div class="c_grid">
						        		<div class="person_1">
						        			<a href="#"><span> </span></a>
						        		</div>
						        		<div class="desc">
						        			<div class="c_sub_grid">
						        			<p><a href="#">Lorem Ipsum,10 Jan 2013 </a></p>
						        			<h6><a href="#">Reply</a></h6>
						        			<div class="clear"> </div>
						        			</div>
						        			<div class="para">
						        			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
						        			</div>
						        		</div>
						        		<div class="clear"> </div>
						        	</div>
						        	<div class="c_grid_1">
						        		<div class="person_1 plus">
						        			<a href="#"><span> </span></a>
						        		</div>
						        		<div class="desc">
						        			<div class="c_sub_grid">
						        			<p><a href="#">Lorem Ipsum,10 Jan 2013 </a></p>
						        			<h6><a href="#">Reply</a></h6>
						        			<div class="clear"> </div>
						        			</div>
						        			<div class="para">
						        			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
						        			</div>
						        		</div>
						        		<div class="clear"> </div>
						        	</div>
						        </div>
						        <div class="comments-area">
				  		        <h4>Leave a Comment</h4>
									<form method="post" action="contact-post.html">
										<p>
											<input type="text" value="Name*" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name*';}">
										</p>
										<p>
											<input type="text"  value="Email *" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email *';}">
										</p>
										<div class="clear"> </div>
										<div class="text_area">
											<textarea onFocus="if(this.value == 'Message*') this.value='';" onBlur="if(this.value == '') this.value='Message*';">Message*</textarea>
										</div>
										<div>
											<div class="sky_form">
												<label class="checkbox"><input type="checkbox" name="checkbox"><i>Notify me of followup comments via e-mail</i></label>
											</div>
											<div class="button send_button">
											   	 <input type="submit" value="Send">
											</div>
										</div>
										
									</form>
							  </div>
					</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="rsidebar span_1_of_3">
				<div class="search_box">
					<form>
					   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
				    </form>
			 	</div>
				<div class="button">
						   	 <span><input type="button" value="" ></span>
						</div>
				
              
               <div class="email_box">
					<form>
						<div class="email">
					  		 <input type="text" value="Enter Your e-mail" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter Your e-mail';}">
					  	</div>
					  	 <div class="button">
						   	 <span><input type="submit" value="Subscribe"></span>
						</div>
				    </form>
			 	</div>
			 	<div class="Categories">
			 		<h4>Categories</h4>
				 	<ul class="sidebar">
			           	<div class="hover"><li><a href="#">Lorem Ipsum is simply dummy</a></li></div>
			            <div class="hover"><li><a href="#">Lorem Ipsum is simply dummy</a></li></div>
			            <div class="hover"><li><a href="#">Lorem Ipsum is simply dummy</a></li></div>
			            <div class="hover"><li><a href="#">Lorem Ipsum is simply dummy</a></li></div>
			          </ul>
		        </div>
		        <div class="popularpost">
		        	<h4>Popular Post</h4>
		        	<div class="image_b">
		        		<a href="#"><img src="images/sb5.jpg"/></a>
		        	</div>
		        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		        	<div class="link_1">
		        		<p><a href="#">Sep 26,2013 </a></p>
		        		<a href="#" class="arrow_btn right">Read More</a>
		        		<div class="clear"> </div>
		        	</div>
		        </div>
		        <div class="recentpost">
			 		<h4>Recent Post</h4>
				 	<ul class="sidebar_1">
			           	<li><a href="#">Lorem Ipsum is simply dummy</a></li>
			            <li><a href="#">Lorem Ipsum is simply dummy</a></li>
			           	<li><a href="#">Lorem Ipsum is simply dummy</a></li>
			            <li><a href="#">Lorem Ipsum is simply dummy</a></li>
			          </ul>
		        </div>
		        <div class="tags">
		        	<h4>Tags</h4>
		        	<ul>
		        		<li><a href="#">design</a></li>
		        		<li><a href="#">development</a></li>
		        		<li><a href="#">seo</a></li>
		        		<div class="clear"> </div>
		        	</ul>
		        </div>
		</div>
				<div class="clear"> </div>
			</div>
		</div>
	</div>
</div>
	<!--------//end-blog_inner----------->
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