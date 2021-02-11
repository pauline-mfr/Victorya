<?php require('dashboard-template.php'); ?>
        <!-- ADDING FORM -->
        <div class="row add-form mt-2">
          <div class="col-3">
            <h2 class="text-dark font-weight-bold mt-4 pl-5">Add</h2>
          </div>
          <div class="col-9">
  <div class="pl-5">
  <form action="../controler.php" method="POST" enctype='multipart/form-data' name="add-form">
    <div class="form-group pt-1">
      <label for="title">Title</label>
    <input name="title" placeholder="Pasta" type="text" class="form-control">
    <label for="desc">Description</label>
    <textarea name="desc" type="text" class="form-control" row="3"></textarea>
    <label for="price">Price</label>
    <input name="price" placeholder="12" type="number" class="form-control">
    <label for="img">Pick an image</label><br>
    <input type='file' name='img' class="form-control-file"><br>
    <label for="cat">Categorie</label>
    <select name="cat" multiple class="form-control">
      <option value="starter">Starter</option>
      <option value="main-course">Main Course</option>
      <option value="dessert">Dessert</option>
    </select>
    <button type="submit" name="save" class="btn btn-dark">Submit</button>
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
