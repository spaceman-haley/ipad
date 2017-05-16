<?php 
	include 'header.php';
	session_start();
	//redirect to login form if not logged in
	if(!$_SESSION["loggedin"])
	{
		header( 'location: index.php?nolog=failed');
		exit();
	}
?>
	<p><center>
	Make your selection above.  Happy iPad hunting, y'all!
	</p></center>

	
	</body>
</html>