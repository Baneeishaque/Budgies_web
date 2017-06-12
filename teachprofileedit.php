<?php
session_start();
include_once 'security_check.php';
?>
<!doctype html>
<html lang="en">

    <!-- Mirrored from www.eakroko.de/neat/view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:11 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Budgies</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/style_neat.css" media="all">
    </head>
    <body>
        <div class="style-toggler">
            <img src="img/icons/fugue/color.png" alt="" class='tip' title="Toggle style-switcher" data-placement="right">
        </div>					
        <div class="style-switcher">
            <h3>Style-switcher</h3>
            <ul class='color'>
                <li>
                    <a href="#" class='style'>Default</a>
                </li>
                <li>
                    <a href="#" class='blue'>Blue</a>
                </li>
                <li>
                    <a href="#" class='green'>Green</a>
                </li>
                <li>
                    <a href="#" class='red'>Red</a>
                </li>
            </ul>
            <h3>Pattern-switcher</h3>
            <ul class='pattern'>
                <li>
                    <a href="#" class='default'>Default</a>
                </li>
                <li>
                    <a href="#" class='dark'>Dark wood</a>
                </li>
                <li><a href="#" class='light'>Light</a></li>
                <li><a href="#" class='wood'>Wood</a></li>
                <li><a href="#" class='retina-wood'>Retina-wood</a></li>
                <li><a href="#" class='linen'>Linen</a></li>
                <li><a href="#" class='paper'>Paper</a></li>
            </ul>
        </div>
        <?php
        include_once 'topbar.php';
        ?>
        <div class="breadcrumbs">
            <div class="container-fluid">
                <ul class="bread pull-left">
                    <li>
                        <a href="dashboard.html"><i class="icon-home icon-white"></i></a>
                    </li>
                    <li>
                        <a href="dashboard.html">
                            Dashboard
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="main">
            <div class="container-fluid">
                 <?php
                include_once 'teachtab.php';
                print_header('Profile');
                ?>
                <div class="content">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head">
                                    <h3>Profile</h3>
                                </div>
                                <div class="box-content">
                                    <div class="cl">
                                        <div class="pull-left">
                                            <h3><?php
                                                //echo $_SESSION["user_id"];
                                                $uid = $_SESSION["user_id"];
                                                include 'connection.php';
                                                $sql = "SELECT * FROM teachers where id='$uid'";
                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                ?>
                                                <?php
                                                echo $row["name"]
                                                ?>
                                            </h3>
                                            <img src="images/<?php
                                                echo $row["propic"]
                                                ?>" alt="">

                                        </div>
                                        <div class="details pull-left userprofile">
                                            <table >
                                                <br></br>
                                                <tr>
                                                <h4><?php
                                            echo $row["dept"]
                                                ?> <h4>

                                                        </tr>
                                                        <tr>
                                                            <td> <span class="label label-warning">Teacher</span></td>
                                                        </tr>


                                                        <tr>
                                                            <th>Last seen:</th>
                                                            <td>21-11-2015</td>

                                                        </tr>
                                                        </table>

                                                        <div class="navi">
                                                            <ul class='main-nav'>
                                                                <li class='active'>
                                                                    <a href="chat.php?id=0" class='light'>
                                                                        Message

                                                                    </a>
                                                                </li>
                                                        </div>
                                                        <div class="navi">
                                                            <ul class='main-nav'>
                                                                <li class='active'>
                                                                    <a href="blockedlist.php" class='light'>
                                                                        BLOCK

                                                                    </a>
                                                                </li>
                                                        </div>


                                                        </div>
                                                        </div>
                                                        <h3 class='divide'>Basic information</h3>
                                                        <table class="table table-striped table-detail">

                                                            <tr>
                                                                <th>Mobile :</th>
                                                                <td><input type="text" name="mobile" value="<?php
                                                    echo $row["mobile_no"]
                                                ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email :</th>
                                                                <td><input type="text" name="email" value="<?php
                                                    echo $row["email"]
                                                ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Home Town :</th>
                                                                <td><input type="text" name="home" value="<?php
                                                    echo $row["home_town"]
                                                ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Education :</th>
                                                                <td><input type="text" name="edu" value="<?php
                                                    echo $row["education"]
                                                ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Date of birth :</th>
                                                                <td><input type="text" name="dob"value="<?php
                                                    echo $row["date_of_birth"]
                                                ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Hobby :</th>
                                                                <td><input type="text" name="hobby" value="<?php
                                                    echo $row["hobby"]
                                                ?>"></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Bio :</th>
                                                                <td><input type="text" name="bio" value="<?php
                                                    echo $row["bio"]
                                                ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Gender :</th>
                                                                <td><input type="text" name="gender" value="<?php
                                                    echo $row["gender"]
                                                ?>"></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Favourite Quote :</th>
                                                                <td><input type="text"fquote name="" value="<?php
                                                    echo $row["fqoute"]
                                                ?>"></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Role Model :</th>
                                                                <td><input type="text" name="role" value="<?php
                                                    echo $row["role_model"]
                                                ?>"></td>
                                                            </tr>
                             <tr>
                                                                <th> <ul class='main-nav'>
                                                                <li class='active'>
                                                                    <a href="blockedlist.php" class='light'>
                                                                        SAVE CHANGES

                                                                    </a>
                                                                </li></ul> </th>
                                                                <td></td>
                                                            </tr>
                        
                       

                                                        </table>
                                                        <h3 class="divide">Username Gallery</h3>
                                                        <ul class="gallery">
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                            <li>
                                                                <a href="img/sample/500.gif" class="preview fancy"><img src="img/sample/100.gif" alt=""></a>
                                                            </li>
                                                        </ul>
                                                        </div>
                                                        </div>
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

                                                        <!-- Mirrored from www.eakroko.de/neat/view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:12 GMT -->
                                                        </html>
