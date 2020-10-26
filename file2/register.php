<?php
include_once "config.php";
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];

if(isset($_SESSION["username"])){
header('Location: dashboard.php');

}

//$username=$_SESSION["username"];


$browser= $_SERVER['HTTP_USER_AGENT'];
$ip = $_SERVER['REMOTE_ADDR'];
$grab = file_get_contents("http://ip-api.com/xml/" . $ip);
$width = $_COOKIE['width']; 
$height = $_COOKIE['height']; 
$latitude = $_COOKIE['latitude'];
$longitude =  $_COOKIE['longitude'];
$hash =  $_COOKIE['hash'];
$browsersize = $width."X".$height;

$xml=simplexml_load_string($grab) or die("Error: Cannot create object");
  //if ($xml->status == "fail") { $xml=simplexml_load_file("http://ip-api.com/xml/" . $_SERVER['REMOTE_ADDR']) or die("Error: Cannot create object"); }
$country = $xml->country;
?>

<script type="text/javascript">
      var x=document.getElementById("demo");
    function showPosition1(position)
    {
    document.cookie="width="+screen.width;
    document.cookie="height="+screen.height;
    }  
    function getLocation()
     {
    if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
    else{x.innerHTML="Geolocation is not supported by this browser.";}
    }
    function showPosition(position)
    {
    document.cookie="latitude="+position.coords.latitude;
    document.cookie="longitude="+position.coords.longitude;
    }
    getLocation()
    showPosition1()
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.8.1/fingerprint2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
  
  new Fingerprint2().get(function(result, components) {
  // this will use all available fingerprinting sources
  console.log(result)
  // components is an array of all fingerprinting components used
  console.log(components)

  $.ajax({
    url : 'hash.php',
    type : "POST",
    dataType : 'json',
    contentType : 'application/json; charset=UTF-8',

    data : JSON.stringify(result),
    success : function(response) {
        //Some Code here
    }
});

  $.ajax({
    url : 'dumper.php',
    type : "POST",
    dataType : 'json',
    contentType : 'application/json; charset=UTF-8',

    data : JSON.stringify(components),
    success : function(response) {
        //Some Code here
    }
});




})

</script>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Signup </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <?php

if(isset($_POST['trea'])){
  $query1 = mysqli_query($conn,"SELECT * FROM `fingerprints` WHERE `fingerprint` = '$hash'");
$checker = mysqli_num_rows($query1);
if ($checker > 0) {
  $flag = 1;
}
else {
  $flag = 0;
}
$username = $_POST["username"];
$name = $_POST["name"];
$password = md5($_POST["password"]);
$email = $_POST["email"];
$paymentemail = $_POST["paymentemail"];
$referrer = $_POST["referrer"];
$token = $_COOKIE['token'];
$hash =  $_COOKIE['hash'];
$birthday = $_POST['birthday'];
$kind = $_POST['kind'];

$checkbox1=$_POST['disease'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

$timestamp = time();

$check_username = mysqli_query($conn,"SELECT username FROM `users` WHERE `username`='".$username."'");
$username_exists = mysqli_num_rows($check_username);
$check_email = mysqli_query($conn, "SELECT email FROM `users` WHERE `email`='".$email."'");
$email_exists = mysqli_num_rows($check_email);

if($username_exists == 1) {
$message = "<div class=\"alert alert-danger\">That username is not available.</div>";
echo $message;
}
else if($email_exists == 1) {
$message = "<div class=\"alert alert-danger\">That email is already registered.</div>";
echo $message;
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
$message = "<div class=\"alert alert-danger\">Invalid email format. Valid: <i>admin@example.com</i></div>";
echo $message;
} else if(!preg_match("/^[a-z0-9]+$/i", $_POST['username'])) {
$message = "<div class=\"alert alert-danger\">Username must contain only letters and numbers.</div>";
echo $message;
} else if(empty($_POST['email']) || $_POST['email'] == "") {
$message = "<div class=\"alert alert-danger\">Email is empty, try again.</div>";
echo $message;
} else if(empty($_POST['username']) || $_POST['username'] == "") {
$message = "<div class=\"alert alert-danger\">Username is empty, try again.</div>";
echo $message;
} else if(empty($_POST['password']) || $_POST['password'] == "") {
$message = "<div class=\"alert alert-danger\">Password is empty, try again.</div>";
echo $message;
}
else if(strlen($_POST['username']) > 20) {
$message = "<div class=\"alert alert-danger\">Username must be shorter than 20 characters.</div>";
echo $message;
} else if(strlen($_POST['username']) < 3) {
$message = "<div class=\"alert alert-danger\">Username must be greater than 3 characters.</div>";
echo $message;
}
else {

$enter = mysqli_query($conn," INSERT INTO `users` (`sr`, `name`, `username`, `dob`,`kind` , `disease`, `password`, `email`, `loginip`, `signupip`, `browserhash`, `useragent`, `date`, `timestamp`, `evercookie`, `longitude`, `latitude`, `country`, `csrftoken`, `checktoken`,  `browsersize`, `loginfingerprint`, `signupfingerprint`, `referrer`, `paymentemail`, `banned`, `reason`, `isadmin`) VALUES ('', '$name', '$username', '$birthday','$kind', '$chk', '$password' , '$email', '$ip', '$ip', '$hash', '$browser', CURRENT_DATE(), '$timestamp', '', '$longitude', '$latitude', '$country', '$token','$token', '$browsersize', '$hash', '$hash', '$referrer', '$paymentemail', '0', '', '0')");
  mysqli_query($conn, "UPDATE `users` SET `flag`='$flag' WHERE `users`.`email` = '$email' ");
$message = "<div class=\"alert alert-success\">Account created successfully You can <b><a href=\"login.php\">login now</a></b>.</div>";
echo $message;
}
}
  ?>

              <form class="user" action="register.php" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                 <label><b>Disease (Select all that apply)</b></label><br>
                <input type="checkbox" id="Alzheimer" name="disease[]" value="Alzheimer">
                <label for="Alzheimer">Alzheimer</label><br>
                <input type="checkbox" id="Obesity" name="disease[]" value="Obesity">
                <label for="Obesity">Obesity</label><br>
                <input type="checkbox" id="Anxiety" name="disease[]" value="Anxiety">
                <label for="Anxiety">Anxiety</label><br>
                 <input type="checkbox" id="Allergy" name="disease[]" value="Allergy">
                <label for="Allergy">Allergy</label><br>
                 <label><b>User/Doctor</b></label>
                                <select class="form-control" name="kind">
                                    <option>User</option>
                                    <option>Doctor</option>
                                </select>
                <br>  
                <label for="birthday"><b>Birthday:</b></label>
               <input type="date" class="form-control form-control-user" id="birthday" name="birthday"><br>
                <button   type="submit"  name="trea" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
                <hr>
             
              </form>
              <hr>
              
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
