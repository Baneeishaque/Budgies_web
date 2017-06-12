<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include'connection.php';
$title=$_GET['title'];
$date=date('d/m/Y');
$feedback=$_GET['feedback'];
$sql="INSERT INTO `feedback`(`date`, `title`, `feedback`) VALUES ('$date','$title','$feedback')";
$conn->query($sql);