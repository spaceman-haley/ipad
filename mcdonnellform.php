<?php
	session_start();
	$_SESSION['$school'] = "mcdonnell";
	$_SESSION['$url'] = "mcdonnellform.php";
	include 'includes/header.php';
	include 'includes/urlMsg.php';
	include 'includes/functions.php';
	include_once 'includes/dbconn.php';
?>

<?php if (login_check($mysqli) == true) : ?>
     <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>

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
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>

	</body>
</html>