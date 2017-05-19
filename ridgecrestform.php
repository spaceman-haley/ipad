<?php
	session_start();
	$_SESSION['$school'] = "ridgecrest";
	$_SESSION['$url'] = "ridgecrestform.php";
	include 'includes/header.php';
?>

<center><h2>Ridgecrest Elementary</h2></center>

<form action="ridgecrestform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "ridgecrest";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>