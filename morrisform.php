<?php
	include 'header.php';
?>

<form action="morrisform.php" method = "POST">
  Serial Number: <input type="text" name="serial" ><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	//sets variables and runs query
	$serial = $_POST['serial'];
		
	//SQL query to compare
	$sql = "SELECT * FROM morris WHERE serial = '$serial'";
	$result = mysqli_query($conn, $sql);
	
	if($result->num_rows > 0) 
	{
		while ($row = mysqli_fetch_array($result)) 
		{
			echo "Serial # Found";
		}
	}
	else
	{
		echo "No found match";
	}
		
?>
	</body>
</html>