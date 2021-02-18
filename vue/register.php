<?php require_once('../controler.php');
if ($_SESSION['username'] == false) {
  header('Location: ../index.php');
} ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Back office</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link href="css/back.css" type="text/css" rel="stylesheet">
<script src="https://kit.fontawesome.com/5bf2af5d34.js" crossorigin="anonymous"></script>
</head>
<body>
  <section class="container-fluid">
    <div class="row">
      <!-- SIDEBAR -->
      <div class="col-lg-2 col-md-3 sidebar vh">
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
      </div>
      <div class="col-lg-10 col-md-9">
  <div class="row header mb-1">
    <div class="col-md-8 col-10">
    <h1 class="my-4 py-4 pl-5">Dashboard</h1>
  </div>
  <div class="col-md-4 col-2 my-4 py-4 header-icons">
<i class="far fa-bell pr-4"></i>
<i class="fas fa-envelope-open-text pr-4"></i>
<a href="home.php"><i class="fas fa-sign-out-alt"></i></a>
</div>
  </div>
        <!-- REGISTER ADMIN FORM -->
        <div class="row add-form mt-2">
          <div class="col-lg-3">
            <h2 class="text-dark font-weight-bold mt-4 pl-5">Register</h2>
          </div>
          <div class="col-lg-9">
  <div class="pl-5">
  <form action="../controler.php" method="POST" name="register-form">
    <div class="form-group pt-1">
      <label for="register_username">Enter the username</label>
    <input name="register_username" type="text" class="form-control" required>
    <label for="register_password">Enter the password</label>
    <input name="register_password" type="password" class="form-control" required>
    <label for="confirm_password">Enter the password again</label>
    <input name="confirm_password" type="password" class="form-control" required><br>
    <button type="submit" name="register" class="btn btn-dark">Register</button>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
