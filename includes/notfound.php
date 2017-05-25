<?php

	include 'dbconn.php';
	include 'header.php';
	
	session_start();
	$school = $_SESSION['$school'];
	$url = $_SESSION['$url'];
	
	if(isset($_POST['serial']))
	{
		$serial = $_POST['serial'];
		$description = $_POST['description'];
		$funding = $_POST['funding'];
		$location = $_POST['location'];
		$schoolID = $_POST['schoolID'];
		$found = $_POST['found'];

		//SQL query to insert new item

		$sql = "INSERT INTO $school (serial, description, funding, location, schoolID, found) VALUES ('$serial', '$description', '$funding', '$location', '$schoolID', $found')" ;
		$result = mysqli_query($conn, $sql);

		if ($result)
		{
			echo "<div class = 'validation'>New record created successfully. </div>";
		} 
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}	
	
	header("refresh: 2; url=$url");
?>


