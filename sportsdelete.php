<?php
include 'connection.php';
$id=$_POST['add'];

    $sql="SELECT addno FROM sportsreg where addno=$id";
    
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    
     if($id!=$row["addno"]){
          echo '<script>alert("Admission Number Not Found..")</script> ';
          // echo '<script>window.location="sportsmodify.php"</script>';
     }
    else
        {
      $sql="DELETE FROM sportsreg where addno='$id'";
       $conn->query($sql);
      echo '<script>alert("Deleted ")</script> ';   
    }
    
?>