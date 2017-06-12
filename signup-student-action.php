<?php

include 'connection.php';

$name = $_POST['name'];
$password = $_POST['password'];
$passwordcon = $_POST['cpassword'];
$username = $_POST['username'];
$mailid = $_POST['mailid'];
$id = $_POST['id'];
$department = $_POST['department'];
$register = $_POST['register'];

$pro = $_FILES['file']['name'];

$uploaddir = 'profile/';
if($password!=$passwordcon){
     echo '<script>alert("Incorrect Password Confirmation.!")</script> ';
}
else{
$uploadfile = $uploaddir . basename($_FILES['file']['name']);
if (!(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))) {
    echo '<script>

					alert("Upload Failure");

				</script>
				';
} else {
    $sql = "INSERT INTO `student`(`name`, `addno`, `regno`, `email`, `dept`, `password`, `username`,`propic`) VALUES ('$name','$id','$register','$mailid','$department','$password','$username','$pro')";
  
    $conn->query($sql);
    
    $sql = "INSERT INTO `login`(`addno`, `password`, `role`) VALUES ('$id','$password','Student')";
  
    $conn->query($sql);

    echo '<script>alert("Congratulation....Account created succesfully...!")</script> ';
    echo '<script>window.location="index.php"</script>';
}
}
?>
