<?php
	session_start();
	$school = $_SESSION['$school'];
	$url = $_SESSION['$url'];
	//must assure every single page in website has this
	
	include 'dbconn.php';
	include 'urlMsg.php';
	//connect to database

	if(isset($_POST['updateItem'])) 
	{

		$edit_Post = $_POST['id'];
		$serial = $_POST['serial'];
		$description = $_POST['description'];
		$funding = $_POST['funding'];
		$location = $_POST['location'];
		$schoolID = $_POST['schoolID'];
		$found = $_POST['found'];

		$sql = "UPDATE $school SET serial = '$serial', description = '$description', funding = '$funding', location = '$location', schoolID = '$schoolID', found ='$found' WHERE ID = '$edit_Post'";

		if(mysqli_query($conn, $sql)) 
		{
			header("Location: ../$url?edit=success");
			exit();
		} 
		else 
		{
			header("Location: ../$url?edit=failed");
			exit();
		}
	

		if(!mysqli_query($conn, $sql)) 
		{
			header("Location: ../index.php?other=failed");
			exit();
		}
	}

