<?php
	session_start();
	$_SESSION['$school'] = "morris";
	$_SESSION['$url'] = "morrisform.php";
	include 'header.php';
?>

<center><h2>Morris P8</h2></center>

<form action="morrisform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "morris";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>