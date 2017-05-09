<?php
	$query = "SELECT * FROM users WHERE username = '$u'";
	$result = mysql_query($query);
	if(mysql_num_rows($result) > 0)
	echo "Username Not Found";
?>