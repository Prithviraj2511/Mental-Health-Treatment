<?php
 session_start();
 include 'dbh.php';
 $uname=$_POST['username'];
 $pass=$_POST['password'];

 $sql="select * from login where username='$uname' and password='$pass'";
 $result=$conn->query($sql);
 if(!$row=$result->fetch_assoc()){
 	header("location:error.php");
 }else{
 	$_SESSION['name']=$_POST['username'];
 	header("location:chat.php");
 }

?>