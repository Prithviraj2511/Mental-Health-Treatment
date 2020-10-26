<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="row" style="margin-left: 270px; margin-top: 70px;">
      <div class="col-md-6">
         <div class="card text-white bg-primary flex-md-row mb-4 shadow-sm h-md-250" style="width:800px;height: 500px;">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-white">Your Results</strong>
               <div class="mb-1 text-white-50 small">March 7 2020</div>
               <?php
               $conn=mysqli_connect("localhost","root","", "kalsekar");
               $sql="select * from result_table where username='doe'";
               $result=$conn->query($sql);
               if($result->num_rows>0){
                 $row=$result->fetch_assoc();

                   $treat=$row['result'];
                   
                   if($treat==1){
                    echo "<p class=\"c ard-text mb-auto\">You need Treatment.There is a possibility that you may be suffering from a mental disease. We reccomend that you consult a Doctor as soon as possible. We are here to help you out in every possible way! Consult a doctor on your dashboard or book an appointment.</p>";
                   }
                   else{
                    echo "<p class=\"c ard-text mb-auto\">You do not need Treatment. Yay! you are in a state of Proper Mental Wellness. Physical and Mental Health are both equally important. Make it a point to give your Mental peace and well being full attention from time to time. Stay healthy!</p>";
                   }
                 }
               #}
               ?>
               
               <a class="btn btn-outline-light btn-sm" role="button" href="../userdashboard.php">Back to Dashboard</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="images/result.jpg" style="width: 300px; height: 500px;">
         </div>
      </div>
  </body>
</html>