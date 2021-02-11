<?php
session_start();

require('model.php');

//INSERT INTO
if (isset($_POST['save'])) {
  $title = $_POST['title'];
  if (empty($title)) {echo "Title is empty";}
  $description = $_POST['desc'];
  if (empty($description)) {echo "Description is empty";}
  $price = $_POST['price'];
  if (empty($price)) {echo "Price is empty";}

  //IMG UPLOAD
  if(isset($_FILES['img'])){
  $img_name = $_FILES['img']['name'];
  $dir ='vue/img/'.$img_name;
  move_uploaded_file($_FILES['img']['tmp_name'], $dir);
  }

  $category = $_POST['cat'];
  if (empty($category)) {echo "Category is missing";}

  addDish($title, $description, $price, $img_name, $category);

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
  var_dump($_SESSION['update']);
  header('Location: vue/dashboard/edit.php');
}
 // UPDATE QUERY
 if(isset($_POST['update'])) {
   $new_title = $_POST['new_title'];
   $new_desc = $_POST['new_desc'];
   $new_price = $_POST['new_price'];
   $new_img_name = $_POST['same_img'];

   //IMG UPLOAD
    if((is_uploaded_file($_FILES['new_img']['tmp_name'])) && (!empty($_FILES['new_img'])) ){
   $new_img_name = $_FILES['new_img']['name'];
   $dir ='vue/img/'.$new_img_name;
   move_uploaded_file($_FILES['new_img']['tmp_name'], $dir);
  }
   $new_cat = $_POST['new_cat'];
   updateDish($new_title, $new_desc, $new_price, $new_img_name, $new_cat);
 }
