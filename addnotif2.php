<!doctype html>
<html lang="en">

    <!-- Mirrored from www.eakroko.de/neat/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:11:59 GMT -->
    <head>
        <meta charset="utf-8">
        <title>budgies</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/style_neat.css">
    </head>
    <body>

        <?php
        include_once 'topbar.php';
        ?>
        <div class="main">
            <div class="container-fluid">
                <?php
                include_once 'teachtab.php';
                print_header('Update Notification');
                ?>
                <div class="content">
                    <br>		







                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                    <h3>Update notification</h3>

                                </div>
                                <div class="get_in_touch"><!-- start last_posts -->
                                    <div class="wrap">
                                        <div class="get-right">
                                            <form action="addnotifaction.php" methode="POST">
                                                <ul>
                                                    <br>
                                                   
                                                        <a href="#" class="icon user"> </a>
                                                        <input type="text" placeholder="Title" required="" name="title" >
                                                        <div class="clear"> </div>

                                                        
                                                            <a href="#" class="icon mail"> </a>
                                                            Date :
                                                            <?php echo date("d/m/Y") ?>
                                                            <div class="clear"> </div>

                                                            <select name="category" >
                                                                <option>General</option>
                                                                <option>Hostel</option>
                                                                <option>Computer</option>
                                                                <option>Mechanical</option>
                                                                <option>Automobile</option>
                                                                <option>Electrical</option>
                                                                <option>Civil</option>
                                                                <option>Electronics</option>
                                                            </select>
                                                            <div class="clear"> </div>

                                                            <textarea name="description" class="plain buffer" placeholder="Description" style="margin-left: 0px; margin-right: 0px; width: 483px; margin-top: 0px; margin-bottom: 9px; height: 172px; "></textarea>

                                                            <div class="clear"> </div>
                                                            <input class="send" type="submit" value="Update" />

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

                                                            </div>

                                                            </div>
                                                            </div>



                                                            <script src="js/jquery.js"></script>
                                                            <script src="js/less.js"></script>
                                                            <script src="js/bootstrap.min.js"></script>
                                                            <script src="js/jquery.peity.js"></script>
                                                            <script src="js/jquery.fancybox.js"></script>
                                                            <script src="js/jquery.flot.js"></script>
                                                            <script src="js/jquery.color.js"></script>
                                                            <script src="js/jquery.flot.resize.js"></script>
                                                            <script src="js/jquery.cookie.js"></script>
                                                            <script src="js/jquery.cookie.js"></script>
                                                            <script src="js/custom.js"></script><script src="js/demo.js"></script>
                                                            </body>

                                                            
                                                            </html>
