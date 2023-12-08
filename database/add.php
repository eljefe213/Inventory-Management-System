<?php
	// start the session
	session_start();


	$table_name = $_SESSION['table'];
	$_SESSION['table'] = '';

	
	var_dump($_POST);



?>