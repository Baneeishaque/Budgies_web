<html>
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
                                <h3>SSM POLYTECHNIC COLLEGE TIRUR</h3>
                                <span>Budgies</span>
                            </div>
                        </li>
                        <li>
                            <a href="#slide2">
                            </a>
                            <div data-scroll-reveal="enter bottom but wait 1s" class="slider-detils">
                                <h3>Computer department</h3>
                                <span>Budgies</span>
                            </div>
                        </li>
                        <li>
                            <a href="#slide3">
                            </a>
                            <div data-scroll-reveal="enter bottom but wait 1.5s" class="slider-detils">
                                <h3>BACK BENCHERS </h3>
                                <span>Budgies</span>
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
            <h4>This is a project done by students of SSM polytechnic college Tirur</h4>

        </div>
    </div>
    <div class="Recent-wroks"><!-- start services -->
        <div class="wrap">
            <div class="Recent-wrok">
                <h5 class="heading">Recent Posts</h5>
                <!----start-img-cursual---->
                <div id="owl-demo" class="owl-carousel">
                    <?php
                    include 'connection.php';
                    $sql = "SELECT * FROM forum  order by id desc";

                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="item">
							<div class="cau_left">
								<div id="nivo-lightbox-demo"> <p> <a href="images/';
                        echo $row["image"];

                        echo '"  data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
								<img src="forum/';
                        echo $row["image"];
                        echo '"></div>
							<div class="cau_left">
								
								<p>';
                        echo $row["description"];
                        echo'	</p>
							</div>
						</div>';
                    }
                    ?>
                </div>
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

    <div class="testimonial"><!-- start last_posts -->
        <div class="wrap">
            <h5 class="heading">Recent Notifications</h5>
            <div class="test-grids">
                <div class="test-desc">
                    <ul class="sidebar_1">

                        <?php
                        include 'connection.php';
                        $sql = "SELECT * FROM notification  order by id desc limit 0,5";

                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {


                            echo'<li><a href="#">';
                            echo $row["tittle"];
                            echo'</a></li>';
                        }
                        ?>
                    </ul>
                </div>

                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <div class="get_in_touch"><!-- start last_posts -->
        <div class="wrap">
            <h5 class="heading">Get in Touch</h5>
            <div class="get-left">
                <h4>BUDGIES</h4>
                <p>Ssm polytechnic college</p>
                <p>TiruR</p>
                <p>(401) 1234 567</p>
                <p><a href="mailto:hello@budgies.com">hello@budgies.com</a></p>
            </div>
            <div class="get-right">
                <form action="mailto:hello@budgies.com">
                    <ul>
                        <li class="name">
                            <a href="#" class="icon user"> </a>
                            <input type="text" placeholder="Your name" required="">
                            <div class="clear"> </div>
                        </li> 
                        <li class="email_1">
                            <a href="#" class="icon mail"> </a>
                            <input type="email" placeholder="yourname@email.com" required="">
                            <div class="clear"> </div>
                        </li> 
                        <div class="clear"> </div>
                        <li>
                            <textarea name="textarea" class="plain buffer" placeholder="Your text here"></textarea>
                        </li>
                        <input class="send" type="submit" value="Send" />

                    </ul>
                </form>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <?php
    include_once 'footer.php';
    ?>
</body>
</html>