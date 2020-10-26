<?php
include_once "config.php";
session_start();
if (empty($_COOKIE['token'])) {
setcookie("token", bin2hex(random_bytes(32)));
}

$token = $_COOKIE['token'];
if(isset($_SESSION["username"])){
header('Location: dashboard.php');
}
if(isset($_SESSION["usernameadmin"])){
header('Location: index.php');
}
$username=$_SESSION["username"];
$hash =  $_COOKIE['hash'];
$ip = $_SERVER['REMOTE_ADDR'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
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

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>

                  <?php
if(isset($_POST['trea'])){
$email = $_POST["email"];
$password = md5($_POST["password"]);
$sql = mysqli_query($conn,"SELECT * from users WHERE email = '$email' ");
$row = mysqli_fetch_assoc($sql); 
$hash =  $_COOKIE['hash'];
$token = $_COOKIE['token'];
$checkpass=$row['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$userid = $row['sr']; 
$query1 = mysqli_query($conn,"SELECT * FROM `fingerprints` WHERE `fingerprint` = '$hash'");
$checker = mysqli_num_rows($query1);
if ($checker > 0) {
  $flag = 1;
}
else {
  $flag = 0;
}

  if ($password !== $checkpass){
    echo '<div class="alert alert-danger"><center>Wrong password <br>';
  }

  else if(empty($_POST['email']) || $_POST['email'] == "") {
$message = "<div class=\"alert alert-danger\">Email is empty, try again.</div>";
echo $message;
} else if(empty($_POST['password']) || $_POST['password'] == "") {
$message = "<div class=\"alert alert-danger\">Password is empty, try again.</div>";
echo $message;
}

else if($row['isadmin'] == 1) {
     $_SESSION['usernameadmin'] = $row['username'];
          $userid = $row['sr']; 


  mysqli_query($conn, "UPDATE `users` SET `loginfingerprint`='$hash', `checktoken` = '$token', `loginip` = '$ip'   WHERE `users`.`sr` = '$userid' ");

$enter = mysqli_query($conn," INSERT INTO `fingerprints` (`id`, `userid`, `fingerprint`, `date`) VALUES ('', '$userid', '$hash', CURRENT_DATE() )");
      header("Location: index.php"); /* Redirect browser */
      
}

  else{
    echo '<div class="alert alert-success"><center>Correct password <br>';
    $_SESSION['username'] = $row['username'];
    $userid = $row['sr']; 
  mysqli_query($conn, "UPDATE `users` SET `loginfingerprint`='$hash', `checktoken` = '$token', `loginip` = '$ip'   WHERE `users`.`sr` = '$userid' ");
  mysqli_query($conn, "UPDATE `users` SET `flag`='$flag' WHERE `users`.`sr` = '$userid' ");


$enter = mysqli_query($conn," INSERT INTO `fingerprints` (`id`, `userid`, `fingerprint`, `date`) VALUES ('', '$userid', '$hash', CURRENT_DATE() )");
header("Location: dashboard.php"); /* Redirect browser */

  }
}
  ?>

              <form class="user" action="login.php" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name= "email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name = "password" placeholder="Password">
                    </div>
                    
                     <button   type="submit"  name="trea" class="btn btn-primary btn-user btn-block">
                  Login
                </button>
                    <hr>
                   
                  </form>
                  <hr>
                 
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>
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
