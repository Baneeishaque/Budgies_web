<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(0);
session_start();
session_destroy();
require_once 'config.php';
mysql_query("UPDATE `teachers` SET `line`='off' WHERE `id`='$id'");
mysql_query("UPDATE `student` SET `line`='off' WHERE `addno`='$id'");
 echo '<script>window.location="index.php"</script>';
