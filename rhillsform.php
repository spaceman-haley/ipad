<?php
	session_start();
	$_SESSION['$school'] = "rollinghills";
	$_SESSION['$url'] = "rhillsform.php";
	include 'header.php';
?>

<center><h2>Rolling Hills Elementary</h2></center>

<form action="rhillsform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'dbconn.php';

	$school = "rollinghills";

	include 'found.php';
	
	echo "<hr>";
	
	include 'report.php';

?>
	</body>
</html>