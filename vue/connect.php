<?php
$servername = "localhost";
$dbname = "food"; //nom de la database
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  if(isset($_POST['username']) && isset($_POST['password']))
  {
    $username = filterData($_POST['username']);
    $password = filterData($_POST['password']);
    $request = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $run = mysqli_query($conn,$request) or die(mysqli_error($conn));

    if (mysqli_num_rows($run)==1)
    {
      header("location: dashboard.php");
    }else{
      $_SESSION['error'] = "Wrong combination, could not log";
    }
}
//MP79Rt4
//$password = password_hash($pass , PASSWORD_DEFAULT)
