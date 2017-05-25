<?php

	include 'include/urlMsg.php';

	//checking to see if the variable has been set before executing		
	if(isset($_POST['serial']))
	{
		//sets variables and runs query
		$serial = $_POST['serial'];

		//SQL query to search for new serial number
		$sql = "SELECT * FROM $school WHERE serial = '$serial'";
		$result = mysqli_query($conn, $sql);
		
		if($result->num_rows > 0) 
		{
			$row = mysqli_fetch_array($result); 
			
			echo "<div class = 'validation'>Scan successful <br>";
			echo "MARKED AS FOUND
			</div>
			";
			// query to update found variable to true when found
			$sql_one = "UPDATE $school SET found = 'true' WHERE serial = '$serial'";
			$result = mysqli_query($conn, $sql_one);	
		

			//displays current information for updating purposes
			echo "
				<form action = 'include/update.php' method = 'POST'>
			
					<input type = 'hidden' name = 'id' value = '" .$row['ID']. "'>

					<label for = 'serial'>Serial Number</label>
					<input type = 'text' name = 'serial' value = '" .$row['serial']. "'><br>
					
					<label for = 'description'>Description</label>
					<input type = 'text' name = 'description' value = '" .$row['description']. "'><br>

					<label for = 'funding'>Funding Source</label>
					<input type = 'text' name = 'funding' value = '" .$row['funding']. "'><br>

					<label for = 'location'>Location</label>
					<input type = 'text' name = 'location' value = '" .$row['location']. "'><br>

					<label for = 'schoolID'>School</label>
					<input type = 'text' name = 'schoolID' value = '" .$row['schoolID']. "'><br>	

					<label for = 'found'>Found?</label>
					<input type = 'text' name = 'found' value = '" .$row['found']. "'><br>				
					
	
					<input type = 'submit' name = 'updateItem' value='UPDATE'><br>
				</form>";
		}

		else    //the item could not be found in the db
		{							
				//form to insert
			echo "<div class = 'notfound'> No found match.  Please insert a new item into the database. </div><br>";
			echo "<form action='notfound.php' method = 'POST'>
				Serial Number: <input type='text' name='serial'><br>
				Description: <input type='text' name='description'><br>
				Funding Source: <input type='text' name='funding'><br>
				Location: <input type='text' name='location'><br>
				Location: <input type='text' name='schoolID'><br>
				Found?: <input type='text' name='found'><br>
		 
				<input type='submit' value='Submit'>

				</form>";
		}
	}


		
?>