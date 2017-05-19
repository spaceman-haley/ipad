<?php
	session_start();
	$_SESSION['$school'] = "highlands";
	$_SESSION['$url'] = "highlandsform.php";
	include 'includes/header.php';
?>

<center><h2>Highlands Elementary</h2></center>

<form action="highlandsform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "highlands";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>