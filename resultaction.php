<?php

include 'connection.php';

 $chestno=$_POST['basic'];
 $item=$_POST['type'];
 
 $place=$_POST['type1'];
 
 if($item=="Select"){
      
       
       echo '<script>alert("please select atleast one item...!")</script> ';
       echo '<script>window.location="sports.php"</script>';
 }
 else{
       
     $sql="INSERT INTO `result`(`chestno`,`item`,`place`) VALUES ('$chestno','$item','$place')";
     $conn->query($sql);
  
     //display chest number
    
     echo "<script language='javaScript'>alert('Result registered');</script>";
    
 }
?>
