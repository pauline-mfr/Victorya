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

//function addAdmin() {
 $sql = "INSERT INTO `admin` (`id`, `username`, `password`) VALUES (:username, :password)";
 $request = $conn->prepare($sql);
 $username= 'main-admin';
 $request->bindValue(':username', $username, PDO::PARAM_STR);
 $password = password_hash('GF48Hga', PASSWORD_DEFAULT);
 $request->bindValue(':password', $password, PDO::PARAM_STR);
 $request->execute();
 $request->closeCursor();
//   (1, 'main-admin', 'GF48Hga'),
//   (2, 'admin1', 'MP79Rt4'),
//   (3, 'admin2', '47WEK73un')";
//   $request = dbConnect()->prepare($sql);
//   $request->execute();
//   $request->closeCursor();
//}
//MP79Rt4
//$password = password_hash($pass , PASSWORD_DEFAULT)
