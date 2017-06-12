
<?php
if(isset($_GET['id']))
{
    
    $vid=$_GET['id'];
    include 'connection.php';
    $sql="UPDATE `student` SET `status`=1 WHERE `addno`=$vid";
    
    $conn->query($sql);
    
    $sql="UPDATE `teachers` SET `status`=1 WHERE `id`=$vid";
    
    $conn->query($sql);
    echo '<script>alert("Blocked succesfully...!")</script> ';
}
?>
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
        
        <div class="topbar">
            <div class="container-fluid">
                <a href="dashboard.html" class='company'>Budgies</a>

                <ul class='mini'>
                    <li class='dropdown dropdown-noclose supportContainer'>
                        <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                            <img src="img/icons/fugue/book-question.png" alt="">
                            Alerts
                            <span class="label label-warning">5</span>
                        </a>
                        <ul class="dropdown-menu pull-right custom custom-dark">
                            <li class='custom'>
                                <div class="title">
                                    What is the question?
                                    <span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class='custom'>
                                <div class="title">
                                    How can i do this and that?
                                    <span>Jul 19, 2012 by <a href="#" class='pover' data-title="Username" data-content="User information comes here">Username</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class='custom'>
                                <div class="title">
                                    I want more support tickets!
                                    <span>Jul 19, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class='custom custom-hidden'>
                                <div class="title">
                                    This is a great feature, BUT...
                                    <span>Jul 18, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Ipsum</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                            <li class='custom custom-hidden'>
                                <div class="title">
                                    I want more colors! How?
                                    <span>Jul 16, 2012 by <a href="#" class='pover' data-title="Lorem" data-content="User information comes here">Lorem</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show ticket"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete ticket"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <li class='dropdown pendingContainer'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                            <img src="img/icons/fugue/document-task.png" alt="">
                            Notifications
                            <span class="label label-important">1</span>
                        </a>
                        <ul class="dropdown-menu pull-right custom custom-dark">
                            <li class='custom'>
                                <div class="title">
                                    Pending order #1 
                                    <span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show order"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Delete order"><img src="img/icons/fugue/cross.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class='dropdown messageContainer'>
                        <a href="#" class='dropdown-toggle' data-toggle='dropdown'>
                            <img src="img/icons/fugue/balloons-white.png" alt="">
                            Messages
                            <span class="label label-info">3</span>
                        </a>
                        <ul class="dropdown-menu pull-right custom custom-dark">
                            <li class='custom'>
                                <div class="title">
                                    Hello, whats your name?
                                    <span>Jul 22, 2012 by <a href="#" class='pover' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
                                </div>
                                <div class="action">
                                    <div class="btn-group">
                                        <a href="#" class='tip btn btn-mini' title="Show message"><img src="img/icons/fugue/magnifier.png" alt=""></a>
                                        <a href="#" class='tip btn btn-mini' title="Reply message"><img src="img/icons/fugue/mail-reply.png" alt=""></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/icons/fugue/gear.png" alt="">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="index-2.html">
                            <img src="img/icons/fugue/control-power.png" alt="">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="container-fluid">
                <div class="navi">
                    <ul class='main-nav'>
                        <li class='active'>
                            <a href="chat/chat.php" class='light'>
                                <div class="ico"><i class="icon-home icon-white"></i></div>
                                Chat
                                <span class="label label-warning">10</span>
                            </a>
                        </li>
                        <li>
                            <a href="Filelist.php" class='light'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files
                                <span class="label label-info">1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-th-large icon-white"></i></div>
                                Update File
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="datatables.html">
                                        Data Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="plaintables.html">
                                        Plain Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="mediatables.html">
                                        Media Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Interface Elements
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="buttons.html">
                                        Buttons & Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="sliders.html">
                                        Sliders & Progress-Bars
                                    </a>
                                </li>
                                <li>
                                    <a href="tooltips.html">
                                        Tooltips, Alerts & Notification
                                    </a>
                                </li>
                                <li>
                                    <a href="tabs.html">
                                        Tabs, Pills & Accordion
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Uploadfile.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Upload File
                                <span class="label label-important">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-exclamation-sign icon-white"></i></div>
                                Error Pages
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="403.html">
                                        403
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        404
                                    </a>
                                </li>
                                <li>
                                    <a href="500.html">
                                        500
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Sample Pages
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="gallery.html">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="messages.html">
                                        Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="userprofile.html">
                                        User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="index-2.html">
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="results.html">
                                        Search results
                                    </a>
                                </li>
                                <li>
                                    <a href="view.html">
                                        View form
                                    </a>
                                </li>
                                <li>
                                    <a href="invoice.html">
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a href="navigation_hover.html">
                                        Navigation expand on hover
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html">Calendar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-resize-full icon-white"></i></div>
                                Layouts
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="#" class='set-liquid'>
                                        Liquid
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class='set-fixed'>
                                        Fixed
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="content">








                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                    <h3>Unverified Users</h3>

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
                                                    $sql = "SELECT * FROM student where status=0 ";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {



                                                        echo'            <tr>
                                                                                                    <td>';
                                                        echo $row["name"];
                                                        echo'             </td> 
                                                                                                    <td>';
                                                        echo $row["addno"];
                                                        echo'</td>
                                                                                                     <td>';
                                                        echo $row["dept"];
                                                        echo'</td>
                                                                                                    
                                                                                                    <td> <a href="veriuser.php?id='.$row["addno"].'"><button class="btn btn-success" >verify</button></a></td>
                                                                                                     <td> <a href="view.php"><button class="btn btn-success" >view</button></a></td>
                                                                                                </tr>';
                                                    }
                                                    
                                                    $sql = "SELECT * FROM teachers where status=0 ";
                                                    $result = $conn->query($sql);
                                                    while ($row = $result->fetch_assoc()) {



                                                        echo'            <tr>
                                                                                                    <td>';
                                                        echo $row["name"];
                                                        echo'             </td> 
                                                                                                    <td>';
                                                        echo $row["id"];
                                                        echo'</td>
                                                                                                     <td>';
                                                        echo $row["dept"];
                                                        echo'</td>
                                                                                                    
                                                                                                    <td> <a href="veriuser.php?id='.$row["id"].'"><button class="btn btn-success" >verify</button></a></td>
                                                                                                     <td> <a href="view.php"><button class="btn btn-success" >view</button></a></td>
                                                                                                </tr>';
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
