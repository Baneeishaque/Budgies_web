<?php
session_start();
?>

<!doctype html>
<html lang="en">

    <!-- Mirrored from www.eakroko.de/neat/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:24 GMT -->
    <head>
        <meta charset="utf-8">
        <title>Hafis</title>
        <meta name="description" content="">

        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/uniform.default.css">
        <link rel="stylesheet" href="css/style_neat.css">

        <script type="text/javascript">

            var t = setInterval(function () {
                get_chat_msg()
            }, 5000);


            //
            // General Ajax Call
            //

            var oxmlHttp;
            var oxmlHttpSend;

            function get_chat_msg()
            {

                if (typeof XMLHttpRequest != "undefined")
                {
                    oxmlHttp = new XMLHttpRequest();
                } else if (window.ActiveXObject)
                {
                    oxmlHttp = new ActiveXObject("Microsoft.XMLHttp");
                }
                if (oxmlHttp == null)
                {
                    alert("Browser does not support XML Http Request");
                    return;

                }
                var url = "chat_recv_ajax.php";
                var strname = "noname";
                if (document.getElementById("txtname") != null)
                {

                    strname = document.getElementById("txtname").value.substr(0, document.getElementById("txtname").value.indexOf(" "));

                    document.getElementById("txtname").readOnly = true;
                }
                url = url + "?re=" + strname;
                //window.location=url;
                oxmlHttp.onreadystatechange = get_chat_msg_result;
                oxmlHttp.open("GET", "chat_recv_ajax.php", true);
                oxmlHttp.send(null);
            }

            function get_chat_msg_result()
            {
                if (oxmlHttp.readyState == 4 || oxmlHttp.readyState == "complete")
                {
                    if (document.getElementById("DIV_CHAT") != null)
                    {
                        document.getElementById("DIV_CHAT").innerHTML = oxmlHttp.responseText;
                        oxmlHttp = null;
                    }
                    var scrollDiv = document.getElementById("DIV_CHAT");
                    scrollDiv.scrollTop = scrollDiv.scrollHeight;
                }
            }


            function set_chat_msg()
            {

                if (typeof XMLHttpRequest != "undefined")
                {
                    oxmlHttpSend = new XMLHttpRequest();
                } else if (window.ActiveXObject)
                {
                    oxmlHttpSend = new ActiveXObject("Microsoft.XMLHttp");
                }
                if (oxmlHttpSend == null)
                {
                    alert("Browser does not support XML Http Request");
                    return;
                }

                var url = "chat_send_ajax.php";
                var strname = "noname";
                var strmsg = "";
                if (document.getElementById("txtname") != null)
                {
                    strname = document.getElementById("txtname").value.substr(0, document.getElementById("txtname").value.indexOf(" "));
                    document.getElementById("txtname").readOnly = true;
                }
                if (document.getElementById("txtmsg") != null)
                {
                    strmsg = document.getElementById("txtmsg").value;
                    document.getElementById("txtmsg").value = "";
                }

                url += "?receiver=" + strname + "&msg=" + strmsg;

                oxmlHttpSend.open("GET", url, true);
                oxmlHttpSend.send(null);
            }

            function reset_chat_msg()
            {


                document.getElementById("txtmsg").value = "";
            }



        </script>
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
                        <a href="view.php">
                            <img src="img/icons/fugue/gear.png" alt="">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
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
                            <a href="chat.php" class='light'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                <span class="label label-warning">10</span>
                            </a>
                        </li>
                        <li>
                            <a href="Filelist.php" class='light'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Download files

                            </a>
                        </li>
                        <li>
                            <a href="Uploadfile.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-tasks icon-white"></i></div>
                                Departments
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href="com.html">
                                        Computer
                                    </a>
                                </li>
                                <li>
                                    <a href="mech.html">
                                        Mechanical
                                    </a>
                                </li>
                                <li>
                                    <a href="Auto.html">
                                        Automobile
                                    </a>
                                </li>

                                <li>
                                    <a href="Elec.html">
                                        Electrical
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Civil
                                    </a>
                                </li>
                                <li>
                                    <a href="Elec.html">
                                        Electronics
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="Uploadfile.php" class='light'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                Upload File

                            </a>
                        </li>
                        <li>
                            <a href="Uploadfile.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Friend List

                            </a>
                        </li>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Photo Albums
                                <img src="img/toggle-subnav-down.png" alt="">
                            </a>
                            <ul class='collapsed-nav closed'>
                                <li>
                                    <a href=".html">
                                        Profile photos
                                    </a>
                                </li>
                                <li>
                                    <a href=".html">
                                        Tagged photo
                                    </a>
                                </li>
                                <li>
                                    <a href=".html">
                                        Updated
                                    </a>
                                </li>
                                <li>
                                    <a href=".html">
                                        College pics
                                    </a>
                                </li>
                                <li>
                                    <a href=".html">
                                        other
                                    </a>
                                </li>

                            </ul>
                        <li>
                            <a href="#" class='light toggle-collapsed'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                    </ul>
                </div>


                <div class="navi">
                    <ul class='main-nav'>
                        <li class='active'>
                            <a href="chat.php" class='light'>
                                <div class="ico"><i class=""></i></div>
                                Users

                            </a>
                        </li>


                        <?php
                        $u = $_SESSION["user_id"];
                        require_once 'config.php';
                        $result = mysql_query("SELECT * FROM `student` WHERE addno!=$u");
                        //echo "SELECT * FROM `student` WHERE `Status`='OK' AND StudentID!=$u";
                        while ($row = mysql_fetch_array($result)) {


                            echo ' <li> <a href="chat.php?id=' . $row['addno'] . '" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>
                                ' . $row['name'] . '

                            </a> </li>';
                        }
                        if ($u != 0) {

                            echo ' <li> <a href="chat.php?id=0" class=\'light\'>
                                <div class="ico"><i class="icon-list icon-white"></i></div>General </a>  </li>';
                        }
                        ?>





                    </ul>
                </div>

                <div class="content">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head">
                                    <h3>Messages</h3>
                                </div>
                                <div class="box-content">
                                    <ul class="messages" id="DIV_CHAT"></ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">

                                <div class="box-content">



