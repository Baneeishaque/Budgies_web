<?php
error_reporting(0);
?>
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

        <?php
        include_once 'topbar.php';
        ?>

</div><div class="main">
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
	<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-head">
							<h3><img src="sports/glog.jpg" alt=""></h3>
						</div>
                                                <br>
						<div class="box-content">
                                                    
							
							<form enctype="multipart/form-data" action="" method="POST" class="form-horizontal">
									
                                                                        
									<div class="control-group">
										<label for="basic" class="control-label">Department</label>
                                                                                <div class="controls">
										
											<select name="dept">
                                                                                            
                                                                        <option>Computer</option>
                                                                        <option>Automobile</option>
                                                                        <option>Mechanical</option>
                                                                        <option>Electronics</option>
                                                                        <option>Civil</option>
                                                                        <option>Electrical</option>
                                                                        
                                                                </select>     
                                                                                    </div>
									</div>
									
                                                                        <div class="control-group">
								
                                                                           <div class="control-group">
										<label for="basic" class="control-label">Items</label>
										<div class="controls">
											<select name="type">
                                                                                                                  
                                                                        <option>Select</option>
                                                                        <option>Football</option>
                                                                        <option>Cricket</option>
                                                                        <option>Table Tennis</option>
                                                                        <option>Basket Ball</option>
                                                                        <option></option>
                                                                       
                                                                        
                                                                </select>       
                                                                                   
										</div>
									</div>
                                                                        <div class="control-group">
										<label for="basic" class="control-label">Gender</label>
                                                                                <div class="controls">
                                                                                    
                                                                                        Male <input type="radio"name="gen" value="male" />
                                                                                        Female <input type="radio"name="gen" value="female" />
                                                                                        General <input type="radio"name="gen" value="gen" />
                                                                                        
                                                                                    </div>
									</div>    
                                                                      
                                                                        <div class="control-group">
										<label for="basic" class="control-label">Place</label>
										<div class="controls">
											<select name="place">
                            
                                                                        <option>First</option>
                                                                        <option>Second</option>
                                                                        <option>Third</option>
                                                                        
                                                                </select>       
										</div>
									</div>
                                                                            
                                                                        <div class="control-group">
										<label for="basicround" class="control-label">Date</label>
                                                                                <label for="basicround" class="control-label"><?php echo date("d/m/Y"); ?></label>
									</div>
                                                                            
                                                                             </div>
                                                            
                                                                             
                                                                        <div class="form-actions">
										<button class="btn btn-primary" type="submit">Submit</button>
										<a href="tes.php" button class="btn btn-primary" type="submit">Modify</button></a>
									</div>
                                                                        
                                                            <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                   <h3>Added Result</ h3>
                                </div>
                                <div class="box-content box-nomargin">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic">
                                            <table class='table table-striped table-bordered'>
                                                <thead>
                                                    <tr>
                                                        
                                                        <th><b>SL No</b></th>
                                                        <th><b>Department</th>
                                                        <th><b>Sex </th>
                                                        <th><b>Item</th>
                                                        <th><b>place </th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    
                                                    <tr>
                                                         <?php
                                                         
                                                                    $dept=$_POST['dept'];
                                                                    $items=$_POST['type'];
                                                                   
                                                                    
                                                                         $sex=$_POST['gen'];
                                                             
                                                                            if($sex=='male'){
                                                                                 $sex='Male';
                                                                                 $bys='BOYS';
                                                                            }
                                                                              elseif($sex=='female'){
                                                                                    $sex='Female';
                                                                                     $bys='GIRLS';
                                                                            }
                                                                            elseif($sex=='gen'){
                                                                                     $bys='GENERAL';
                                                                            }
                                        
                                                                     $place=$_POST['place'];
                                                                     
                                                                      if($place=="First"){
                                                                         $point=10;
                                                                     }
                                                                     else if($place=="Second"){
                                                                         $point=5;
                                                                     }
                                                                     else{
                                                                         $point=3;
                                                                     }
                                                             include 'connection.php';
                                                             
                                                             if($items!="Select"){
                                                             $sql="INSERT INTO `gamesresult`(`dept`,`sex`,`item`,`place`,`point`) VALUES ('$dept','$bys','$items','$place','$point')";
                                                             $conn->query($sql);
                                                             }
                                                             
                                                             $i=0;
                                                             $sql="SELECT * FROM gamesresult ";
                                                           
                                                             $result = $conn->query($sql);
                                                             while($row=$result->fetch_assoc()){
                                                              $i=$i+1;
                                                             echo'<tr>
                                                                                                       
                                                                                                        <td>'; echo $i;echo '</td> 
													<td>'; echo $row["dept"];echo '</td>
                                                                                                        <td>'; echo $row["sex"];echo '</td>    
                                                                                                        <td>'; echo $row["item"];echo '</td>
                                                                                                        <td>'; echo $row["place"];echo '</td>    
                                                                                                        
													
													
												</tr>';
                                                                 
                                                             }
                                                             
                                                             ?>
                                                             
										
						    </tr>
                                                     
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                        <div class="box">
                                                
                                        </div>	
                                    </div>
                                </div>
			</div>
			
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