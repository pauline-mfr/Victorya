<?php
include('header.php');
?>

<div class="container-fluid fond" id="package">
<div class="row versiondesc">
  <div class="col-lg-6">
    <img alt="image1" src="img/im1.png" class="image1"/>
  </div>
  <div class="col-lg-6 col-sm-12">
    <h2 class="best">The best comfort food will<br> always be greens, cornbread,<br> and fried chicken.</h2>
    <p class="lorem">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam<br> nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam <br>erat, sed diam voluptua. At vero eos et accusam et justo duo dolores<br> et ea rebum. Stet clita kasd gubergren,</p>
      <button class="know"><a class="knowa">Know More About Us</a></button>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 imgdesc">
    <div class="row">
  <h2 class="food">The best comfort food will<br> always be greens, cornbread,<br> and fried chicken.</h2>
</div>
<div class="row">
  <p class="ipsum">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam<br> nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam <br>erat, sed diam voluptua. At vero eos et accusam et justo duo dolores<br> et ea rebum. Stet clita kasd gubergren,</p>
</div>
<div class="row">
        <button class="More"><a class="knowa">Know More About Us</a></button>
</div>
</div>

<div class="col-lg-6 imgdesc">
  <div class="row">
    <div class="col-lg-6">
      <img alt="image11" src="img/ima1.png" class="ima1">
    </div>
    <div class="col-lg-6">
      <img alt="image11" src="img/ima3.png" class="ima3">
      <img alt="image11" src="img/ima4.png" class="ima4">
    </div>
  </div>
</div>

</div>

</div>
<div class="container-fluid" id="about">
<div class="row">
  <div class="col-lg-12">
    <h2 class="explo">Explore Our Foods</h2>
    <p class="lo">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy<br> eirmod tempor invidunt ut labore et dolore magna.</p>
  </div>
</div>
</div>

<!-- SECTION DYNAMIQUE -->
<div class="container">

  <div class="row">
    <?php foreach ($ids as $id): ?>
    <div class="col-lg-4 col-xl-4 vf">
      <img src="img/<?= $id['image'] ?>" alt="image1" class="img11">
      <div class="texteimg">
        <h3 class="ham"><?= $id['title'] ?></h3>
        <h3 class="prix">$<?= $id['price'] ?></h3>
      <?php

      //if (isset($_SESSION['autoriser']))
    //  {
      ?>
      <!--<ul class="btnadmin">

      <button class="btnafficher">afficher</button>
      <button class="btnmodifier">modifer</button>
      <button class="btnsupprimer">supprimer</button>
      <button class="btnajouter">ajouter</button>
    </ul>-->
      <?php
      //}

      ?>

        <p class="description"><?= $id['description'] ?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

</div>
<div class="container-fluid">
  <div class="row">

      <h2 class="explo1">Our Popular Recipes</h2>
  </div>

  <div class="row">
    <?php
    include('slidere.php');
     ?>
 </div>
</div>



 <?php
 include('footer.php');
  ?>
