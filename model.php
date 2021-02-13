<?php

function dbConnect() {

$servername = "localhost";
$dbname = "food"; //nom de la database
$username = "root";
$password = "";

// DATABASE CONNEXION
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e) { // si connexion échoue
  die("Connection failed" . $e->getMessage());   //message d'erreur
}

// CREATE DISH TABLE
$sql= "CREATE TABLE IF NOT EXISTS `dish` (
   `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
   `title` VARCHAR(50) NOT NULL ,
   `description` VARCHAR(255) NOT NULL ,
   `price` FLOAT NOT NULL ,
   `image` VARCHAR(255) NULL DEFAULT NULL ,
   `category` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;
)";
$request = $conn->prepare($sql);
$request->execute();
$request->closeCursor();

// CREATE ADMIN TABLE
$sql_adm = "CREATE TABLE IF NOT EXISTS `admin` (
   `id` INT NOT NULL AUTO_INCREMENT,
   `username` VARCHAR(50) NOT NULL,
   `password` VARCHAR(100) NOT NULL,
   PRIMARY KEY (`id`)
 ) ENGINE=MyISAM;";
 $request = $conn->prepare($sql_adm);
 $request->execute();
 $request->closeCursor();

return $conn;
} // END CONNECT

// AFFICHAGE
function showAll() {

$conn = dbConnect();

$sql = "SELECT * FROM `dish`";
$request = $conn->prepare($sql);
$request->execute();
$ids = $request->FetchAll();
//$ids = contient les données
$request->closeCursor();
return $ids;
} // END SHOW ALL


// INSERT
function addDish($title, $description, $price, $img_name, $category) {

$conn = dbConnect();

$sql = "INSERT INTO `dish` (`title`,`description`,`price`, `image`, `category`)
	 VALUES ('$title','$description','$price', '$img_name', '$category')";
   $request = $conn->prepare($sql);
   if($request->execute()) {
     $_SESSION['message'] = "Section added successfully";
     header('Location: vue/dashboard.php');
   }else{
     $_SESSION['message'] = "Section could not be added : please try again";
     header('Location: vue/dashboard.php');
   }
   $request->closeCursor();
} // END INSERT

// DELETE ENTRY
function deleteDish() {
  $conn = dbConnect();

  $sql = "DELETE FROM `dish` WHERE `id` = :id";
  $request = $conn->prepare($sql);
  $array = [
    ":id" => $_POST['delete']
  ];
  if($request->execute($array)) {
    $_SESSION['message'] = "Delete complete";
    header('Location: vue/dashboard.php');
  }else{
    $_SESSION['message'] = "Delete fail : please try again";
    header('Location: vue/dashboard.php');
  }
  $request->closeCursor();
} // END DELETE


function dishToUpdate() {

  $conn = dbConnect();

  $sql = "SELECT * FROM `dish` WHERE `id` = :id ";
  $request = $conn->prepare($sql);
  $array = [
    ":id" => $_POST['edit']
  ];
  $request->execute($array);
  $toUpdate = $request->FetchAll();
  //$toUpdate = contient les données
  $request->closeCursor();
  return $toUpdate;

} // END to update

function updateDish($new_title, $new_desc, $new_price, $new_img_name, $new_cat) {

  $conn = dbConnect();

   $sql = "UPDATE `dish` SET `title` = '$new_title', `description` = '$new_desc', `price` = '$new_price', `image` = '$new_img_name', `category` = '$new_cat' WHERE `id` = :id";
   $request = $conn->prepare($sql);
   $array = [
     ":id" => $_POST['update']
   ];
   if($request->execute($array)) {
     $_SESSION['message'] = "Update complete";
     header('Location: vue/dashboard.php');
   }else{
     $_SESSION['message'] = "Update fail : please try again";
     header('Location: vue/dashboard.php');
   }
   $request->closeCursor();
 } // END UPDATE

// ADMIN LOGIN
// function adminConnect($username, $password) {
//   $conn = dbConnect();
//
//   $sql = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
//   $run = mysqli_query($conn,$sql) or die(mysqli_error($conn));
//   if (mysqli_num_rows($run)==1) {
//     header('Location: vue/dashboard.php');
//   }else{
//   echo 'wrong combination, could not log';
//   }
//   $request->closeCursor();
// }

// $sql = "INSERT INTO `admin` (`id`, `username`, `password`) VALUES
//   (1, 'main-admin', 'GF48Hga'),
//   (2, 'admin1', 'MP79Rt4'),
//   (3, 'admin2', '47WEK73un')";
//   $request = dbConnect()->prepare($sql);
//   $request->execute();
//   $request->closeCursor();
