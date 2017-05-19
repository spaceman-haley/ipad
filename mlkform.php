<?php
	session_start();
	$_SESSION['$school'] = "mlk";
	$_SESSION['$url'] = "mlkform.php";
	include 'includes/header.php';
?>

<center><h2>MLK Elementary</h2></center>

<form action="mlkform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "mlk";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>