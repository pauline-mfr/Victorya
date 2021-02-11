<?php require('dashboard-template.php');
$toUpdate = $_SESSION['update']; ?>

  <!-- EDIT FORM -->
  <div class="row add-form mt-2">
    <div class="col-3">
      <h2 class="text-dark font-weight-bold mt-4 pl-5">Edit entry</h2>
      <?php if(isset($_SESSION['message'])){
          echo "<p>". $_SESSION['message']. "</p>";
      }?>
    </div>
    <div class="col-9">
<div class="pl-5">
  <form action="../controler.php" method="POST" enctype="multipart/form-data" name="edit-form">
    <div class="form-group pt-1">
      <label for="new_title">New title</label>
    <input class="form-control" name="new_title" value="<?= $toUpdate[0]['title']?>"></input>
    <label for="new_desc">New description</label>
    <input class="form-control" name="new_desc" value="<?= $toUpdate[0]['description']?>"></input>
    <label for="new_price">New price</label>
    <input class="form-control" name="new_price" value="<?= $toUpdate[0]['price']?>"></input>
    <label>The actual image</label><br>
    <img src="img/<?= $toUpdate[0]['image'] ?>" alt="" style="width: 15%; height: 15%;"><br><br>
    <label for="new_img">Change the picture</label></br>
    <input name="same_img" type="hidden" value="<?= $toUpdate[0]['image'] ?>">
    <input class="form-control-file" type="file" name="new_img" class="btn btn-outline-primary"></input><br><br>
    <label for="new_cat">Change categorie</label></br>
    <select name="new_cat">
      <option value="<?= $toUpdate[0]['category']?>"><?= $toUpdate[0]['category'] ?> </option>
      <option value="starter">Starter</option>
      <option value="main-course">Main Course</option>
      <option value="dessert">Dessert</option>
    </select><br></br>
    <button class="btn btn-dark" type="submit" name="update" value= "<?= $toUpdate[0]['id'] ?>">Update</button>
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
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
