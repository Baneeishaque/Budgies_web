<?php

include 'connection.php';

 $tittle=$_POST['basic'];
 $id=$_POST['idno'];
 
 $dept=$_POST['dept'];
 $sem=$_POST['sem'];
 
 $sex=$_POST['gen'];
 
 
 $item1=$_POST['type1'];
 $item2=$_POST['type2'];
 $item3=$_POST['type3'];
 
 $pro=$_POST['file'];
 
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
       
    
     $sql="INSERT INTO `sportsreg`(`name`,`addno`,`chestno`,`dept`,`sem`, `sex`,`item1`,`item2`,`item3`,`pic`) VALUES ('$tittle','$id','','$dept','$sem','$sex','$item1','$item2','$item3','$pro')";
     $conn->query($sql);
  
     //display chest number
     $sql="SELECT chestno FROM sportsreg order by chestno";
     $result = $conn->query($sql);  
     $row=$result->fetch_assoc();
     while($row=$result->fetch_assoc()){
         
         $chest=$row["chestno"];
     }
     echo "<script language='javaScript'>alert('Thank you for Registration ! your chest number is : $chest');</script>";
    
 }
?>
