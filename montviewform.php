<?php
	session_start();
	$_SESSION['$school'] = "montview";
	$_SESSION['$url'] = "montviewform.php";
	include 'includes/header.php';
?>

<center><h2>Montview Elementary</h2></center>

<form action="montviewform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "montview";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>