<!doctype html>
<html lang="en">

<!-- Mirrored from www.eakroko.de/neat/results.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:11 GMT -->
<head>
<meta charset="utf-8">
<title>Budgies</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/uniform.default.css">
<link rel="stylesheet" href="css/style_neat.css">
</head>
<body>

        <?php
        include_once 'topbar.php';
        ?>

<div class="main">
	<div class="container-fluid">
	<div class="navi">
                    <ul class='main-nav'>
                        <li >
                            <a href="teachdash.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Home

                            </a>
                        </li>	

                        <li>
                            <a href="teachprofile.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Profile

                            </a>
                        </li>
                        <li >
                            <a href="chat_update.php?id=0" class='light'>
                                <div class="ico"><i class=""></i></div>
                                Chat
                                <span class="label label-warning">10</span>
                            </a>
                        </li>

                        <li>
                            <a href="addnotif2.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Update Notification

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
                            <a href="" class='light'>
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
                            <a href="blockedlist.php" class='light'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Blocked Contacts
                            </a>
                        </li>

                        <li>
                            <a href="blogaddteach.php" class='light'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                Share Thoughts
                            </a>
                        </li>

                         <li>
                            <a href="dfile.php" class='light'>
                                <div class="ico"><i class="icon-book icon-white"></i></div>
                                My Files
                            </a>
                        </li>
                        <li class="active">
                            <a href="teachprofile.php" class='light'>
                                <div class="ico"><i class="icon-signal icon-white"></i></div>
                                Sports

                            </a>
                        </li>




                    </ul>
                </div>
            <br><br>
	<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-head">
							<h3><img src="sports/u.jpg" alt=""></h3>
						</div>
						<div class="box-content">
							<div class="row-fluid force-margin">
                                                            <form  action="register.php" method="POST" >
								<div class="span6">
									<h4>Registration </h4><br>
									<div class="control-group">
										
										<div class="controls">
											Enter name <input type="text" name="basic" id="basic" class='input-square'>
										</div>
									</div>
									<div class="control-group">
										
										<div class="controls">
											Enter ID no <input type="text" name="idno" id="basic" class='input-square'>
										</div>
									</div>
                                                                        <div class="controls">
											Department 
											<select name="dept">
                                                                                            
                                                                        <option>Computer</option>
                                                                        <option>Automobile</option>
                                                                        <option>Mechanical</option>
                                                                        <option>Electronics</option>
                                                                        <option>Civil</option>
                                                                        <option>Electrical</option>
                                                                        
                                                                </select>       
                                                                                        
                                                                                        Semester<select name="sem" id="select2" class="uniform" style="opacity: 0;">
														<option value="1">Sem 1</option>
														<option value="2">Sem 2</option>
														<option value="3">Sem 3</option>
														<option value="4">Sem 4</option>
														<option value="5">Sem 5</option>
                                                                                                                <option value="6">Sem 6</option>
                                                                                        </select>
										</div>
                                                                        <br>
									 <div class="control-group">Gender
                                                                                        
											Male <input type="radio"name="gen" value="male" />
                                                                                        Female <input type="radio"name="gen" value="female" />
                                                                                       
                                                                         </div>
                                                                        <div class="control-group">
										<label for="basic" class="control-label">Add Items</label>
										<div class="controls">1
											<select name="type1">
                                                                                            
                                                                        <option>Select</option>
                                                                        <option>100 M</option>
                                                                        <option>200 M</option>
                                                                        <option>400 M</option>
                                                                        <option>800 M</option>
                                                                        <option>1500 M</option>
                                                                        <option>5000 M</option>
                                                                        <option>10000 M</option>
                                                                        <option>Long Jumb</option>
                                                                        <option>High Jumb</option>
                                                                        <option>Tripple Jumb</option>
                                                                        <option>Pole Vault</option>
                                                                        <option>Shot Put</option>
                                                                        <option>Discuss Throw</option>
                                                                        <option>Javelin Throw</option>
                                                                        <option>Hammer Throw</option>
                                                                        
                                                                </select>       
										</div>
                                                                                <div class="controls">2
											<select name="type2">
                                                                                            
                                                                        <option>Select</option>
                                                                        <option>100 M</option>
                                                                        <option>200 M</option>
                                                                        <option>400 M</option>
                                                                        <option>800 M</option>
                                                                        <option>1500 M</option>
                                                                        <option>5000 M</option>
                                                                        <option>10000 M</option>
                                                                        <option>Long Jumb</option>
                                                                        <option>High Jumb</option>
                                                                        <option>Tripple Jumb</option>
                                                                        <option>Pole Vault</option>
                                                                        <option>Shot Put</option>
                                                                        <option>Discuss Throw</option>
                                                                        <option>Javelin Throw</option>
                                                                        <option>Hammer Throw</option>
                                                                        
                                                                </select>       
										</div>
                                                                                <div class="controls">3
											<select name="type3">
                                                                                            
                                                                        <option>Select</option>
                                                                        <option>100 M</option>
                                                                        <option>200 M</option>
                                                                        <option>400 M</option>
                                                                        <option>800 M</option>
                                                                        <option>1500 M</option>
                                                                        <option>5000 M</option>
                                                                        <option>10000 M</option>
                                                                        <option>Long Jumb</option>
                                                                        <option>High Jumb</option>
                                                                        <option>Tripple Jumb</option>
                                                                        <option>Pole Vault</option>
                                                                        <option>Shot Put</option>
                                                                        <option>Discuss Throw</option>
                                                                        <option>Javelin Throw</option>
                                                                        <option>Hammer Throw</option>
                                                                        
                                                                </select>       
										</div>
                                                                                </div>
                                                                         <br>
                                                                         
                                                                                <div class="controls"><b>upload your photo</b> <input type="file" 
                                                                                name="file" id="file2" class='uniform'><br>
                                                                                </div>
                                                                                <img src="sports/100.gif" alt="">
								</div>
								
                                                                    <div class="span6">
									<div class="pull-left">
								<h3>  </h3>
								<img src="sports/logo.jpg" alt="">
                                                            </div>
                                                                        
								</div>
                                                            <div class="span6">
                                                                
                                                                <br><br><br>
                                                                <a href="sportsmodify.php" button class="btn btn-primary" type="submit">Modify</button> </a>
                                                                 <button class="btn btn-success">Submit</button>
                                                                   </br></br></br>
                                                            </div>
							
                                                    </form>
                                                            </div>
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

<!-- Mirrored from www.eakroko.de/neat/results.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:11 GMT -->
</html>