<?php
session_start();
include 'dbh.php';
$message=$_POST['message'];
$username=$_SESSION['name'];

$sql="insert into posts(message,username) values('$message','$username')";
$result=$conn->query($sql);
header("location:chat.php");
?>