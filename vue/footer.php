<footer class="container-fluid">
  <div class="container">
    <img src="img/Groupe 100.png" class="left-img" alt="dots"/>
    <img src="img/Groupe 100.png" class="right-img" alt="dots"/>
    <img src="img/Rectangle 104.png" class="cadre" alt="rectangle"/>
    <h2>Want to get the latest Updates?</h2>
    <label for="email"></label>
    <input type="email" id="email" name="email" placeholder="example@yourmail.com">
    <button class="contact-btn"><span class="subscribe">Subscribe</span><img src="img/Tracé 465.png" class="imgsubscribe" alt="paper place icon"/></button>
  </div>
  <!-- END CONTACT SECTION -->
  <div class="container bottom-menu">
    <label class="bottom-logo">Victorya</label>
    <a href="#menu" class="active">Menu</a>
    <a href="#package" class="bottom-link">Package</a>
    <a href="#about" class="bottom-link">About us</a>
    <a href="#contact"class="bottom-link">Contact us</a>
  </div>
  <p class="copyright">Copyright©Arifur Rahman, 2019. All rights reserved</p>
</footer>
<?php unset($_SESSION['error']); ?>
<?php unset($_SESSION['username']); ?>
<script type="text/javascript" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/5bf2af5d34.js" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $('#toogle-menu').click(function(){
    $('ul').toggleClass('show')
  });
});

</script>
</body>
</html>
