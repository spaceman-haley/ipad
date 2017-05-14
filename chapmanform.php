
<?php
	session_start();
	$_SESSION['$school'] = "chapman";
	$_SESSION['$url'] = "chapmanform.php";
	include 'header.php';
?>

<center><h2>Chapman P8</h2></center>

<form action="chapmanform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "chapman";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>