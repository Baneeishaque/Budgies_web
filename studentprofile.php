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
<div class="topbar">
	<div class="container-fluid">
		<a href="studdash.php" class='company'>Budgies</a>
		
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
                            <a href="index.php">
					<img src="img/icons/fugue/control-power.png" alt="">
					Logout
				</a>
			</li>
		</ul>
	</div>
</div>
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
	<div class="navi">
		<ul class='main-nav'>
			<li>
                            <a href="studdash.php" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Home
					
				</a>
			</li>
                         <li class='active'>
                            <a href="studentprofile.php" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Profile
					
				</a>
			</li>
                        <li >
				<a href="studchat.php?id=0" class='light'>
					<div class="ico"><i class=""></i></div>
					Chat
					<span class="label label-warning">10</span>
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
                            <a href="Filelist.php" class='light'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					Download files
					
				</a>
			</li>
			
			
			<li>
                            <a href="Uploadfile.php" class='light'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					Upload File
					
				</a>
			</li>
						<li>
                                                    <a href="friendlist.php" class='light'>
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
				<a href="blockedlist.php" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					Blocked Contacts
				</a>
			</li>
                        
                         <li>
				<a href="blogadd.php" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					Share Thoughts
				</a>
			</li>
                        
                        <li>
				<a href="dfile.php" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					My Files
				</a>
			</li>
                        
                        
                        
                        
			
		</ul>
	</div>
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
                                            $uid=$_SESSION["user_id"];
                                            include 'connection.php';
                                                             $sql="SELECT * FROM student where addno='$uid'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
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
                                                            <td> <span class="label label-warning">Student</span></td>
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
