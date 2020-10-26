<?php
 session_start();
 include 'dbh.php';
 $uname=$_POST['full_name'];
 $email=$_POST['your_email'];
 $number=$_POST['your_phone'];

 $pass=$_POST['password'];

 $sql="insert into ulogin values('$uname','$pass','$email','$number')";
 $result=$conn->query($sql);
 
 header("location:userdashboard/registration form/index.html");
?>