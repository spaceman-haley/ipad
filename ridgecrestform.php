<?php
	session_start();
	$_SESSION['$school'] = "ridgecrest";
	$_SESSION['$url'] = "ridgecrestform.php";
	include 'header.php';
?>

<center><h2>Ridgecrest Elementary</h2></center>

<form action="ridgecrestform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "ridgecrest";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>