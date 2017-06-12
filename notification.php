<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>

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
            $(function () {
                $('nav#menu-left').mmenu();
            });
        </script>
        <!-----//768px-menu----->
    </head>
    <body>
        <!-- start header -->
       <?php
include_once 'header.php';
?>
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
							
							<li><a href="notification.php">Notifications</a></li>
                                                        <li><a href="login.php">Login</a></li>
                                                        <li><a href="signup-teacher.php">Teacher Registration</a></li>
							<li><a href="signup-student.php">Student Registration</a></li>
                                                        <li><a href="about.php">About us</a></li>
							
							
						</ul>
					</nav>
			</div>
                <!------start-768px-menu---->
                <div class="header_sub">
                    <div class="h_menu">
                        <ul>
                            <?php
                            include 'tab.php';
                            print_header('Notification');
                            ?>
                        </ul>
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
<?php
include 'connection.php';
$sql = "SELECT * FROM notification  order by id desc limit 0,5";

$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {




    echo'<div class="wrapper_top">
						<div class="grid_1 alpha">
							<div class="date">
								<span>';
    $date = $row["date"];
    echo substr($date, 0, 2);
    echo'</span>';
    echo substr($date, 3);
    echo'</div>
						</div>
					 	<div class="content span_2_of_single">
						   		<h5 class="blog_tittle"><a href="pages.php">';

    echo $row["tittle"];
    echo'</a></h5><br/>
								<div class="content">
									<div class="span-1-of-2">';

    echo $row["description"];
    echo'
						 				
						 			</div>
						 			<div class="clear"> </div>
								</div>	
								<div class="links">
									
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
						</div>
						<div class="clear"> </div>
                                            </div>';
}
?>


                        </div>
                        <div class="rsidebar span_1_of_3">


                            <div class="email_box">
                                
                            </div>
                            <br>

                            <div class="popularpost">
                                <h4>Recent Notifications</h4>
                                <div class="link_1">
                                    <ul class="sidebar_1">
                                           <?php
                                        include 'connection.php';
$sql = "SELECT * FROM notification  order by id desc limit 0,5";

$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {  
                                                        
			           	  
    echo'<li><a href="#">';echo $row["tittle"];echo'</a></li>';
}
?>
                                    </ul>
                                    <div class="clear"> </div>
                                </div>
                            </div>

                            
                        </div>

                        <div class="clear"> </div>
                    </div>	
                    
                    <!----//End-content---->
                </div>
            </div>	
        </div>	
        
                
                <?php
                include_once 'footer.php';
                ?>
                </body>
                </html>