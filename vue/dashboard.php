<?php require('dashboard-template.php'); ?>

<!-- SECTIONS -->
<div class="row row-cols-1 row-cols-md-3 g-4 sections">
  <?php $ids = showAll(); foreach ($ids as $id): ?>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $id['title'] ?>
         <form method="POST" action="../controler.php" id="edit-options">
       <button class="btn" type="submit" name="edit" value="<?= $id['id'] ?>"><i class="fas fa-edit"></i></button>
       <button class="btn" type="submit" name="delete" value="<?= $id['id'] ?>"><i class="far fa-trash-alt"></i></button>
     </form></h5>
     <img src="img/<?= $id['image'] ?>" class="card-img-top" alt="<?= $id['image'] ?>">
        <p class="card-text"><?= $id['description'] ?></p>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Price :</strong> <?= $id['price'] ?>€</li>
        <li class="list-group-item"><strong>Category : </strong><?= $id['category'] ?></li>
      </ul>
      </div>
    </div>
  </div>
   <?php //$_SESSION = $id;  //-> skipping numeric
  endforeach; ?>
</div>
</div>
</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  </body>
</html>
