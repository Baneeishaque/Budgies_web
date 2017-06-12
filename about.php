
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
                            include_once 'tab.php';
                            print_header('About us');
                            ?>
                        </ul>
                    </div>

                    <div class="clear"> </div>
                </div>
            </div>
        </div>
        <!-----end-header-------->
        <!----start-content--->
        <div class="content_1">
            <div class="wrap">
                <div class="about">
                    <div class="about-top">
                        <div class="col span_1_of_about">
                            <h3 class="heading">About</h3>
                            <div class="section group">
                                <div class="grid_1_of_4 images_1_of_4">
                                    <div class="image"><a href="#"><img src="images/jamshi.jpg"></a></div>
                                    <h4><a href="#">Jamshi ks</a> </h4>
                                    <h6>Creative head</h6>
                                    <p>Member of the group</p>
                                </div>
                                <div class="grid_1_of_4 images_1_of_4">
                                    <div class="image"><a href="#"><img src="images/manu.jpg"></a></div>
                                    <h4><a href="#">Manu Krishnan</a></h4>
                                    <h6>Founder</h6>
                                    <p>Member of the group</p>
                                </div>
                                <div class="grid_1_of_4 images_1_of_4">
                                    <div class="image"><a href="#"><img src="images/jafar.jpg"></a></div>
                                    <h4><a href="#">Jafar Ali</a> </h4>
                                    <h6>CEO</h6>
                                    <p>Member of the group</p>
                                </div>
                                <div class="grid_1_of_4 images_1_of_4">
                                    <div class="image"><a href="#"><img src="images/hafis.jpg"></a></div>
                                    <h4><a href="#">Hafis</a> </h4>
                                    <h6>Managing Director</h6>
                                    <p>Member of the group</p>
                                </div>
                                <div class="grid_1_of_4 images_1_of_4">
                                    <div class="image"><a href="#"><img src="images/suhail.jpg"></a></div>
                                    <h4><a href="#">Suhail </a> </h4>
                                    <h6>Logical Instructor</h6>
                                    <p>Member of the group</p>
                                </div><div class="grid_1_of_4 images_1_of_4">
                                    <div class="image"><a href="#"><img src="images/bow.jpg"></a></div>
                                    <h4><a href="#">SaleeeM SiR</a> </h4>
                                    <h6>Instructor</h6>
                                    <p>Member of the group</p>
                                </div>
                                <div class="clear"> </div>
                            </div>
                        </div>
                        <div class="col span_1_of_about1">
                            <h3 class="heading">Who we are...</h3>
                            <ul class="comments-custom unstyled">			
                                <li class="comments-custom_li">

                                    <img src="images/img.jpg" title="name">

                                    <p>Member of the group.</p>
                                    <p>who tied up togather for making the project budgies</p>
                                </li>

                        </div>
                        <div class="clear"> </div>
                        </li>
                        </ul>
                    </div>

                    <div class="clear"> </div>
                </div>
                <div class="clear"></div> 
            </div>
        </div>



        <?php
        include_once 'footer.php';
        ?>
    </body>
</html>