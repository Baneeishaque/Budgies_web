<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

include'connection.php';
$mobile = $_GET['mobile'];
$email=$_GET['email'];
$home=date('home');
$edu=$_GET['edu'];
$dob=$_GET['dob'];
$hobby=$_GET['hobby'];
$bio=$_GET['bio'];
$gender=$_GET['gender'];
$fquote=$_GET['fquote'];
$role=$_GET['role'];
$pro=$_GET['pro'];

$id=$_SESSION["user_id"];

$sql="UPDATE `teachers` SET `email`=['$email'],propic`=['$pro'],`mobile_no`=['$mobile'],`home_town`=['$home'],`education`=['$edu'],`date_of_birth`=['$dob'],`hobby`=['$hobby'],`bio`=['$bio'],`gender`=['gender'],`fqoute`=['fquote'],`role_model`=['$role'] WHERE id=".$id;
$conn->query($sql);
echo '<script>alert("Notification updated succesfully...!")</script> ';
            echo '<script>window.location="addnotif2.php"</script>';