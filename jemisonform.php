<?php
	session_start();
	$_SESSION['$school'] = "jemison";
	$_SESSION['$url'] = "jemisonform.php";
	include 'includes/header.php';
?>

<center><h2>Jemison High</h2></center>

<form action="jemisonform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "jemison";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>