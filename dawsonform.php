<?php
	include 'header.php';
?>

<form action="dawsonform.php" method = "POST">
  Serial Number: <input type="text" name="serial"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	//sets variables and runs query
	$serial = $_POST['serial'];
	$school = "dawson";

	include 'found.php';

	include 'insert.php';



?>

	</body>
</html>