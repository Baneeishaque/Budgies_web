
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
							<h3><img src="sports/u.jpg" alt=""></h3>
						</div>
                                                <br>
						<div class="box-content">
                                                    <div class="row-fluid force-margin">
							<form enctype="multipart/form-data" action="" method="POST" class="form-horizontal">
								
								<div class="span6">
                                                                    <h4 align="center"> ADD RESULT</h4>
									<div class="control-group">
                                                                                <label for="basic" class="control-label"><b>GENERAL ITEMS</b></label><br>
										<br>
										<div class="controls">
											<input type="text" name="basic" placeholder="Enter Chest Number.." id="placeholder" class="input-square">
										</div>
									</div>
									
									<div class="control-group">
								
                                                                           <div class="control-group">
										
										<div class="controls">
											<select name="type">
                                                                                                                  
                                                                        <option>ITEMS</option>
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
                                                                        <div class="control-group">
										
										<div class="controls">
											<select name="type1">
                                                                         <option>PLACE</option>                       
                                                                        <option>First</option>
                                                                        <option>Second</option>
                                                                        <option>Third</option>
                                                                        
                                                                </select>       
										</div>
                                                                            
									</div>
                                                                            
                                                                        <div class="control-group">
										<label for="basicround" class="control-label">Date</label>
                                                                                <label for="basicround" class="control-label"><?php echo date("d/m/Y"); ?></label>
                                                                                
                                                                                <div class="span4">
                                                                <br>
                                                                <button class="btn btn-primary" formaction="modifyresult.php" type="submit">Modify</button>
                                                                                <button class="btn btn-success">Submit</button>
                                                                   
                                                                                </div>
									</div>
                                                                            
                                                                             </div>
								</div>
								
                                                                    <div class="span3">
									<div class="pull-left">
								<div class="control-group">
                                                                                <br>
										<label for="basic" class="control-label"><b>GROUP ITEMS</b></label><br>
										<div class="controls">
											<input type="text" name="placeholder" placeholder="Department.." id="placeholder" class="input-square">
										</div>
									</div>
                                                                            
                                                                            <div class="control-group">
										<div class="controls">
											<select name="grpi">
                                                                                                                  
                                                                        <option>ITEMS</option>
                                                                        <option>100 M</option>
                                                                        <option>200 M</option>
                                                                        
                                                                        
                                                                </select>       
										</div>
									</div>
                                                            </div>
                                                                        
								</div>
                                                            
                                                            <div class="span3">
                                                                    </div>
                                                            <br><br><br><br><br><br><br>
                                                            <div class="span2">
                                                                 
                                                                 <button class="btn btn-success">Submit</button>
                                                                   
                                                            </div>
							
                                                    
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
                                                        <th><b>Chest No </th>
                                                        <th><b>Name</th>
                                                        <th><b>Department</th>
                                                        <th><b>Semester</th>
                                                        <th><b>Sex </th>
                                                        <th><b>Items</th>
                                                        <th><b>place </th>
                                                       
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    
                                                    <tr>
                                                             <?php
                                                             include 'connection.php';
                                                             
                                                                $chestno=$_POST['basic'];
                                                                $item=$_POST['type'];
                                                                $place=$_POST['type1'];
 
                                                            if($chestno!=NULL){
                                                                $sql="SELECT chestno,name,dept,sem,sex from sportsreg  where chestno='$chestno'";
                                                                $result = $conn->query($sql);
                                                                while($row=$result->fetch_assoc()){  
                                                                 
                                                                 $chno= $row["chestno"];
                                                                 $name=$row["name"];
                                                                 $dep=$row["dept"];
                                                                $sem=$row["sem"];
                                                                 $sex= $row["sex"];
                                                                }
                                                                
                                                              //table result include name and other details
                                                                 if($chestno==$chno && $item!="ITEMS"){
                                                                     
                                                                     if($place=="First"){
                                                                         $point=5;
                                                                     }
                                                                     else if($place=="Second"){
                                                                         $point=3;
                                                                     }
                                                                     else{
                                                                         $point=1;
                                                                     }
                                                                    // if($chestno!=NULL){
                                                                     $sql="INSERT INTO `result`(`chestno`,`name`,`dept`,`sem`,`sex`,`items`,`place`,`point`) VALUES ('$chno','$name','$dep','$sem','$sex','$item','$place','$point')";
                                                                     $conn->query($sql);
                                        //                             }
                                                                    
                                                                 }
                                                                 else
                                                                 {
                                                                     echo '<script>alert("Incorrect Chest NO or Items...!")</script> ';
                                                                    // echo '<script>window.location="addresult.php"</script>';
                                                                 }
                                                            }
                                                                $sql="SELECT * from result order by id desc ";
                                                                $result = $conn->query($sql);
                                                                while($row=$result->fetch_assoc()){
                                                                 
                                                                 echo'<tr>
                                                                                                        <td>'; echo $row["id"];echo'</td>
													
                                                                                                        <td>'; echo $row["chestno"];echo '</td> 
                                                                                                        <td>'; echo $row["name"];echo '</td>    
                                                                                                        <td>'; echo $row["dept"];echo '</td>    
                                                                                                        <td>'; echo $row["sem"];echo '</td>
                                                                                                        <td>'; echo $row["sex"];echo '</td>  
                                                                                                        <td>'; echo $row["items"];echo '</td>   
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