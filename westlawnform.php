<?php
	session_start();
	$_SESSION['$school'] = "westlawn";
	$_SESSION['$url'] = "westlawnform.php";
	include 'header.php';
?>

<center><h2>Westlawn</h2></center>

<form action="westlawnform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "westlawn";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>