<?php

	//SQL query to insert new row into table
	$sql = "SELECT * FROM dawson WHERE serial = '$serial'";
	$result = mysqli_query($conn, $sql);
	
	if($result->num_rows > 0) 
	{
		while ($row = mysqli_fetch_array($result)) 
		{
			echo "Serial # Found <br>";
			echo "MARKED AS FOUND";

			$sql_one = "UPDATE $school SET found = 'true' WHERE serial = '$serial'";
			$result_one = mysqli_query($conn, $sql_one);
			
		}
	}

	else
	{

		echo "No found match.  Please insert a new item into the database. <br>
		<form action="'dawsonform.php'" method = "POST">
  		Serial Number: <input type="text" name="serial"><br>
  		Description: <input type="text" name="description"><br>
  		Location: <input type = "text" name = "location"><br>
  		Funding: <input type = "text" name = "funding"<br>
  		Found?: <input type = "text" name = "found"</br>
 
  		<input type="submit" value="UPDATE">
		</form>";

		$serial = _POST['serial'];
		$location = _POST['location'];
		$funding = _POST['funding'];
		$found = _POST['found'];
		$description = _POST['description'];

		$sql_two = "INSERT * $school

		

	}
?>