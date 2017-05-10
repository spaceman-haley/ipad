<?php
<<<<<<< HEAD
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
			while ($row = mysqli_fetch_array($result)) 
			{
				echo "<div class = 'validation'>Scan successful <br>";
				echo "MARKED AS FOUND
				</div>
				";
				// query to update found variable to true when found
				$sql_one = "UPDATE $school SET found = 'true' WHERE serial = '$serial'";
				$result_one = mysqli_query($conn, $sql_one);	
			}
		}

		else    //the item could not be found in the db
		{
			echo "<div class = 'notfound'> No found match.  Please insert a new item into the database. </div><br>
			<a href = 'notfound.php'>INSERT</a>";

		}
=======

	//SQL query to search for new serial number
	$sql = "SELECT * FROM dawson WHERE serial = '$serial'";
	$result = mysqli_query($conn, $sql);
	
	if($result->num_rows > 0) 
	{
		while ($row = mysqli_fetch_array($result)) 
		{
			echo "<div class = 'validation'>Scan successful <br>";
			echo "MARKED AS FOUND
			</div>
			";
			// query to update found variable to true when found
			$sql_one = "UPDATE $school SET found = 'true' WHERE serial = '$serial'";
			$result_one = mysqli_query($conn, $sql_one);	
		}
	}
	else
	{
		echo "<div class = 'notfound'> No found match.  Please insert a new item into the database. </div><br>
		<a href = 'notfound.php'>INSERT</a></br>";
>>>>>>> origin/master
		
	}
?>