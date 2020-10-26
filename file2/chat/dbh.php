<?php

 $conn=mysqli_connect("localhost","root","","saboo");
 if(!$conn){
 	die("connection failed".mysqli_connect_error());
 }else{
     echo "SUCCESSFUL";
     echo "<br>";
 }
?>