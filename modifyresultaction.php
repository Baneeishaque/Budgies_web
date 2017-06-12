<?php
include 'connection.php';


 $chestno=$_POST['basic'];
 $item=$_POST['type'];
 $place=$_POST['type1'];

   
    if($item=="ITEMS"&&$place=="PLACE"){
      
       
       echo '<script>alert("Items or Place incorrect...!")</script> ';
       echo '<script>window.location="sports.php"</script>';
     }
     else{
       
       
     $sql="UPDATE `result` SET items='$item',place='$place' where chestno='$chestno'";
      $conn->query($sql);
    
     //display chest number
    
     echo "<script language='javaScript'>alert('Successfully Modifyed !' );</script>";
     }
?>
