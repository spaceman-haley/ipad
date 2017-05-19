<?php
	ini_set( "display_errors", true );
	$server = 'localhost';
	$user = 'ipad';
	$password = 'sPangles&Glitter';
	$db = 'ipad';
	
	$conn = mysqli_connect($server, $user, $password, $db);
	
	if(!$conn) {
		die("Connection failed: ".mysqli_connect_error()); 
	}

  $mysqli = $conn;
	
?>
