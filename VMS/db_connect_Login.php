<?php

 $server = "localhost:3307";
$user = "root";
 $dbName = "db_vms"; 
 $pass = "";
	$link = mysqli_connect($server, $user, $pass, $dbName);
		if(!$link)
			die("Error connecting database");




?>