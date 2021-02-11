<?php  include('../controler.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Back office</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href="css/back.css" type="text/css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <section class="container-fluid">
      <div class="row">
        <!-- SIDEBAR -->
        <div class="col-2 sidebar">
          <div class="row justify-content-center sidebar-icon">
            <button class="open-button"><img src="img/admin1.png" alt="admin icon" class="admin-icon my-4 pb-4"></button>
          </div>
          <div class="row pb-4 pt-5 mt-4">
            <div>
            <i class="fas fa-utensils text-light pl-2"></i>
            <button class="btn"><a href="dashboard.php"><h2>My sections</h2></a></button>
          </div>
          </div>
          <div class="row">
                  <!-- ADDING BUTTON -->
            <form method="POST" action="add.php">
              <i class="far fa-plus-square text-light pl-2 pb-5"></i>
            <button class="btn" type="submit" name="add"><h2>Add a section</h2></button>
            </form>
          </div>
          <div class="row">
            <div>
            <i class="fas fa-globe text-light pl-2"></i>
            <button class="btn"><a href="../index.php" target="_blank"><h2>Check website</h2></a></button>
          </div>
          </div>
        </div> <!-- END SIDEBAR -->
        <div class="col-10">
    <div class="row header mb-5">
      <div class="col-10">
      <h1 class="my-4 py-4 pl-5">Dashboard</h1>
    </div>
    <div class="col-2 my-4 py-4 header-icons">
<i class="far fa-bell pr-4"></i>
<i class="fas fa-envelope-open-text"></i>
</div>
    </div>
<!-- INSERT CONTENT -->
