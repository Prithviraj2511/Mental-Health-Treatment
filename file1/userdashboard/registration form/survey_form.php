<?php
session_start();
$username=$_Session['username'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kalsekar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$a=$_POST['age'];
$b=$_POST['gender'];
$c=$_POST['country'];
$d=$_POST['state'];
$e=$_POST['self_employed'];
$f=$_POST['family_history'];
$g=$_POST['treatment'];
$h=$_POST['work_interfere'];
$i=$_POST['no_employees'];
$j=$_POST['remote_work'];
$k=$_POST["tech_company"];
$l=$_POST["benefits"];
$m=$_POST["care_options"];
$n=$_POST['wellness_program'];
$o=$_POST['seek_help'];
$p=$_POST['anonymity'];
$q=$_POST['leave'];
$r=$_POST['mental_h_c'];
$s=$_POST['physical_h_c'];
$t=$_POST['coworkers'];
$u=$_POST['supervisor'];
$v=$_POST['mental_interview'];
$w=$_POST['physical_interview'];
$x=$_POST['m_v_p'];
$y=$_POST['obs_consequence'];
$z=$_POST['comment'];
  

$entered=mysqli_query($conn, "INSERT INTO `survey`(`Age`, `Gender`, `Country`, `state`, `self_employed`, `family_history`, `treatment`, `work_interfece`, `no_employees`, `remote_work`, `tech_company`, `benefits`, `care_options`, `wellness_program`, `seek_help`, `anonymity`, `leave_`, `mental_health_consequence`, `phys_health_consequence`, `coworkers`, `supervisor`, `mental_health_interview`, `phys_health_interview`, `mental_vs_physical`, `obs_consequence`, `comments`, `username`) VALUES  ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$username')");
if($entered)
{
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

#$conn->close();
header("location:display.php")

?>