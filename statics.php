<!doctype html>
<html lang="en">

<!-- Mirrored from www.eakroko.de/neat/statistics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:10 GMT -->
<head>
<meta charset="utf-8">
<title>Neat Admin Template</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/style.css">
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
<div class="topbar clearfix">
	<div class="container-fluid">
		<a href="dashboard.html" class='company'>Neat Admin Template</a>
		<form action="#">
			<input type="text" value="Search here...">
		</form>
		<ul class='mini'>
			<li class='dropdown dropdown-noclose supportContainer'>
				<a href="#" class='dropdown-toggle' data-toggle="dropdown">
					<img src="img/icons/fugue/book-question.png" alt="">
					Support tickets
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
					<li class="custom">
						<div class="expand_custom">
							<a href="#">Show all support tickets</a>
						</div>
					</li>
				</ul>
			</li>
			<li class='dropdown pendingContainer'>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<img src="img/icons/fugue/document-task.png" alt="">
					Pending orders
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
				<a href="dashboard.html" class='light'>
					<div class="ico"><i class="icon-home icon-white"></i></div>
					Dashboard
					<span class="label label-warning">10</span>
				</a>
			</li>
			<li>
				<a href="forms.html" class='light'>
					<div class="ico"><i class="icon-list icon-white"></i></div>
					Forms
					<span class="label label-info">1</span>
				</a>
			</li>
			<li>
				<a href="#" class='light toggle-collapsed'>
					<div class="ico"><i class="icon-th-large icon-white"></i></div>
					Tables
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
			<li class='active'>
				<a href="statistics.html" class='light'>
					<div class="ico"><i class="icon-signal icon-white"></i></div>
					Statistics
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
				<div class="span6">
					<div class="box">
						<div class="box-head">
							<h3>Quick statistics</h3>
						</div>
                                            
						<div class="box-content">
                                                    
                                                    
                                                    <div class="control-label">
										<label for="select5" class="control-label">Multiselect</label>
										<div class="controls">
											<select name="select" id="select5" class='cho span6' multiple>
												<option value="1">Option-1</option>
												<option value="2">Option-2</option>
												<option value="3">Option-3</option>
												<option value="4">Option-4</option>
												<option value="5">Option-5</option>
											</select>
										</div>
									</div>
                                                    
                                                    
							<form action="#" class="form-horizontal">
									
									<div class="control-group">
										<label for="basic" class="control-label">Square basic input</label>
										<div class="controls">
											<input type="text" name="basic" id="basic" class='input-square'>
										</div>
									</div>
									<div class="control-group">
										<label for="basicround" class="control-label">Round basic input</label>
										<div class="controls">
											<input type="text" name="basic" id="basicround">
										</div>
									</div>
									
								
                                                                        
                                                                        <div class="form-actions">
										<button class="btn btn-primary" type="submit">Send</button>
										<input type="reset" class='btn btn-danger' value="reset">
									</div>
							</form>
							
								
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="box">
						<div class="box-head">
							<h3>Pie statistics</h3>
						</div>
						<div class="box-content">
							<div class="flot flot-pie"></div>
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
<script src="js/jquery.color.js"></script>
<script src="js/jquery.flot.resize.js"></script>
<script src="js/jquery.flot.orderBars.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/custom.js"></script><script src="js/demo.js"></script>
</body>

<!-- Mirrored from www.eakroko.de/neat/statistics.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Sep 2015 18:13:11 GMT -->
</html>