<?php
	$username = 'jp465';
	$password = 'eEOVTlIX';
	$hostname = 'sql1.njit.edu';

	$dsn = "mysql:host=$hostname;dbname=$username";

	try{
		$db = new PDO($dsn,$username,$password);
		echo "Connected Successfully<br><br>";
	}catch(PDOException $error){
		echo '<h3>DB Error</h3>';
		echo $error->getMessage();
		exit();
	}catch(Exception $error){
		echo '<h3>Generic</h3>';
		echo $error->getMessage();
		exit();
	}

?>

