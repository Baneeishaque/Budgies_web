<?php

require_once 'config.php';
require_once 'connection.php';

$id = $_POST['user'];
$pw = $_POST['pw'];

$result = mysql_query("SELECT * FROM `login` WHERE addno='$id' AND password='$pw'");
$row = mysql_fetch_array($result);
$a = $row['id'];
echo $a;
if ($a == null) {
    echo '<script>window.location="login.php?error=1"</script>';
} else {
    $type = $row['role'];
    if ($type == 'Teacher') {
        $sql = "SELECT * FROM teachers where id='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $s = $row['status'];
        if ($s == 0) {
            echo '<script>window.location="login.php?error=2"</script>';
        } else {
            session_start();
            $_SESSION["user_id"] = $id;
            mysql_query("UPDATE `teachers` SET `line`='on' WHERE `id`='$id'") or die(mysql_error());
            header("Location: teachdash.php"); /* Redirect browser */
            exit();
        }
    }
    if ($type == 'Student') {

        $sql = "SELECT * FROM student where addno='$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $s = $row['status'];
        if ($s == 0) {
            echo '<script>window.location="login.php?error=2"</script>';
        } else {
            session_start();
            $_SESSION["user_id"] = $id;
            mysql_query("UPDATE `student` SET `line`='on' WHERE `addno`='$id'") or die(mysql_error());
            header("Location: studdash.php"); /* Redirect browser */
            exit();
        }
    }

    if ($type == 'Admin') {

        session_start();
        $_SESSION["user_id"] = $id;
        header("Location: dashboard.php"); /* Redirect browser */
        exit();
    }
}




