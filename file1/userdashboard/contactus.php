<?php
 session_start();
 include 'dbh.php';
 $uname=$_POST['name'];
 $email=$_POST['email'];
 $number=$_POST['number'];

 $message=$_POST['message'];

 $sql="insert into contactus values('$uname','$email','$number','$message')";
 $result=$conn->query($sql);
 header("location:userdashboard.php");

?>