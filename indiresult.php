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
                <br>
                    <div class="content">
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
                                                       
                                                        <th>Rank</th>
                                                        <th>Department</th>
                                                        <th>Games </th>
                                                        <th>Sports</th>
                                                        
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    <tr>
                                                             <?php 
                                                            
                                                             include 'connection.php';
                                                            
                                                             //sports
                                                             $sql="SELECT sum(point)FROM result where dept='Computer'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                             $cmp= $row["sum(point)"];
                                                              
                                                             $sql="SELECT sum(point)FROM result where dept='Automobile'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                             $auto= $row["sum(point)"];
                                                             
                                                             $sql="SELECT sum(point)FROM result where dept='Mechanical'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                              $mec= $row["sum(point)"];
                                                              
                                                              $sql="SELECT sum(point)FROM result where dept='Civil'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                               $civil= $row["sum(point)"];
                                                              
                                                              $sql="SELECT sum(point)FROM result where dept='Electronics'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                               $eee= $row["sum(point)"];
                                                              
                                                              $sql="SELECT sum(point)FROM result where dept='Electrical'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                               $el= $row["sum(point)"];
                                                               
                                                             //games
                                                               
                                                             $sql="SELECT sum(point)FROM gamesresult where dept='Computer'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                             $cmpgame= $row["sum(point)"]; 
                                                             
                                                              $sql="SELECT sum(point)FROM gamesresult where dept='Automobile'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                             $autogame= $row["sum(point)"]; 
                                                             
                                                             $sql="SELECT sum(point)FROM gamesresult where dept='Mechanical'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                             $mecgame= $row["sum(point)"]; 
                                                             
                                                              $sql="SELECT sum(point)FROM gamesresult where dept='Civil'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                             $civilgame= $row["sum(point)"]; 
                                                             
                                                              $sql="SELECT sum(point)FROM gamesresult where dept='Electronics'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                             $eeegame= $row["sum(point)"]; 
                                                             
                                                              $sql="SELECT sum(point)FROM gamesresult where dept='Electrical'";
                                                             $result = $conn->query($sql);
                                                             $row=$result->fetch_assoc();
                                                             
                                                             $elgame= $row["sum(point)"]; 
                                                             
                                                           
                                                             
                                                               // MAX($cmp,$auto,$mec,$civil,$eee,$el);
                                                                                                         $sql="UPDATE `overallresult` SET games='$cmpgame',sports='$cmp',total=$cmpgame+$cmp where dept='COMPUTER'";
                                                                    $conn->query($sql);    
                                                                    $sql="UPDATE `overallresult` SET games='$autogame',sports='$auto',total=$autogame+$auto where dept='AUTOMOBILE'";
                                                                    $conn->query($sql);   
                                                                    $sql="UPDATE `overallresult` SET games='$mecgame',sports='$mec',total=$mecgame+$mec where dept='MECHANICAL'";
                                                                    $conn->query($sql);    
                                                                    $sql="UPDATE `overallresult` SET games='$civilgame',sports='$civil',total=$civilgame+$civil where dept='CIVIL'";
                                                                    $conn->query($sql);    
                                                                    $sql="UPDATE `overallresult` SET games='$elgame',sports='$el',total=$elgame+$el where dept='ELECTRICAL'";
                                                                    $conn->query($sql);    
                                                                    $sql="UPDATE `overallresult` SET games='$eeegame',sports='$eee',total=$eeegame+$eee where dept='ELECTRONICS'";
                                                                    $conn->query($sql);    
                                                               
                                                                                                        
                                                                                                          $i=0;
                                                                                                         $sql="SELECT * FROM overallresult order by total desc ";
                                                           
                                                                                                         $result = $conn->query($sql);
                                                                                                         while($row=$result->fetch_assoc()){
                                                                                                         $i=$i+1;
                                                                                                        
                                                                echo'<tr>                                   
                                                                    
                                                                                                            <td>'; echo $i;echo '</td>    
                                                                                                            <td>'; echo $row['dept'];echo '</td>    
                                                                                                             <td>'; echo $row['games'];echo '</td> 
                                                                                                             <td>'; echo $row['sports'];echo '</td>    
                                                                                                             <td>'; echo $row['total'];echo '</td>   
                                                                                                         
                                                                                                       
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
                                <br>
                                <div class="box-head tabs">
                                    <h3>Recent Result</h3>
                                </div>
                                <br>
                                <div class="alert alert-block alert-success">
                                                            <?php
                                                            $id=0;
                                                                $sql="SELECT dept,name,place,items from result ";
                                                           
                                                                $result = $conn->query($sql);
                                                                  while($row=$result->fetch_assoc()){
                                                                      $n=$row['name'];
                                                                      $pla=$row['place'];
                                                                      $dep=$row['dept'];
                                                                      $item=$row['items'];
                                                                  }
                                                           
							  echo'<a class="close" data-dismiss="alert" href="#">×</a>
							  <h4 class="alert-heading">';echo $item ;'</h4>';
                                                          echo '<br>';
                                                           echo '<br>';
                                                          echo $pla;
                                                          echo "  Price goes to ";
							  echo $n;
                                                          echo "  ";
                                                          echo '<br>';
                                                          echo $dep;
                                                          echo " Department";
                                                           ?>
				</div>
                                <br>
                                <div class="alert alert-block">
							  <a class="close" data-dismiss="alert" href="#">×</a>
							  <h4 class="alert-heading">1500 M Race</h4>
							  Best check yo self, you're not...
				</div>
                                
               
                
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="box">
                                <div class="box-head tabs">
                                    <h3> View Each Result</h3>
                                    <br>
                                    <br>
                                    
                                    
			
			<div class="controls"> <b> Select Item</b>
                            <form enctype="multipart/form-data" action="" method="POST" class="form-horizontal">
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
                            
                            Male   <input type="radio"name="basic" value="male"/>
                            Female <input type="radio"name="basic" value="female"/></b>
                            
                            <button class="btn" class='tip input-square' title="Select Item And Gender Then Click Here." data-placement="right">View Result</button>
                            <?php echo '<b>'; 
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
                                        echo '<br>';
                                        echo $bys;echo " ";echo $item  ;
                                        
                                        echo " ";echo "Rank List";
                                        '</b>'
                                                                
                             ?>
                            </form>
			</div>
                    
                                </div>
                                <div class="box-content box-nomargin">

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="basic">
                                            <table class='table table-striped table-bordered'>
                                                <thead>
                                                    <tr>
                                                        <th>Rank</th>
                                                        <th>Chest No</th>
                                                        <th>Name </th>
                                                        <th>Department</th>
                                                        <th>sem</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                   <tr>
                                                             <?php
                                                            
                                                            
                                                             include 'connection.php';
                                                             $sql="SELECT place,chestno,name,dept,sem FROM result  where sex='$sex'&& items='$item'";
                                                           
                                                             $result = $conn->query($sql);
                                                             while($row=$result->fetch_assoc()){
                                                             
                                                             echo'<tr>
                                                                                                       
                                                                                                        <td>'; echo $row["place"];echo '</td> 
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
