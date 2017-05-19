<?php
	session_start();
	$_SESSION['$school'] = "rollinghills";
	$_SESSION['$url'] = "rhillsform.php";
	include 'includes/header.php';
?>

<center><h2>Rolling Hills Elementary</h2></center>

<form action="rhillsform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "rollinghills";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>
	</body>
</html>