<?php $tbl = "user"; ?>

<?php
	session_start();
	//must assure every single page in website has this!
	
	function redirect() {
		header( 'location: main.php');
	}
	
	include 'includes/urlMsg.php';
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Log In</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel ="stylesheet" href="css/login.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
	</head>	
	<body>

		<!-- Basic check that user is logged -->
		<?php
			//check for login errors
			$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if(strpos($url, 'login=failed') !== false){
				echo "<div class = 'adminLogIn'><font color = 'red'>
					<b>USERNAME OR PASSWORD ENTERED IS NOT RECOGNIZED.<br>
					PLEASE TRY AGAIN.<br></b></font></div>";
			}
			else if(strpos($url, 'success') !== false){
				echo "<div class = 'adminLogIn'><font color = 'red'>
					<b>NEW USER HAS BEEN REGISTERED.<br></b></font></div>";
			}
			
			//if user is logged in
			if(isset($_SESSION['ID'])) {
				//redirects user 
				redirect();
			} else { 
				//login form is presented if not logged in 
				echo
					"
							<h1>
							<center> Welcome!  Please log in.<br><br></center>
							</h1>

							<h3><center>
							<form action = 'login.php' method = 'POST'>
								Username: <input type='text' placeholder='Enter Username' name='username' required><br>
								Password: <input type='password' placeholder='Enter Password' name='pass' required><br>

								 <input type='submit' value='LOGIN'>
							</form>
							</h3></center>";
						
			}
		?>

	</body>