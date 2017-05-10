<?php
	include 'dbconn.php';


	// output headers so that the file is downloaded rather than displayed
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=data.csv');

	$sql = "SELECT * FROM dawson";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_Fetch_array($result, MYSQLI_NUM);
	$fp = fopen('data.csv', 'w');

	
	fputcsv($fp, $row);
				
	fclose($fp);
?>