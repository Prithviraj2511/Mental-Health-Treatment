
<?php

include_once "config.php";
session_start();
$dis=
$username=$_SESSION["username"];
#$diseasegetter = mysqli_query($conn, "SELECT * from users where username = '$username' ");
#$row = mysqli_fetch_assoc($diseasegetter);
$disease = "Anxiety";

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User Dashboard Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

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
        <div class="sidebar-brand-text mx-3"> Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Anxiety</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="dashboard2.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Alzheimer</span></a>
      </li>

        <li class="nav-item active">
        <a class="nav-link" href="discussion">
          <i class="fa fa-user"></i>
          <span>Discussion Board</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="faq.php">
          <i class="fa fa-question"></i>
          <span>F.A.Q</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="chat/login.php">
          <i class="fa fa-user"></i>
          <span>Chat</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

   
     

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
            <li><a role="button" href="../file1/userdashboard/userdashboard.php">Back to Dashboard</a></li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1><br>
                      
          </div>

           <div class="row">
<?php 
if ($disease == 'Obesity') { ?>
            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-6">
            
      

          
    <script type="text/javascript" async id="weight-loss-calculator" data-type="verywell-tool" data-vertical="verywellfit" src="https://www.verywellfit.com/static/4.141.0/components/tools/calculators/iframe-embed/embed.min.js?id=weight-loss-calculator"></script>

   </div>
 </div>

               <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
              <form class="user" action="dashboard.php" method="post">
              <div class="form-group">
                <?php
                if(isset($_POST['trea'])){
$checkbox1=$_POST['exercise'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
  $query1 = mysqli_query($conn,"INSERT INTO `exercise` (`sr`, `username`, `exercise`, `date`) VALUES ('', '$username', '$chk', CURRENT_DATE() );");
  $message = "<div class=\"alert alert-success\">Your Today's Detail has been added Successfully</b>.</div>";
echo $message;
}
 ?>
                      <h2>Update your daily exercise</h2>
                 <label><b>Exercises (Select all that you did today)</b></label><br>
                <input type="checkbox" id="Jogging" name="exercise[]" value="Jogging">
                <label for="Jogging">Jogging</label><br>
                <input type="checkbox" id="Dancing" name="exercise[]" value="Dancing">
                <label for="Dancing">Dancing</label><br>
                <input type="checkbox" id="Yoga" name="exercise[]" value="Yoga">
                <label for="Yoga">Yoga</label><br>
                 <input type="checkbox" id="Aerobic" name="exercise[]" value="Aerobic">
                <label for="Aerobic">Aerobic</label><br>
                <button   type="submit"  name="trea" class="btn btn-primary btn-user btn-block">
                  Submit
                </button><br><br><br>
                  <div class="container">
      <div class="card">
        <div class="card-content">
                <h2>Calories Counter</h2>
          <span class="card-title">Calories Counter</span>
          <!-- Form -->
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12 m6">
                  <input id="item-name" type="text">
                  <label for="item-name">Food</label>
                </div>
                <div class="input-field col s12 m6">
                  <input id="item-calories" type="number">
                  <label for="item-calories">Calories</label>
                </div>
              </div> <!-- /.row-->
              <div class="row">
                <div class="col" style="width: 100%">
                  <a class="add-btn btn blue darken-3" title="Adicionar Refeição"><i class="material-icons center">add</i></a>
                  <a class="update-btn btn orange" title="Atualizar Refeição"><i class="material-icons center">update</i></a>
                  <a class="delete-btn btn red" title="Deletar Refeição"><i class="material-icons center">delete</i></a>    
                  <a class="back-btn btn grey right" title="Voltar"><i class="material-icons left">arrow_back</i>Voltar</a>
                </div>
              </div>
            </form>
          </div>
          
        </div> <!-- /.card-content-->
      </div> <!-- /.card-->
    </div>

    <!-- Calorie Count -->
    <h3 class="center">Total Calories: <span class="total-calories">0</span></h3>
    <!-- Item List -->
    <div class="container">
      <ul id="item-list" class="collection">
        
      </ul>
    </div>

</div></div>

</div></div></div><br><br>

 <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
<?php } 
if ($disease == 'Anxiety') { ?>
            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-6">
            
      <h2>Play Games </h2>

          
    <embed width="550" height="400" base="https://external.kongregate-games.com/gamez/0000/6057/live/" src="https://external.kongregate-games.com/gamez/0000/6057/live/embeddable_6057.swf" type="application/x-shockwave-flash"></embed>
   </div>
 </div>

               <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
              <form class="user" action="dashboard.php" method="post">
              <div class="form-group">
                      <h2>Listen to Relaxing Music </h2>

               <iframe width="560" height="315" src="https://www.youtube.com/embed/1ZYbU82GVz4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <br><br><br>
                  
   

</div></div></div><br><br>

 <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4"><br>

          <h2>Download Encouraging Ebooks</h2>
          <a href="https://www.amazon.in/Anxiety-Phobia-Workbook-Harbinger-Workbk/dp/1626252157">The Anxiety and Phobia Workbook - DOWNLOAD</a>
          <a href="https://www.amazon.com/Perfectionism-Workbook-Strategies-Procrastination-Yourself-ebook/dp/B07FHL11Q3">The Perfectionism Workbook - DOWNLOAD</a>
          <a href="https://www.amazon.com/Stress-Proof-Brain-Emotional-Mindfulness-Neuroplasticity/dp/1626252661">The Stress-Proof Brain - DOWNLOAD</a>

<?php } if ($disease == 'Alzheimer') { ?>
            <!-- Area Chart -->
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-6">
            
      <h2>Play Games </h2>

          
                       <iframe src='https://www.embed.com/app/mathjong/standard.html' style='width: 600px; height: 625px;' scrolling='no' frameBorder='0'></iframe>
        
        
   </div>
 </div>

               <div class="col-xl-6 col-lg-5">
              <div class="card shadow mb-4">
              <form class="user"  method="post">
              <div class="form-group">
                <?php
                if(isset($_POST['alchemy'])){
$text=$_POST['data'];  
if ($text !== "alchemy") {
     $message = "<div class=\"alert alert-danger\">Wrong Answer</b>.</div>";
     echo $message;

  }  
  else{
      $message = "<div class=\"alert alert-success\">Correct</b>.</div>";
      echo $message;
  }
}
 ?>

                      <h2>Activity </h2>
<p>Your Today's activity is to remember the word <b>"Entrepreneur" </b></p>

<center>Please enter yesterday's term

<form class="user" action="dashboard.php" method="post">
              <div class="form-group">

<div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="data" name="data" placeholder="Text"><br>
                  </div>
                    <button   type="submit"  name="alchemy" class="btn btn-primary btn-user btn-block">
                  Submit
                </button>
</center>
               <br><br><br>
                  
   

</div></div></div><br><br>

 <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4"><br>

          
<?php } ?>
 
</div>
          <!-- Content Row -->
          <div class="row">

            
            <!-- Pending Requests Card Example -->
       
          </div>

          <!-- Content Row -->

          <div class="row">

        
          <!-- Content Row -->
         
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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
      <script src="js/app.js"></script>

  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
