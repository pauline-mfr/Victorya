<?php
include('../controler.php'); ?>
<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Victorya-restaurant</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  </head>
	<body>

<!-- HEADER -->
<header class="container-fluid" id="menu">
	    <nav id="toogle-menu">
      <h1 class="logo">Victorya</h1>
      <ul id="menu-close">
        <li><a href="#menu" class="active">Menu</a></li>
        <li><a href="#package">Package</a></li>
        <li><a href="#about">About us</a></li>
        <li><a href="#contact">Contact us</a></li>
      </ul>
      <button class="open-button" onclick="openForm()"><img src="img/admin1.png" class="admin-icon"></button>
			<label id="icone">
				<i class="fas fa-bars"></i>
			</label>
			    </nav>

<div>
  <h2>Good food choices are <br>
  good investments.</h2>
  <p>There is a powerful need for symbolism, and that means the architecture must <br>have something that appeals to the human heart.</p>
  <button class="header-btn"><a>Order Now</a></button>
</div>
</header>

<!-- Admin form -->
  <div class="login-popup">
   <div class="form-popup" id="popupForm">
     <form action="connect.php" name="connexion" method="POST" class="form-container">
       <label for="username">
       <strong>Username</strong>
       </label>
       <input type="text" id="username" placeholder="Username" name="username" required>
       <label for="password">
       <strong>Password</strong>
       </label>
       <input type="password" id="psw" placeholder="Password" name="password" required>
       <?php if(isset($message)) {echo $message;}; ?>
       <button type="submit" class="btn" name="connect">Connexion</button>
       <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
     </form>
   </div>
 </div>
