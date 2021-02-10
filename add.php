<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Back office</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<link href="vue/back.css" type="text/css" rel="stylesheet">
<link href="vue/css/main.css" type="text/css" rel="stylesheet">
</head>
<body>
  <section class="container-fluid">
    <div class="row">
      <!-- SIDEBAR -->
      <div class="col-2 sidebar">
        <div class="row">
          <img src="vue/img/admin1.png" alt="admin icon" class="admin-icon my-4 pb-4">
        </div>
        <div class="row pb-4 pt-5 mt-5">
          <div>
          <i class="fas fa-utensils text-light pl-2"></i>
          <button class="btn"><h2>My sections</h2></button>
        </div>
        </div>
        <div class="row">
                <!-- ADDING FORM -->
          <form method="POST" action="add.php">
            <i class="far fa-plus-square text-light pl-2 pb-5"></i>
          <button class="btn" type="submit" name="add"><h2>Add a section</h2></button>
          </form>
        </div>
        <div class="row">
          <div>
          <i class="fas fa-globe text-light pl-2"></i>
          <button class="btn"><h2>Check website</h2></button>
        </div>
        </div>
      </div>
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
  <h1>Add</h1>

  <form action="traitement.php" method="POST" enctype='multipart/form-data' name="add-form">
    <input name="title" placeholder="Title"></input><br><br>
    <input name="desc" placeholder="Description"></input><br><br>
    <input name="price" placeholder="Price"></input><br><br>
    <label for="img">Pick an image </label><input type='file' name='img'></input><br><br>
    <label for="cat">Categorie</label><br><br>
    <select name="cat">
      <option value="starter">Starter</option>
      <option value="main-course">Main Course</option>
      <option value="dessert">Dessert</option>
    </select>
    <button type="submit" name="save">OK</button>
  </form>
</div>
</div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
