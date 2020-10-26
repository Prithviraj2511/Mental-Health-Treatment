<?php
 session_start();
 include 'dbh.php';
 

 
	$uname=$_POST['full_name_1'];
	$email=$_POST['your_email_1'];
	$userdoc=$_POST['userdoc'];
   
	$pass=$_POST['password_1'];

	if($userdoc=="user"||$userdoc=="User")
	{
	$sql = mysqli_query($conn,"SELECT * from ulogin WHERE email = '$email' ");
	$row = mysqli_fetch_assoc($sql); 
	
	$checkpass=$row['password'];
	
	}
	else{

		$sql = mysqli_query($conn,"SELECT * from dlogin WHERE email = '$email' ");
	$row = mysqli_fetch_assoc($sql); 
	
	$checkpass=$row['password'];
	
	}
	
	  if ($pass !== $checkpass){
		echo '<div class="alert alert-danger"><center>Wrong password <br>';
	  }
	
	  else if(empty($_POST['your_email_1']) || $_POST['your_email_1'] == "") {
	$message = "<div class=\"alert alert-danger\">Email is empty, try again.</div>";
	echo $message;
	} else if(empty($_POST['password_1']) || $_POST['password_1'] == "") {
	$message = "<div class=\"alert alert-danger\">Password is empty, try again.</div>";
	echo $message;
	}
	else{
		if($userdoc=="user"||$userdoc=="User")
		header("Location:userdashboard/userdashboard.php");
		else
		header("Location:userdashboard/docdash.php");
		
	}

 
?>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Page</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
