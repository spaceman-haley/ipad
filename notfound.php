<?php

	include 'dbconn.php';
	include 'header.php';

if(isset($_POST['serial'])){
	$serial = $_POST['serial'];
	$description = $_POST['description'];
	$funding = $_POST['funding'];
	$location = $_POST['location'];
	$found = $_POST['found'];

	//SQL query to insert new item
		$sql = "INSERT INTO $school (serial, description, funding, location, found) VALUES ('$serial', '$description', '$funding', '$location', '$found')" ;
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $sql)) {
		    echo "<div class = 'validation'>New record created successfully </div>";
		} 
		else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
			mysqli_close($conn);
		}		
		
	//form to insert
	echo "<form action='notfound.php' method = 'POST'>
		Serial Number: <input type='text' name='serial'><br>
		Description: <input type='text' name='description'><br>
		Funding Source: <input type='text' name='funding'><br>
		Location: <input type='text' name='location'><br>
		Found?: <input type='text' name='found'><br>
 
		<input type='submit' value='Submit'>
		</form>";
		

	
?>


