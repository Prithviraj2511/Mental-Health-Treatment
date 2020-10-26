<?php
include_once "config.php";
session_start();
if (empty($_COOKIE['token'])) {
setcookie("token", bin2hex(random_bytes(32)));
}
ini_set('memory_limit', '-1');

$ip = $_SERVER['REMOTE_ADDR'];

$token = $_COOKIE['token'];
if(!isset($_SESSION["usernameadmin"])){
header('Location: login.php');
}
$username=$_SESSION["usernameadmin"];
$userid= $_GET['userid'];


$sql  = mysqli_query($conn, "SELECT * from users where sr = '$userid' ");

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<p id="demo" onLoad=""></p>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

     <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-users"></i>
          <span>View Users</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="fake.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>View Fake Users</span></a>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

         <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"> Fake Users PASSWORD</h1>
          <p class="mb-4">Fake User Using same <b><font color = "red" >PASSWORD</font></b></a>.</p>




          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
            <th>Sr</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Sign Up Ip</th>
                      <th>User Agent</th>
                      <th>Referrer</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Sign Up Ip</th>
                      <th>User Agent</th>
                      <th>Referrer</th>
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    $query = "SELECT * FROM users WHERE sr = '$userid' ";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
$pass = $row['password'];
$query1 = mysqli_query($conn,"SELECT * FROM users WHERE password = '$pass'");
while ($row = mysqli_fetch_assoc($query1)) {   ?> 

                    <tr>
                      
                      <td><?php echo $row['sr'];?></td>
                    <td><?php echo $row['name'];?></td>
                     <td><?php echo $row['username'];?></td>
                     <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['signupip'];?></td>
                    <td><?php echo $row['useragent']; ?></td>
                    <td><?php echo $row['referrer']; ?></td>
             <td><a href="users_edit.php?id=<?php echo $row['sr']; ?>">Edit</a></td>
                    </tr>
                     <?php  } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

           <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- DataTales --------------------------------------------------------------------------------------------------- Example -->

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"> Fake Users IP</h1>
          <p class="mb-4">Fake User Using same <b><font color = "red" >IP</font></b></a>.</p>




          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
            <th>Sr</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Sign Up Ip</th>
                      <th>User Agent</th>
                      <th>Referrer</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Sign Up Ip</th>
                      <th>User Agent</th>
                      <th>Referrer</th>
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                    $query = "SELECT * FROM users WHERE sr = '$userid' ";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
$query1 = mysqli_query($conn,"SELECT * FROM users WHERE loginip = '$ip'");
while ($row = mysqli_fetch_assoc($query1)) {   ?> 

                    <tr>
                      
                      <td><?php echo $row['sr'];?></td>
                    <td><?php echo $row['name'];?></td>
                     <td><?php echo $row['username'];?></td>
                     <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['signupip'];?></td>
                    <td><?php echo $row['useragent']; ?></td>
                    <td><?php echo $row['referrer']; ?></td>
             <td><a href="users_edit.php?id=<?php echo $row['sr']; ?>">Edit</a></td>
                    </tr>
                     <?php  } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

  <!-- DataTales --------------------------------------------------------------------------------------------------- Example -->

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"> Fake Users BROWSERFINGERPRINT</h1>
          <p class="mb-4">Fake User Using same <b><font color = "red" >BROWSERFINGERPRINT</font></b></a>.</p>




          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
            <th>Sr</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Sign Up Ip</th>
                      <th>User Agent</th>
                      <th>Referrer</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sr</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Sign Up Ip</th>
                      <th>User Agent</th>
                      <th>Referrer</th>
                      <th>View</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
 $query = "SELECT * FROM users WHERE sr = '$userid' ";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
$hash = $row['browserhash'];
$query1 = mysqli_query($conn,"SELECT * FROM `users` WHERE `browserhash` = '$hash'");
$total_user_count = mysqli_num_rows($query1);
if ($total_user_count > 0 ) {


while ($row = mysqli_fetch_assoc($query1)) {   ?> 

                    <tr>
                      
                      <td><?php echo $row['sr'];?></td>
                    <td><?php echo $row['name'];?></td>
                     <td><?php echo $row['username'];?></td>
                     <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['signupip'];?></td>
                    <td><?php echo $row['useragent']; ?></td>
                    <td><?php echo $row['referrer']; ?></td>
             <td><a href="users_edit.php?id=<?php echo $row['sr']; ?>">Edit</a></td>
                    </tr>
                     <?php   }  }   

 ?> 


                  </tbody>
                </table>
              </div>
            </div>
          </div>


 

                   




        </div>
        <!-- /.container-fluid -->



<?php

/*$query_2 = "SELECT DISTINCT(fingerprint) from fingerprints WHERE userid = '$userid'";
$result_2 = $conn->query($query_2);

while($row_finger = mysqli_fetch_assoc($result_2)){
$fingerprint = $row_finger['fingerprint'];
$f_q = "SELECT fingerprint, GROUP_CONCAT(userid) as users FROM `fingerprints` WHERE fingerprint='$fingerprint' AND fingerprint !=''";
$r_f = $conn->query($f_q);
while($row_2 = mysqli_fetch_assoc($r_f)){

$arr = explode(',', $row_2['users']);
    $array_count = count($arr);
    $count = 0;
    var_dump($arr);
    }}

var_dump($userid);
*/

?>
      </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

