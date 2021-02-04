<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=food","root","");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>
