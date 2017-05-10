<?php
	include 'dbconn.php';

	$sql = "SELECT * FROM morris WHERE serial = '$serial'";
	if($result->num_rows > 0) {

	while ($row = mysqli_fetch_array($result)) {
		$serial = $row['serial'];
		echo "Serial # Found";
		}
	}
	else
	{
		echo "No found match";
	}
		
?>