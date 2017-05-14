<?php
	session_start();
	$_SESSION['$school'] = "lakewood";
	$_SESSION['$url'] = "lakewoodform.php";
	include 'header.php';
?>

<center><h2>Lakewood Elementary</h2></center>

<form action="lakewoodform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "lakewood";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>