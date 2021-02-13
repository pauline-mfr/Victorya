<?php
include('../model.php');

$servername = "localhost";
$dbname = "food"; //nom de la database
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  if(isset($_POST['username']) && isset($_POST['password']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $request = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $run = mysqli_query($conn,$request) or die(mysqli_error($conn));

    if (mysqli_num_rows($run)==1)
    {
      header("location: dashboard.php");
      exit();
    }else{
      echo "cet utilisateur n'existe pas";
      exit();
    }

}
