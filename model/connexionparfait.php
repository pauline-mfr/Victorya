<?php
	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("../index.php");
		exit();
	}
?>
