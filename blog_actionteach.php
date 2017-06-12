<?php
session_start();
include 'connection.php';
$uid = $_SESSION["user_id"];
$date = date("d/m/y");
$des = $_POST['description'];

$img=$_FILES['image']['name'];

$uploaddir='forum/';
$uploaddir=$uploaddir.basename($_FILES['image']['name']);
                        
                        if(!(move_uploaded_file($_FILES['image']['tmp_name'],$uploaddir))){
                            
                            echo'<script>
                                alert("Uploading Failed");
                                window.location="blogaddstud.php";
                                </script>
                                ';
                        }
 else{                           
$sql = "INSERT INTO `forum`( `image`, `description`, `date`,`provider`,`providertype`) VALUES ('$img','$des','$date',$uid,'Teacher')";
$conn->query($sql);
echo '<script>alert("Post Added succesfully...!")</script> ';
            echo '<script>window.location="blogaddteach.php"</script>';
 }
            