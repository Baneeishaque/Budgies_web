
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    items: 4,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: true,
                    navigationText: ["", ""],
                    rewindNav: false,
                    scrollPerPage: false,
                    pagination: false,
                    paginationNumbers: false,
                });
            });
        </script>
        <!-- //Owl Carousel Assets -->
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
        <!----//End-img-cursual---->
    </div>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('#nivo-lightbox-demo a').nivoLightbox({effect: 'fade'});
            });
    </script>

</div>
</div>

<div class="get_in_touch"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">Sign-Up here (Teachers)</h5>
        <div class="get-right">
            <form enctype="multipart/form-data" action="signup-teacher-action.php" method="POST">
                <ul>
                    <li class="name">
                        <a href="#" class="icon user"> </a>
                        <input type="text" placeholder="Your name" required="" name="name">
                        <div class="clear"> </div>
                    </li>
                    <li class="id">

                        <input type="text" placeholder="Your id Number" required="" name="id">
                        <div class="clear"> </div>
                    </li> 
                    <li class="dept">


                        <select name="department">
                            <option>Select your department</option>
                            <option>Civil</option>
                            <option>Mechanical</option>
                            <option>Automobile</option>
                            <option>Electrical</option>
                            <option>Electronics</option>
                            <option>Computer</option>
                        </select>
                        <div class="clear"> </div>
                    </li> 
                    <li class="mailid">

                        <input type="text" placeholder="Enter your email" required="" name="mail">
                        <div class="clear"> </div>
                    </li> 
                    <select name="qualification">
                        <option> Select qualification</option>
                        <option>B-tech</option>
                        <option>M-tech</option>
                        <option>Diploma</option>
                        <option>ITI</option>
                        <option>Other</option>

                    </select>                                                
                    <li class="uname">

                        <input type="text" placeholder="Choose an Username" required="" name="username">
                        <div class="clear"> </div>
                    </li> 
                    <li class="password">

                        <input type="password" placeholder="password" required="" name="password">
                        <div class="clear"> </div>
                    </li> 

                    <li class="confirm">

                        <input type="password" placeholder="Confirm password" required=""name="cpassword" >
                        <div class="clear"> </div>
                    </li> 
                    <li class="confirm">

                        <label for="file2" class="control-label">Upload Profile pic</label>

                        <div class="controls"> <input type="file" name="profile" class='uniform'>
                        </div>
                    </li> 

                    <div class="clear"> </div>

                    <input class="send" type="submit" value="Create" />
                    <input class="send" type="submit" value="cancel" />

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

<div class="clear">
    <?php
    include_once 'footer.php';
    ?>
</div>
</body>
</html>