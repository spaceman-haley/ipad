<?php
	session_start();
	$_SESSION['$school'] = "morris";
	$_SESSION['$url'] = "morrisform.php";
	include 'includes/header.php';
?>

<?php if (login_check($mysqli) == true) : ?>
     <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
<center><h2>Morris P8</h2></center>

<form action="morrisform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "morris";

	include 'includes/found.php';
	
	echo "<hr>";
	
	include 'includes/report.php';

?>

<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
	</body>
</html>