<?php
require_once 'config.php';
$receiver = $_GET['id'];
echo ' <td style="width: 100px"><input id="txtname" style="width: 150px" type="text" name="name" maxlength="15" value="';
if ($receiver == 0) {
    echo $receiver . ' : General';
} else {
    $result = mysql_query("SELECT * FROM `student` WHERE `addno`='$receiver'");
    $row = mysql_fetch_array($result);
    echo $receiver . ' : ' . $row['name'];
}
echo '" disabled/></td>';
?>
                                    <input id="txtmsg" style="width: 350px" type="text" name="msg" /></td>

                                    <input type="button" class="btn btn-success" value="Send" onclick="set_chat_msg()"/></td>
                                    <input type="button" class="btn btn-danger" value="Reset" onclick="reset_chat_msg()"/></td>



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
        <script src="js/jquery.uniform.min.js"></script>
        <script src="js/bootstrap.timepicker.js"></script>
        <script src="js/bootstrap.datepicker.js"></script>
        <script src="js/chosen.jquery.min.js"></script>
        <script src="js/plupload/plupload.full.js"></script>
        <script src="js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
        <script src="js/jquery.cleditor.min.js"></script>
        <script src="js/jquery.inputmask.min.js"></script>
        <script src="js/jquery.tagsinput.min.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/jquery.textareaCounter.plugin.js"></script>
        <script src="js/ui.spinner.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery.flot.js"></script>
        <script src="js/jquery.flot.pie.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/jquery.dataTables.bootstrap.js"></script> 
        <script src="js/jquery.color.js"></script>
        <script src="js/jquery.flot.resize.js"></script>
        <script src="js/jquery.flot.orderBars.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/custom.js"></script><script src="js/demo.js"></script>
    </body>

    <!-- Mirrored from www.eakroko.de/neat/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:24 GMT -->
</html>