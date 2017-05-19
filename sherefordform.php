<?php
	session_start();
	$_SESSION['$school'] = "shereford";
	$_SESSION['$url'] = "sherefordform.php";
	include 'includes/header.php';
	include 'includes/urlMsg.php';
	include 'includes/functions.php';
	include_once 'includes/dbconn.php';
?>
<?php if (login_check($mysqli) == true) : ?>
     <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
<center><h2>Sonnie Hereford Elementary</h2></center>

<form action="sherefordform.php" method = "POST">
  Serial Number: <input type="text" name="serial" id = "color" autofocus = "autofocus"><br>
 
  <input type="submit" value="Submit">
</form>

<?php
	include 'includes/dbconn.php';

	$school = "shereford";

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