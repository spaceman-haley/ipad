<?php
	session_start();
	$_SESSION['$school'] = "morris";
	$_SESSION['$url'] = "morrisform.php";
	include 'includes/header.php';
?>

<center><h2>Morris P8</h2></center>

<form action="morrisform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "morris";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>