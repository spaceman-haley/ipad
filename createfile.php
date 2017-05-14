<?php
	include 'dbconn.php';


	// output headers so that the file is downloaded rather than displayed
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=data.csv');

	$sql = "SELECT * FROM dawson";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_Fetch_array($result, MYSQLI_NUM);
	$fp = fopen('data.csv', 'w');

	if($result->num_rows > 0) 
	{
		while($row = mysqli_fetch_array($result))
		{
			echo "fputcsv($fp, $row)";
		}
	}
				
	fclose($fp);
?>