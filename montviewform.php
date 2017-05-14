<?php
	session_start();
	$_SESSION['$school'] = "montview";
	$_SESSION['$url'] = "montviewform.php";
	include 'header.php';
?>

<center><h2>Montview Elementary</h2></center>

<form action="montviewform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "montview";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>