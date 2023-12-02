<?php
	
	$servername = 'localhost'
	$username = 'root';
	$password = '';

	// connecting to database
	try {
		$conn = new PDO ("mysql:host=$username,$dbname=inventory,$username,$password");
		//set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo"connected successfully.";
		
	} catch (\Exception $e) {
		
	}

?>