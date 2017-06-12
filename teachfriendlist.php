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
        session_start();
        include_once 'topbar.php';
        ?>

        <div class="main">
            <div class="container-fluid">
                <?php
                include_once 'teachtab.php';
                print_header('Friend List');
                ?>
                <div class="content">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head">
                                    <h3>Friends List</h3>
                                </div>
                                <div class="box-content">
                                    <div class="cl">


                                        <!-- <input type="text" aria-controls="DataTables_Table_0" placeholder="Search here..."><br><button class="btn btn-primary" type="submit">Search</button> -->
                                        <ul class="gallery">
                                            <?php
                                            require_once 'config.php';
                                            $u = $_SESSION["user_id"];
                                            $result = mysql_query("SELECT * FROM `student` WHERE addno!=$u");
                                            //echo "SELECT * FROM `student` WHERE `Status`='OK' AND StudentID!=$u";
                                            while ($row = mysql_fetch_array($result)) {

                                                //echo $row["addno"];
                                                $bsql = "SELECT * FROM `block` WHERE partner1=$u and partner2=" . $row['addno'];
                                                $bresult = mysql_query($bsql);
                                                $brow = mysql_fetch_array($bresult);
                                                $bc = $brow["id"];
                                                if ($bc == null) {
                                                    echo ' <li>
                                                <a href="studentprofileview.php?id=' . $row["addno"] . '" ><img src="profile/' . $row['propic'] . '" alt="" width="100" height="100"></a><br>
                                                <b>' . $row['name'] . '</b></br>
                                            </li>';
                                                }
                                            }

                                            $result = mysql_query("SELECT * FROM `teachers` WHERE id!=$u");
                                            //echo "SELECT * FROM `teachers` WHERE id!=$u";
                                            //echo "SELECT * FROM `student` WHERE `Status`='OK' AND StudentID!=$u";
                                            while ($row = mysql_fetch_array($result)) {

                                                $bsql = "SELECT * FROM `block` WHERE partner1=$u and partner2=" . $row['id'];
                                                $bresult = mysql_query($bsql);
                                                $brow = mysql_fetch_array($bresult);
                                                $bc = $brow["id"];
                                                if ($bc == null) {
                                                    //echo $row["id"];
                                                    echo ' <li>
                                                <a href="teachprofileview.php?id=' . $row["id"] . '" ><img src="profile/' . $row['propic'] . '" alt="" width="100" height="100"></a><br>
                                                <b>' . $row['name'] . '</b></br>
                                            </li>';
                                                }
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