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
        session_start();
        $u = $_SESSION["user_id"];
        include_once 'topbar.php';
        if (isset($_GET["id"])) {
            $cat = $_GET["cat"];
            $bid = $_GET["id"];
            require_once('config.php');
            $sql = "INSERT INTO `block`(`partner1`, `partner2`, `cat`) VALUES ($u,$bid,'$cat')";
            mysql_query($sql) or die(mysql_error());
            echo '<script>alert("Blocked succesfully...!")</script> ';
        }
        ?>

        <div class="main">
            <div class="container-fluid">
                <?php
                include_once 'teachtab.php';
                print_header('Blocked Contacts');
                ?>
                <div class="content">








                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                    <h3>Budgies you have blocked</h3>

                                </div>
                                <div class="box-content box-nomargin">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic">
                                            <table class='table table-striped table-bordered'>
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Admission No</th>
                                                        <th>Department</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <?php
                                                    include 'connection.php';
                                                    $sql = "SELECT * FROM block where partner1=$u ";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {

                                                        $cat = $row["cat"];
                                                        if ($cat == "Teacher") {
                                                            $sql = "select * from teachers where id=" . $row["partner2"];
                                                            $result2 = $conn->query($sql);
                                                            $row2 = $result2->fetch_assoc();


                                                            echo'            <tr>
                                                                                                    <td>';
                                                            echo $row2["name"];
                                                            echo'             </td> 
                                                                                                    <td>';
                                                            echo $row2["id"];
                                                            echo'</td>
                                                                                                     <td>';
                                                            echo $row2["dept"];
                                                            echo'</td>
                                                                                                    
                                                                                                    <td> <a href="unblock.php?id=' . $row2["id"] . '"><button class="btn btn-success" >Unblock</button></a></td>
                                                                                                     <td> <a href="teachprofileview.php?id=' . $row2["id"] . '"><button class="btn btn-success" >view</button></a></td>
                                                                                                </tr>';
                                                        }
                                                        if ($cat == "Student") {
                                                            $sql = "select * from student where addno=" . $row["partner2"];

                                                            $result2 = $conn->query($sql);
                                                            while ($row2 = $result2->fetch_assoc()) {


                                                                echo'            <tr>
                                                                                                    <td>';
                                                                echo $row2["name"];
                                                                echo'             </td> 
                                                                                                    <td>';
                                                                echo $row2["addno"];
                                                                echo'</td>
                                                                                                     <td>';
                                                                echo $row2["dept"];
                                                                echo'</td>
                                                                                                    
                                                                                                    <td> <a href="unblock.php?id=' . $row2["addno"] . '"><button class="btn btn-success" >Unblock</button></a></td>
                                                                                                     <td> <a href="studentprofileview.php?id=' . $row2["addno"] . '"><button class="btn btn-success" >view</button></a></td>
                                                                                                </tr>';
                                                            }
                                                        }
                                                    }
                                                    ?>

                                                </thead>

                                                <tbody>




                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="box">





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

                                <!-- Mirrored from www.eakroko.de/neat/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:13 GMT -->
                                </html><!DOCTYPE html>
                                <!--
                                To change this license header, choose License Headers in Project Properties.
                                To change this template file, choose Tools | Templates
                                and open the template in the editor.
                                -->
                                <html>
                                    <head>
                                        <title>TODO supply a title</title>
                                        <meta charset="UTF-8">
                                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    </head>

                                </html>
