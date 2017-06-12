<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include'connection.php';
$title = $_GET['title'];
$category = $_GET['category'];
$date = date('d/m/Y');
$description = $_GET['description'];
$sql = "INSERT INTO `notification`(`date`, `tittle`, `description`, `category`) VALUES ('$date','$title','$description','$category')";
$conn->query($sql);
echo '<script>alert("Notification updated succesfully...!")</script> ';
echo '<script>window.location="addnotif2.php"</script>';
