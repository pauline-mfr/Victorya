<?php

function dbConnect() {

$servername = "localhost";
$dbname = "food";
$username = "root";
$password = "";

// DATABASE CONNEXION
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e) { // if connexion fails
  die("Connection failed" . $e->getMessage()); // display error message
}

// CREATE DISH TABLE
$sql= "CREATE TABLE IF NOT EXISTS `dish` (
   `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
   `title` VARCHAR(50) NOT NULL ,
   `description` VARCHAR(255) NOT NULL ,
   `price` FLOAT NOT NULL ,
   `image` VARCHAR(255) NULL DEFAULT NULL ,
   `category` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";
$request = $conn->prepare($sql);
$request->execute();
$request->closeCursor();

// CREATE ADMIN TABLE
$sql_adm = "CREATE TABLE IF NOT EXISTS `admin` (
   `id` INT NOT NULL AUTO_INCREMENT,
   `username` VARCHAR(50) NOT NULL,
   `password` VARCHAR(100) NOT NULL, PRIMARY KEY (`id`)) ENGINE=MyISAM;";
 $request = $conn->prepare($sql_adm);
 $request->execute();
 $request->closeCursor();

return $conn;
} // END OF DATABASE CONNEXION

// DISPLAY SECTIONS
function showAll() {

$conn = dbConnect();

$sql = "SELECT * FROM `dish`";
$request = $conn->prepare($sql);
$request->execute();
$ids = $request->FetchAll();
//$ids = contains the datas
$request->closeCursor();
return $ids;
} // END OF DISPLAY


// ADD NEW SECTION
function addDish($title, $description, $price, $img_name, $category) {
  $conn = dbConnect();

  $sql = "INSERT INTO `dish` (`title`,`description`,`price`, `image`, `category`)
  VALUES (:title,:description,:price, :img_name, :category)";

  $request = $conn->prepare($sql);
  $request->bindValue(':title', $title, PDO::PARAM_STR);
  $request->bindValue(':description', $description, PDO::PARAM_STR);
  $request->bindValue(':price', $price, PDO::PARAM_STR);
  $request->bindValue(':img_name', $img_name, PDO::PARAM_STR);
  $request->bindValue(':category', $category, PDO::PARAM_STR);
  
  if($request->execute()) {
    $_SESSION['message'] = "Section added successfully";
    header('Location: vue/dashboard.php');
    if($_FILES['img']['error']!=4 && $img_name==NULL) {
      $_SESSION['message'] .= "<br>The submitted file was nos an image, please try to upload once again";
    }
  }else{
    $_SESSION['message'] = "Section could not be added : please try again";
    header('Location: vue/dashboard.php');
  }
  $request->closeCursor();
} // END OF INSERT

// DELETE ENTRY
function deleteDish() {
  $conn = dbConnect();

  $sql = "DELETE FROM `dish` WHERE `id` = :id";
  $request = $conn->prepare($sql);
  $request->bindValue(':id', filterData($_POST['delete']), PDO::PARAM_STR);
  if($request->execute()) {
    $_SESSION['message'] = "Delete complete";
    header('Location: vue/dashboard.php');
  }else{
    $_SESSION['message'] = "Delete fail : please try again";
    header('Location: vue/dashboard.php');
  }
  $request->closeCursor();
} // END OF DELETE


function dishToUpdate() {
  $conn = dbConnect();

  $sql = "SELECT * FROM `dish` WHERE `id` = :id ";
  $request = $conn->prepare($sql);
  $request->bindValue(':id', filterData($_POST['edit']), PDO::PARAM_STR);
  $request->execute();
  $toUpdate = $request->FetchAll();
  //$toUpdate = contient les données
  $request->closeCursor();
  return $toUpdate;
} // END to update

function updateDish($new_title, $new_desc, $new_price, $new_img_name, $new_cat) {
  $conn = dbConnect();

   $sql = "UPDATE `dish` SET `title` = :title, `description` = :description, `price` = :price, `image` = :img_name, `category` = :category WHERE `id` = :id";
   $request = $conn->prepare($sql);
   $request->bindValue(':title', $new_title, PDO::PARAM_STR);
   $request->bindValue(':description', $new_desc, PDO::PARAM_STR);
   $request->bindValue(':price', $new_price, PDO::PARAM_STR);
   $request->bindValue(':img_name', $new_img_name, PDO::PARAM_STR);
   $request->bindValue(':category', $new_cat, PDO::PARAM_STR);
   $request->bindValue(':id', filterData($_POST['update']), PDO::PARAM_STR);
   if($request->execute()) {
     $_SESSION['message'] = "Update complete";
     header('Location: vue/dashboard.php');
     if($_FILES['new_img']['error']!=4 && $new_img_name==NULL) {
       $_SESSION['message'] .= "<br>The submitted file was nos an image, please try to upload once again";
     }
   }else{
     $_SESSION['message'] = "Update fail : please try again";
     header('Location: vue/dashboard.php');
   }
   $request->closeCursor();
 } // END UPDATE
