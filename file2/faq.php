
<?php
if (empty($_COOKIE['token'])) {
setcookie("token", bin2hex(random_bytes(32)));
}

$token = $_COOKIE['token'];
include_once "config.php";
session_start();
if(!isset($_SESSION["username"])){
header('Location: login.php');

}
$username=$_SESSION["username"];
$diseasegetter = mysqli_query($conn, "SELECT * from users where username = '$username' ");
$row = mysqli_fetch_assoc($diseasegetter);
$disease = $row['disease'];

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FAQ</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/allergy.css" />

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

        <li class="nav-item active">
        <a class="nav-link" href="discussion">
          <i class="fa fa-user"></i>
          <span>Discussion Board</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="chat/login.php">
          <i class="fa fa-user"></i>
          <span>Chat</span></a>
      </li>

        <li class="nav-item active">
        <a class="nav-link" href="faq.php">
          <i class="fa fa-question"></i>
          <span>F.A.Q</span></a>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">F.A.Q</h1><br>
                      
          </div>

           <div class="row">
  <?php 
if ($disease == 'Allergy') { ?>
            <!-- Area Chart -->
            
    <div class="jumbotron" >
        <div id="faq" class='container section faq'>
            <div class='title'>FAQs'</div>
            <button class="accordion">What is an allergy?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                One of the marvels of the human body is that it can defend itself against harmful invaders such as viruses or bacteria. In some people, the body reacts to harmless substances such as dust, mold or pollen by producing an antibody called immunoglobulin E (IgE). When patients with one of the allergic diseases (such as rhinitis or asthma) are exposed to these substances, the immune system then rallies its defenses, launching a host of complex chemical weapons to attack and destroy the supposed enemy. In the process, some unpleasant and, in extreme cases, life-threatening symptoms may be experienced.
            </div>
            </div>

            <button class="accordion">What causes an allergic reaction?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Hundreds or even thousands of ordinary substances can trigger allergic reactions. These are called "allergens." Among the most common are plant pollens, molds, household dust (dust mites), animal dander, industrial chemicals, foods, medicines and insect stings.
                An allergic reaction may occur anywhere in the body, but usually appears in the skin, eyes, lining of the stomach, nose, sinuses, throat and lungs -- places where special immune system cells are stationed to fight off invaders that are inhaled, swallowed or come in contact with the skin.
                </div>
            </div>

            <button class="accordion">Who develops allergies?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Allergies can affect anyone, regardless of age, gender, race or socioeconomic status. While it's true that allergies are more common in children, they can occur for the first time at any age or, in some cases, recur after many years of remission.
                Although the exact genetic factors are not yet understood, the tendency to allergies, as well as to allergic disease, is linked to heredity.
                </div>
            </div>

            <button class="accordion">Got more Questions?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Please mail us at <b>bleble@gmail.com</b>.
            </div>
            </div>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight !== "") {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            </script>
        </div>
    </div>
<?php } 
if ($disease == 'Obesity') { ?> 
 <div class="jumbotron" >
        <div id="faq" class='container section faq'>
            <div class='title'>FAQs'</div>
            <button class="accordion">What is the difference between being overweight and being obese?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Determining whether someone is overweight or obese is often determined by assessing a person's body mass index (BMI), which is a ratio between weight and height. If your BMI falls between 25 and 29.9, you are overweight. If your BMI is 30 or higher, you are considered obese.            </div>
            </div>

            <button class="accordion">What is the main cause of obesity?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Though genetics and cultural and environmental factors can lead to obesity, the main cause is eating too much and/or not getting enough exercise.
                </div>
            </div>

            <button class="accordion">What are the health risks of obesity?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Being obese puts you at risk for a number of preventable diseases and conditions, including heart disease, type 2 diabetes, high blood pressure, stroke, gallbladder disease, breathing problems, certain types of cancer, chronic back pain, and osteoarthritis. Obesity may also take a toll on self-esteem and contribute to depression.
                </div>
            </div>

            <button class="accordion">Am I a candidate for surgery to lose weight?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                You may be advised by your doctor to consider weight loss surgery if your body mass index (BMI) is 35 or higher and you have other risk factors, or is 40 or higher with no risk factors. Also taken into consideration is your medical history and your attempts to lose weight.
                </div>
            </div>

            <button class="accordion">Got more Questions?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Please mail us at <b>bleble@gmail.com</b>.
            </div>
            </div>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight !== "") {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            </script>
        </div>
    </div>
<?php } if ($disease == 'Alzheimer') { ?> 
 <div class="jumbotron" >
        <div id="faq" class='container section faq'>
            <div class='title'>FAQs'</div>
            <button class="accordion">What are early signs of Alzheimer's?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Early signs of the disease include memory loss that affects daily life; difficulty solving problems; trouble reading, judging distance, and determining color or contrast; misplacing things; and changes in mood or personality.
            </div>
            </div>

            <button class="accordion">What is sundown syndrome or sundowning?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                People with Alzheimer’s often experience significant changes in behavior in the late afternoon and early evening, which is triggered by fading light. This behavior can include yelling, pacing, mood swings, or hearing and seeing things that don’t exist. In order to mitigate the affects of sundown syndrome, it’s suggested that caregivers note the things that seem to trigger sundown syndrome and limit those triggers to the best of their ability.
                </div>
            </div>

            <button class="accordion">What are complications from Alzheimer's?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
               Some complications that may arise after developing Alzheimer’s including the inability to communicate if he or she is experiencing pain, follow a treatment plan, report medication side effects, describe or notice symptoms of another condition.
                </div>
            </div>

            <button class="accordion">Got more Questions?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Please mail us at <b>bleble@gmail.com</b>.
            </div>
            </div>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight !== "") {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            </script>
        </div>
    </div>
<?php } if ($disease == 'Anxiety') { ?> 
  <div class="jumbotron" >
        <div id="faq" class='container section faq'>
            <div class='title'>FAQs'</div>
            <button class="accordion">What are the five most common types of anxiety disorders?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Generalized Anxiety Disorder, Obsessive-Compulsive Disorder (OCD), Panic Disorder, Post-Traumatic Stress Disorder (PTSD) and Social Phobia (or Social Anxiety Disorder)
            </div>
            </div>

            <button class="accordion">How are anxiety disorders diagnosed?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Primary care physicians and psychiatrists diagnose someone as having an anxiety disorder if symptoms occur for six months on more days than not, and significantly interfere with the person’s ability to function at home, work or school.
                Doctors perform physical and psychological evaluations to rule out other causes for the symptoms of anxiety. Cardiovascular disease, thyroid problems, menopause, substance abuse and/or drug side effects, such as from steroids, may cause symptoms similar to those of an anxiety disorder.
                </div>
            </div>

            <button class="accordion">What are the risk factors for anxiety diosorders?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Researchers are finding that genetic and environmental factors are risk factors for anxiety disorders. Specific factors include: Shyness, or behavioral inhibition, in childhood, Being female, Having few economic resources, Being divorced or widowed, Exposure to stressful life events in childhood and adulthood, Anxiety disorders in close biological relatives, Parental history of mental disorders and Elevated afternoon cortisol levels in the saliva (specifically for social anxiety disorder)
                </div>
            </div>

            <button class="accordion">Got more Questions?</button>
            <div class="panel">
                <div style="margin-top: 10px;margin-bottom: 10px;">
                Please mail us at <b>bleble@gmail.com</b>.
            </div>
            </div>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function () {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight !== "") {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            </script>
        </div>
    </div>
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
