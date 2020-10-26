<?php
 session_start();
 include 'dbh.php';
 $uname=$_POST['name'];
 $email=$_POST['email'];
 $date=$_POST['date'];
 $time=$_POST['time']; 
 $appfor=$_POST['appointmentfor'];

 $sql="insert into appointment values('$uname','$email','$date','$time','$appfor')";
 $result=$conn->query($sql);

 header("location:userdashboard.php");

?>