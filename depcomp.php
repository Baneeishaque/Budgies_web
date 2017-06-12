
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
        <div class="style-toggler">
            <img src="img/icons/fugue/color.png" alt="" class='tip' title="Toggle style-switcher" data-placement="right">
        </div>					
        <div class="style-switcher">

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

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <li class='dropdown pendingContainer'>
                        <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                            <img src="img/icons/fugue/document-task.png" alt="">
                            Notifications
                            <span class="label label-important">5</span>
                        </a>
                        <ul class="dropdown-menu pull-right custom custom-dark">
                            <li class='custom'>
                                <?php
                                include 'connection.php';
                                $sql = "SELECT * FROM notification";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    echo '<div class="title">
							<td>';
                                    echo $row["tittle"];
                                    echo '</td>
							<span><td>';
                                    echo $row["date"];
                                    echo '</td> by <a href="#" class=\'pover\' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class=\'tip btn btn-mini\' title="Show order"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								
							</div>
                                                             </div>';
                                }
                                ?>
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
        <div class="main">
            <div class="container-fluid">
                <div class="navi">
                    <ul class='main-nav'>
                        <li class='active'>
                            <a href="studdash.php" class='light'>
                                <div href="studdash.php" class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>
                        <li >
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
                            <a href="studfilelist.php" class='light'>
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
                            <a href="blogaddstud.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                 Share Thoughts

                            </a>
                        </li>
                        <li>
                            <a href="blockedlist.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                 Blocked Contacts

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

                    <div class="row-fluid no-margin">

                    </div>




                    <div class="span10">
                      <div class="row-fluid printable no-margin">
			<div class="span12">
				<div class="box">
					<div class="box-head">
						<h3>Printable invoice</h3>
						<div class="actions">
							<ul>
								<li>
									<a href="#" class='btn btn-mini tip' title="Print this invoice">
										<img src="img/icons/fugue/printer.png" alt="">
									</a>
								</li>
							</ul>	
						</div>
					</div>
					<div class="box-content">
						<div class="invoice">
							<div class="invoice-name">
								BUDGIES
							</div>
							<div class="invoice-company">
								<h2>AUTOMOBILE</h2>
							</div>
							<div class="invoice-from">
								
                                                                
                                                                <img src="profile/Tulips.jpg" alt="" height="220px" width="220px">
                                                                
                                                                 
							</div>
							<div class="invoice-to">
								<strong>Max Mustermann</strong>
								<address>
									Street Address <br>
									City, ST ZIP Code <br>
									<abbr title="Phone">Phone:</abbr> (125) 358123-581 <br>
									<abbr title="Fax">Fax:</abbr> (125) 251656-222 
								</address>
							</div>
							<div class="invoice-infos">
								<table>
									<tr>
										<th>Date:</th>
										<td>Aug 06, 2012</td>
									</tr>
									<tr>
										<th>Invoice #:</th>
										<td>0001752188s</td>
									</tr>
									<tr>
										<th>Product:</th>
										<td>Service Hotline</td>
									</tr>
								</table>
							</div>
							
							<div class="invoice-footer">
								<h4>COMPANY NAME</h4>
								<address>
									Street Address <br>
									City, ST ZIP Code <br>
									<abbr title="Phone">Phone:</abbr> (125) 358123-581 
									<abbr title="Fax">Fax:</abbr> (125) 251656-222 
								</address>
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

                            <!-- Mirrored from www.eakroko.de/neat/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:13 GMT -->
                            </html>