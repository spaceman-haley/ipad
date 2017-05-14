<?php
	session_start();
	$_SESSION['$school'] = "mcdonnell";
	$_SESSION['$url'] = "mcdonnellform.php";
	include 'header.php';
?>

<center><h2>McDonnell Elementary</h2></center>

<form action="mcdonnellform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "mcdonnell";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>