<?php
include('header.php');
?>

<div class="container-fluid package-bg" id="package">
<div class="row">
  <div class="col-lg-6">
    <img src="img/im1.png"  alt="meat dish" class="package-left-img"/>
  </div>
  <div class="col-lg-6 col-sm-12 package-right-text">
    <h2>The best comfort food will<br> always be greens, cornbread,<br> and fried chicken.</h2>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam<br> nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam <br>erat, sed diam voluptua. At vero eos et accusam et justo duo dolores<br> et ea rebum. Stet clita kasd gubergren,</p>
      <button><a class="package-btn">Know More About Us</a></button>
  </div>
</div>

<div class="row package-bottom">
  <div class="col-lg-6  col-md-12 package-left-text">
    <div class="row">
  <h2>The best comfort food will<br> always be greens, cornbread,<br> and fried chicken.</h2>
</div>
<div class="row">
  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,</p>
</div>
<div class="row">
        <button><a class="package-btn">Know More About Us</a></button>
</div>
</div>
<div class="col-lg-6">
  <div class="row">
    <div class="col-lg-6">
      <img src="img/ima1.png" alt="salad" class="package-img1">
    </div>
    <div class="col-lg-6">
      <img src="img/ima3.png" alt="pancakes" class="package-img2">
      <img src="img/ima4.png" alt="food" class="package-img3">
    </div>
  </div>
</div>
</div>
</div>

<div class="container-fluid" id="about">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2>Explore Our Foods</h2>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy<br> eirmod tempor invidunt ut labore et dolore magna.</p>
  </div>
</div>
</div>

<!-- SECTION DYNAMIQUE -->
<div class="container items">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php $ids = showAll(); foreach ($ids as $id): ?>
    <div class="col item">
      <div class="card">
      <img src="img/<?= $id['image'] ?>" alt="dish picture" class="card-img-top">
      <div class="card-body">
        <h3 class="card-title"><?= $id['title'] ?></h3>
        <h3 class="dynamic-price">$<?= $id['price'] ?></h3>
        <p class="card-text"><?= $id['description'] ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
</div>
<!-- FIN SECTION DYNAMIQUE -->
<!-- SLIDER -->
<div class="container-fluid recipes">
  <div class="row">
      <h2>Our Popular Recipes</h2>
  </div>
  <div class="row">
    <?php
    include('slider.php');
     ?>
 </div>
</div>
 <?php
 include('footer.php');
  ?>
