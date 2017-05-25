<?php

	session_start();
	$school = $_SESSION['$school'];
	$url = $_SESSION['$url'];
	$serial = $_SESSION['$serialCarry'];

	include 'dbconn.php';
	include 'urlMsg.php';


	if(isset($_POST['deleteItem']))
	{
		//sets variables and runs query
		$serial = $_POST['serial'];

		//SQL query to delete a row
		$sql = "DELETE * FROM $school WHERE serial = '$serial'";
		$result = mysqli_query($conn, $sql);

			if ($result)
			{
				 header("Location: ../dawsonform.php?delete=success");
				 exit();
        	} 
        	else 
        	{
            	header("Location: ../dawsonform.php?delete=failed");
            	exit();
        	}
		mysqli_close($conn);
	}	


		