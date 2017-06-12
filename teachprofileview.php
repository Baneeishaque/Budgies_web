
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

        <?php
        include_once 'topbar.php';
        ?>

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
                                                $uid = $_GET["id"];
                                                include 'connection.php';
                                                $sql = "SELECT * FROM teachers where id=$uid";
                                                //echo $sql;
                                                $result = $conn->query($sql);
                                                $row = $result->fetch_assoc();
                                                ?>
                                                <?php
                                                echo $row["name"]
                                                ?>
                                            </h3>
                                            <img src="profile/<?php
                                            echo $row["propic"]
                                            ?>" alt="" height="220px" width="220px">

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



                                                        </table>

                                                       <div class="navi">
                                                            <ul class='main-nav'>
                                                                <li class='active'>
                                                                    <?php
                                                                    echo '<a href="chat_update.php?id='.$uid.'" class=\'light\'>
                                                                        Message

                                                                    </a>';
                                                                            ?>
                                                                </li>
                                                        </div>
                                                        <div class="navi">
                                                            <ul class='main-nav'>
                                                                <li class='active'>
                                                                    <?php
                                                                    echo '<a href="blockedlist.php?cat=Teacher&id='.$uid.'" class=\'light\'>
                                                                        BLOCK

                                                                    </a>';
                                                                    ?>
                                                                </li>
                                                        </div>


                                                        </div>
                                                        </div>
                                                        <h3 class='divide'>Basic information</h3>
                                                        <table class="table table-striped table-detail">

                                                            <tr>
                                                                <th>Mobile :</th>
                                                                <td><?php
                                                                    echo $row["mobile_no"]
                                                                    ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Email:</th>
                                                                <td>
                                                                    <?php
                                                                    echo $row["email"]
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Home town:</th>
                                                                <td><?php
                                                                    echo $row["home_town"]
                                                                    ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Education :</th>
                                                                <td><?php
                                                                    echo $row["education"]
                                                                    ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Date of birth :</th>
                                                                <td><?php
                                                                    echo $row["date_of_birth"]
                                                                    ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Hobby :</th>
                                                                <td><?php
                                                                    echo $row["hobby"]
                                                                    ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Bio :</th>
                                                                <td><?php
                                                                    echo $row["bio"]
                                                                    ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Gender :</th>
                                                                <td><?php
                                                                    echo $row["gender"]
                                                                    ?></td>
                                                            </tr>

                                                            <tr>
                                                                <th>Favourite quote :</th>
                                                                <td><?php
                                                                    echo $row["fqoute"]
                                                                    ?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Role model :</th>
                                                                <td><?php
                                                                    echo $row["role_model"]
                                                                    ?></td>
                                                            </tr>

                                                        </table>
                                                        <h3 class="divide">User Gallery</h3>
                                                        <ul class="gallery">
                                                            <?php
                                                            include 'connection.php';
                                                            $sql = "SELECT * FROM forum where provider=$uid";
                                                            $result = $conn->query($sql);
                                                            while ($row = $result->fetch_assoc()) {
                                                                echo '<li>
                                                                <a href="forum/' . $row["image"] . '" class="preview fancy"><img src="forum/' . $row["image"] . '" width="100px" height="100px" alt=""></a>
                                                            </li>';
                                                            }
                                                            ?>


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
