<?php

session_start();
session_destroy();

//after user logs out, return back to admin sign in page
header("Location: index.php");
exit();
?>