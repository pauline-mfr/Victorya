<?php
session_start();

require('model.php');

//INSERT INTO
if (isset($_POST['save'])) {

  $title = $_POST['title'];
  if (empty($title)) {echo "Title is empty<br>";}
  $description = $_POST['desc'];
  if (empty($description)) {echo "Description is empty<br>";}
  $price = $_POST['price'];
  if (empty($price)) {echo "Price is empty<br>";}

  //IMG UPLOAD
  if(isset($_FILES['img'])){
  $img_name = $_FILES['img']['name'];
  $dir ='vue/img/'.$img_name;
  move_uploaded_file($_FILES['img']['tmp_name'], $dir);
  }

  if(isset($_POST['cat'])) {
    $category = $_POST['cat'];
  } else {
    echo "Category is missing";
  }

  if(!(empty($title)) && !(empty($description)) && !(empty($price)) && !(empty($category))) {
      addDish($title, $description, $price, $img_name, $category);
  }
} // END INSERT

// DELETE ENTRY
if(isset($_POST['delete'])) {
    echo '<script> alert ("You\'re about to delete this entry !")</script>';
  deleteDish();
}

// UPDATE FORM
if(isset($_POST['edit'])) {
  dishToUpdate();
  $_SESSION['update'] = dishToUpdate();
  header('Location: vue/edit.php');
}
 // UPDATE QUERY
 if(isset($_POST['update'])) {
   $new_title = $_POST['new_title'];
   $new_desc = $_POST['new_desc'];
   $new_price = $_POST['new_price'];
   $new_img_name = $_POST['same_img'];

   if (empty($new_title)) {echo "Title is empty<br>";}
   if (empty($new_desc)) {echo "Description is empty<br>";}
   if (empty($new_price)) {echo "Price is empty<br>";}

   //IMG UPLOAD
    if((is_uploaded_file($_FILES['new_img']['tmp_name'])) && (!empty($_FILES['new_img'])) ){
   $new_img_name = $_FILES['new_img']['name'];
   $dir ='vue/img/'.$new_img_name;
   move_uploaded_file($_FILES['new_img']['tmp_name'], $dir);
  }
   $new_cat = $_POST['new_cat'];

   if(!(empty($new_title)) && !(empty($new_desc)) && !(empty($new_price)) && !(empty($new_cat))) {
       updateDish($new_title, $new_desc, $new_price, $new_img_name, $new_cat);
   }
 } //END UPDATE QUERY

// CONNEXION
//   if(isset($_POST['username']) && isset($_POST['password']))
//   {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     adminConnect($username, $password);
// }
