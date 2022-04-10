<?php

	$server = "localhost:3307";
	$user = "root";
	$pass = "";
	$dbName = "db_vms";
	
	$link = mysqli_connect($server, $user, $pass, $dbName);
	
	if(!$link)
		die("Error".mysqli_error());
	

?>