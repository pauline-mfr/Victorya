<?php
session_start();
require('model.php');

// FILTER DATA
function filterData($data) {
        $data = htmlspecialchars($data); //special caracters
        $data = trim($data); // delete useless spaces
        $data = stripslashes($data); //strip backslashes
        $data = strip_tags($data); //strip html tags
        return $data;
        //htmlentities
    }


//INSERT INTO
if (isset($_POST['save'])) {

  $title = filterData($_POST['title']);
  if (empty($title)) {echo "Title is empty<br>";}
  $description = filterData($_POST['desc']);
  if (empty($description)) {echo "Description is empty<br>";}
  $price = filterData($_POST['price']);
  if (empty($price)) {echo "Price is empty<br>";}

  //IMG UPLOAD
  if($_FILES['img']['error']!=4){
    $extensions_img = array('png', 'gif', 'jpg', 'jpeg', 'JPG', 'bmp');
    if(!in_array(substr(strrchr($_FILES['img']['name'], '.'), 1), $extensions_img)) {
     $img_name = NULL;
   } else {
  $img_name = $_FILES['img']['name'];
  $dir ='vue/img/'.$img_name;
  // from > to
  move_uploaded_file($_FILES['img']['tmp_name'], $dir);
  }
}
  if(isset($_POST['cat'])) {
    $category = filterData($_POST['cat']);
  } else {
    echo "Category is missing";
  }

  if(!(empty($title)) && !(empty($description)) && !(empty($price)) && !(empty($category))) {
      addDish($title, $description, $price, $img_name, $category);
  }
} // END INSERT

// DELETE ENTRY
if(isset($_POST['delete'])) {
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
   $new_title = filterData($_POST['new_title']);
   $new_desc = filterData($_POST['new_desc']);
   $new_price = filterData($_POST['new_price']);
   $new_img_name = filterData($_POST['same_img']);

   if (empty($new_title)) {echo "Title is empty<br>";}
   if (empty($new_desc)) {echo "Description is empty<br>";}
   if (empty($new_price)) {echo "Price is empty<br>";}

   //IMG UPLOAD
    if($_FILES['new_img']['error']!=4){
      $extensions_ok = array('png', 'gif', 'jpg', 'jpeg', 'JPG', 'bmp');
      if(!in_array(substr(strrchr($_FILES['new_img']['name'], '.'), 1), $extensions_ok)) {
       $new_img_name = NULL;
    }else{
   $new_img_name = $_FILES['new_img']['name'];
   $dir ='vue/img/'.$new_img_name;
   move_uploaded_file($_FILES['new_img']['tmp_name'], $dir);
  }
}
   $new_cat = filterData($_POST['new_cat']);

   if(!(empty($new_title)) && !(empty($new_desc)) && !(empty($new_price)) && !(empty($new_cat))) {
       updateDish($new_title, $new_desc, $new_price, $new_img_name, $new_cat);
   }
 } //END UPDATE QUERY

// // CONNEXION
//   if(isset($_POST['connect']) && (isset($_POST['username']) && isset($_POST['password'])) )
//   {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     adminConnect($username, $password);
// } // END CONNEXION
