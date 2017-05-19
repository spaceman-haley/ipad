
<?php
	session_start();

	
	$_SESSION['$school'] = "chapman";
	$_SESSION['$url'] = "chapmanform.php";
	include 'includes/header.php';
?>

<center><h2>Chapman P8</h2></center>

<form action="chapmanform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "chapman";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>