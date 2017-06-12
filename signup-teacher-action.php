<?php

include 'connection.php';

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$passwordcon = $_POST['cpassword'];
$id = $_POST['id'];
$dept = $_POST['department'];

$email = $_POST['mail'];
$qualification = $_POST['qualification'];

$pro = $_FILES['profile']['name'];

$uploaddir = 'profile/';
$uploadfile = $uploaddir . basename($_FILES['profile']['name']);
if($password!=$passwordcon){
     echo '<script>alert("Incorrect Password Confirmation.!")</script> ';
}
else{
if (!(move_uploaded_file($_FILES['profile']['tmp_name'], $uploadfile))) {
    echo '<script>

					alert("Upload Failure");
window.location="index.php";
				</script>
				';
} else {
    $sql = "INSERT INTO `teachers`(`name`, `email`, `dept`, `id`, `qualification`, `username`, `password`,`propic`) VALUES ('$name','$email','$dept','$id','$qualification','$username','$password','$pro')";
    $conn->query($sql);
    
    $sql = "INSERT INTO `login`(`addno`, `password`, `role`) VALUES ('$id','$password','Teacher')";
  
    $conn->query($sql);
    echo '<script>alert("Congratulation....Account created succesfully...!")</script> ';
    echo '<script>window.location="index.php"</script>';
}  
}