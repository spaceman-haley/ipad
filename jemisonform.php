<?php
	session_start();
	$_SESSION['$school'] = "jemison";
	$_SESSION['$url'] = "jemisonform.php";
	include 'header.php';
?>

<center><h2>Jemison High</h2></center>

<form action="jemisonform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "jemison";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>