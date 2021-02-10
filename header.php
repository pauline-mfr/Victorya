<?php
	session_start();
	 include('traitement.php');
	@$login=$_POST["login"];
	@$pass=$_POST["pass"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		include("model/connexion.php");
		include("model/traitement.php");
		$res=$pdo->prepare("select * from admin where email=? and pass=? limit 1");
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array($login,md5($pass)));
		$tab=$res->fetchAll();
		if(count($tab)==0)
			$message="<li>Mauvais login ou mot de passe!</li>";
		else{
      //variable de session
			$_SESSION["autoriser"]="oui";
			$_SESSION["nomPrenom"]="rajae farhane";
			header("location:back.php");
		}
	}
?>
<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Victorya-restaurant</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="vue/css/main.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		 <script type="text/javascript" src="vue/js/main.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script>$(document).ready(function(){
		  $('#icone').click(function(){
		    $('ul').toggleClass('show')
		  });
		});</script>
  </head>
	<body>

<!-- HEADER -->
<header class="container-fluid" id="menu">
	    <nav>
      <h1 class="logo">Victorya</h1>
      <ul>
        <li><a href="#menu" class="active">Menu</a></li>
        <li><a href="#package">Package</a></li>
        <li><a href="#about">About us</a></li>
        <li><a href="#contact">Contact us</a></li>
      </ul>
      <button class="open-button" onclick="openForm()"><img src="vue/img/admin1.png" class="admin-icon"></button>
			<label id="icone">
				<i class="fas fa-bars"></i>
			</label>
			    </nav>


      <?php
if (isset($_SESSION['autoriser']))
{
?>
<li id="dec"><a href="back.php"> <?=$_SESSION["nomPrenom"]?></a></li>
<li id="dec1"><a href="model/deconnexion.php">Deconnexion</a></li>
<?php
}
?>
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
     <form action=""name="fo" method="post" class="form-container">
       <label for="email">
       <strong>E-mail</strong>
       </label>
       <input type="text" id="email" placeholder="Votre Email" name="login" required>
       <label for="psw">
       <strong>Mot de passe</strong>
       </label>
       <input type="password" id="psw" placeholder="Votre Mot de passe" name="pass" required>
       <?php   include("messageerreur.php"); ?>
       <button type="submit" class="btn" name="valider">Se connecter</button>
       <button type="button" class="btn cancel" onclick="closeForm()">Annuler</button>
     </form>
   </div>
 </div>
