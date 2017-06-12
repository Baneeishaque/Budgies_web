<?php
include 'connection.php';
 $name=$_POST['name'];
 $id=$_POST['add'];
 $dept=$_POST['dept'];
 $sem=$_POST['sem'];
 
 $sex=$_POST['gen'];
 
 
 $item1=$_POST['type1'];
 $item2=$_POST['type2'];
 $item3=$_POST['type3'];
 
     if($sex=='male'){
    $sex='Male';
    }
    elseif($sex=='female'){
     $sex='Female';
    }
    if($item1=="Select"&&$item2=="Select"&&$item3=="Select"){
      
       
       echo '<script>alert("please select atleast one item...!")</script> ';
       echo '<script>window.location="sports.php"</script>';
     }
     else{
       if($item1=="Select"){
           $item1="Nil";
       }
       if($item2=="Select"){
           $item2="Nil";
       }
       if($item3=="Select"){
          $item3="Nil";
       }
       
     $sql="UPDATE `sportsreg` SET name='$name',dept='$dept',sem='$sem',sex='$sex',item1='$item1',item2='$item2',item3='$item3' where addno='$id'";
      $conn->query($sql);
     echo $sql;
     //display chest number
     $sql="SELECT chestno FROM sportsreg where addno='$id'";
     $result = $conn->query($sql);  
     $row=$result->fetch_assoc();
     
     $chest=$row["chestno"];
    
     echo "<script language='javaScript'>alert('Successfully Modifyed ! your chest number is : $chest');</script>";
     }
?>
