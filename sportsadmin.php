

<?php
error_reporting(0);
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
				
                           
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                    <img src="sports/u.jpg" alt=""> 
                                   
                                </div>
                                <div class="box-content box-nomargin">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic">
                                            <table class='table table-striped table-bordered'>
                                                <thead>
                                                    <tr>
                                                        
                                                        <th><b>SL No</b></th>
                                                        <th><b>Name </th>
                                                        <th><b>Admission No </th>
                                                        <th><b>Chest No</th>
                                                        <th><b>Department</th>
                                                        <th><b>Semester</th>
                                                        <th><b>Sex </th>
                                                        <th><b>Item 1</th>
                                                        <th><b>Item 2 </th>
                                                        <th><b>Item 3</b></th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    
                                                    <tr>
                                                             <?php
                                                             $i=0;
                                                             include 'connection.php';
                                                             $sql="SELECT * FROM sportsreg  order by chestno ";
                                                           
                                                             $result = $conn->query($sql);
                                                             while($row=$result->fetch_assoc()){
                                                                 $i=$i+1;
                                                             echo'<tr>
                                                                                                        <td>'; echo $i;echo'</td>
													<td>'; echo $row["name"];echo '</td>
                                                                                                        <td>'; echo $row["addno"];echo '</td>    
                                                                                                        <td>'; echo $row["chestno"];echo '</td> 
                                                                                                        <td>'; echo $row["dept"];echo '</td>    
                                                                                                        <td>'; echo $row["sem"];echo '</td>
                                                                                                        <td>'; echo $row["sex"];echo '</td>  
                                                                                                        <td>'; echo $row["item1"];echo '</td> 
                                                                                                        <td>'; echo $row["item2"];echo '</td>
                                                                                                        <td>'; echo $row["item3"];echo '</td>    
													
													
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
                        
                        <br>
                        
                        
                        
                        
                         <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                    
                                    <div class="box-content">
							
							<form enctype="multipart/form-data" action="" method="POST" class="form-horizontal">
                                                            
								<div class="controls"> <b> Select Item</b>
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
                                                                        
                                                                </select> <b>Gender  
                                                                    
                            
                            Male   <input type="radio"name="basic" value="male" />
                            Female <input type="radio"name="basic" value="female" /></b>
                            
                          
                            <button class="btn"class='tip input-square' title="Select Item and Gender Then Click here.!" data-placement="right" >View List</button>
                            
                            <img src="img/icons/fugue/printer.png" alt=""> <button class="btn btn-primary" onclick="printDiv('printableArea')" type="submit">Print</button>
                            <br>
                            <br>
                            <?php //echo '<b>'; echo "Participation List For "  ;
                             $sex=$_POST['basic'];
                                                             
                                            if($sex=='male'){
                                                $sex='Male';
                                                $bys='BOYS';
                                           }
                                           elseif($sex=='female'){
                                                $sex='Female';
                                            $bys='GIRLS';
                                           }
                                        $item=$_POST['type'];
                                        
                                        //echo $bys;echo " ";echo $item ;
                                        '</b>'
                                                                
                             ?>
			</div>	
                                                        
                                                        
							</form>
                                                    
						</div>
                                    
                                </div>
                                <div class="box-content box-nomargin">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic">
                                             <div id="printableArea">
                                                 <div class="controls">
                                                     <img src="sports/u.jpg" alt="">
                                                     <h3 align="center"><?php echo '<b>'; echo " Participation List For "  ; echo $bys;echo " ";echo $item; echo '</h3>';?>
                                                     <hr></hr> 
                                                     </div>
                                            <table class='table table-striped table-bordered'>
                                               
                                                <thead>
                                                    <tr>
                                                        
                                                        <th><b>SL No</b></th>
                                                        <th><b>Chest No </th>
                                                        <th><b>Name </th>
                                                        <th><b>Department</th>
                                                        <th><b>Semester</b></th>
                                                        
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    
                                                    <tr>
                                                             <?php
                                                             $i=0;
                                                            
                                                             include 'connection.php';
                                                             $sql="SELECT chestno,name,dept,sem FROM sportsreg  where sex='$sex'&& (item1='$item'|| item2='$item' || item3='$item')";
                                                           
                                                             $result = $conn->query($sql);
                                                             while($row=$result->fetch_assoc()){
                                                                 $i=$i+1;
                                                             echo'<tr>
                                                                                                        <td>'; echo $i;echo'</td>
                                                                                                        <td>'; echo $row["chestno"];echo '</td> 
													<td>'; echo $row["name"];echo '</td>
                                                                                                        <td>'; echo $row["dept"];echo '</td>    
                                                                                                        <td>'; echo $row["sem"];echo '</td>
                                                                                                        
													
													
												</tr>';
                                                                 
                                                             }
                                                             
                                                             ?>
										
						    </tr>
                                                     
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                        
                                        <div class="box">
                                                 <script type="text/javascript">
                                                     function printDiv(divName) {
                                                     var printContents = document.getElementById(divName).innerHTML;
                                                     var originalContents = document.body.innerHTML;
     
                                                        document.body.innerHTML = printContents;

                                                  window.print();

                                              document.body.innerHTML = originalContents;
                                               }
            </script>
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
