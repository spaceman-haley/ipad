<?php
	session_start();
	$_SESSION['$school'] = "shereford";
	$_SESSION['$url'] = "sherefordform.php";
	include 'header.php';
?>

<center><h2>Sonnie Hereford Elementary</h2></center>

<form action="sherefordform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "shereford";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>