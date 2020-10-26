<? php
#session_start();
include 'dbh.php';
$username=$_SESSION['name'];

$sql = "select score from posts where username='.$username.'";
if(!$conn->query($sql)){
    echo "NOOOOO";}
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$sc=$row['score'];
echo "$sc";
$sc=$sc+1;
echo "$sc";
$sql = "INSERT INTO posts(score) values('$sc')";
$conn->query($sql)
$conn->close();
header("location:chat.php");
?>