<?php
	session_start();
	$_SESSION['$school'] = "mcdonnell";
	$_SESSION['$url'] = "mcdonnellform.php";
	include 'includes/header.php';
?>

<center><h2>McDonnell Elementary</h2></center>

<form action="mcdonnellform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "mcdonnell";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>