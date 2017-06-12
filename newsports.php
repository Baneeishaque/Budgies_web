<!doctype html>
<html lang="en">

<!-- Mirrored from www.eakroko.de/neat/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:13 GMT -->
<head>
<meta charset="utf-8">
<title>Budgies</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/uniform.default.css">
<link rel="stylesheet" href="css/bootstrap.datepicker.css">
<link rel="stylesheet" href="css/jquery.cleditor.css">
<link rel="stylesheet" href="css/jquery.plupload.queue.css">
<link rel="stylesheet" href="css/jquery.tagsinput.css">
<link rel="stylesheet" href="css/jquery.ui.plupload.css">
<link rel="stylesheet" href="css/chosen.css">
<link rel="stylesheet" href="css/jquery.jgrowl.css">
<link rel="stylesheet" href="css/style_neat.css">
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
		<a href="dashboard.php" class='company'>Budgies</a>
		
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
                                                             $sql="SELECT * FROM notification";
                                                             $result = $conn->query($sql);
                                                             while($row=$result->fetch_assoc()){
						echo '<div class="title">
							<td>'; echo $row["tittle"];echo '</td>
							<span><td>'; echo $row["date"];echo '</td> by <a href="#" class=\'pover\' data-title="Hover me" data-content="User information comes here">Hover me</a></span>
						</div>
						<div class="action">
							<div class="btn-group">
								<a href="#" class=\'tip btn btn-mini\' title="Show order"><img src="img/icons/fugue/magnifier.png" alt=""></a>
								
							</div>
                                                             </div>';}
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
<div class="breadcrumbs">
	<div class="container-fluid">
		<ul class="bread pull-left">
			<li>
				<a href="dashboard.php"><i class="icon-home icon-white"></i></a>
			</li>
			<li>
				<a href="dashboard.php">
					Dashboard
				</a>
			</li>
		</ul>

	</div>
</div><div class="main">
	<div class="container-fluid">
	<div class="navi">
		<ul class='main-nav'>
			<li class='active'>
				<a href="chat.php?id=0" class='light'>
					<div class="ico"><i class=""></i></div>
					Chat
					<span class="label label-warning">10</span>
				</a>
			</li>
                        <li>
                            <a href="view.php" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Profile
					
				</a>
			</li>
                        <li>
                            <a href="view.php" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Forum
					
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
                        
                        <li>
				<a href="verifyfile.php" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					Verify Files
				</a>
			</li>
                        
                        <li>
				<a href="veriuser.php" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-book icon-white"></i></div>
					Verify Users
				</a>
			</li>
                        
                        
			
		</ul>
	</div>
	<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-head">
							<h3> Registration  <label for="basicround" class="control-label"> <b>Date <?php echo date("d/m/Y"); ?></label></h3> 
                                                                               
						</div>
						<div class="box-content">
							
							<form enctype="multipart/form-data" action="fileupload.php" method="POST" class="form-horizontal">
									
                                                                        
									<div class="control-group">
										<label for="basic" class="control-label">Enter Name</label>
										<div class="controls">
											<input type="text" name="basic" id="basic" class='input-square'>
										</div>
									</div>
                                                                      
                                                                        <div class="control-group">
										<label for="basic" class="control-label">Enter ID No</label>
										<div class="controls">
											<input type="text" name="basic" id="basic" class='input-square'>
                                                                                        </div>
                                                                                <br>
                                                                                <label for="basic" class="control-label">Gender   </label>
                                                                                <div class="controls">
											Male   <input type="radio"name="basic" />
                                                                                        Female <input type="radio"name="basic" />
                                                                                        </div>
                                                                                        
										</div>
                                                                                
                                                                        <div class="control-group">
								
                                                                           
                                                                            <br>
                                                                           <div class="control-group">
										<label for="basic" class="control-label">Add Items</label>
										<div class="controls">1
											<select name="type">
                                                                                            
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
                                                                                
                                                                                <br>
                                                                                <div class="controls">2
											<select name="type">
                                                                                                
                                                                                            
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
                                                                                <br>
                                                                                 <div class="controls">3
											<select name="type">
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
                                                                                 <br><br>
                                                                                <label for="basicround" class="control-label"> <b>Chest No <?php echo 12; ?></label>
										</div>
									</div>
                                                                        </div>
                                                                        <div class="form-actions">
                                                                                
										<button class="btn btn-primary" type="submit">Modify</button>
                                                                                
                                                                                <button class="btn btn-success">Submit</button>
									</div>
                                                                        
                                                                        
								
			
									
									
							</form>
						</div>
					</div>
				</div>
			</div>
			
	</div>
</div>	
<script src="js/jquery.js"></script>
<script src="js/less.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script src="js/bootstrap.timepicker.js"></script>
<script src="js/bootstrap.datepicker.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/plupload/plupload.full.js"></script>
<script src="js/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script src="js/jquery.cleditor.min.js"></script>
<script src="js/jquery.inputmask.min.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/jquery.textareaCounter.plugin.js"></script>
<script src="js/ui.spinner.js"></script>
<script src="js/jquery.jgrowl_minimized.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/bbq.js"></script>
<script src="js/jquery-ui-1.8.22.custom.min.js"></script>
<script src="js/jquery.form.wizard-min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/jquery.metadata.js"></script>
<script src="js/custom.js"></script><script src="js/demo.js"></script>
</body>

<!-- Mirrored from www.eakroko.de/neat/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:12:20 GMT -->
</html>