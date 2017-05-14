<?php
	session_start();
	$_SESSION['$school'] = "dawson";
	$_SESSION['$url'] = "dawsonform.php";
	include 'header.php';
?>

<center><h2>Dawson Elementary</h2></center>

<form action="dawsonform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "dawson";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>