<?php
    session_start(); // Must have first
	
?>

<?php
    include 'dbconn.php';

    $tbl="user"; // Table name
   
if(isset($_POST['username'])) {
		$username = stripslashes($username);
		$password = stripslashes($password);
        $userID = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        
        $sql = "SELECT * FROM $tbl WHERE username = '$userID' AND pass = '$password'";
        $result = mysqli_query($conn, $sql);
        
        if (!$row = mysqli_fetch_assoc($result)) {
            //if error logging in, return back to login screen with error message
            header("Location: index.php?login=failed"); 
            exit();
        } else {
            $_SESSION['ID'] = $row['ID'];
			//$_SESSION["loggedIn"] = true;
            header("Location: main.php");
            exit();
        }
    }
    ?>