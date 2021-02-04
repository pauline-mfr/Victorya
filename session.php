<?php
  include("model/connexionparfait.php");
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css" />
	</head>
	<body>
		<header>
			Espace personnel
			<a href="model/deconnexion.php">Deconnexion</a>
		</header>
		<h1>
		<?php
			echo (date("H")<18)?("Bonjour"):("Bonsoir");
		?>
		<span>
		<?=$_SESSION["nomPrenom"]?>
		</span>
		</h1>
	</body>
</html>
