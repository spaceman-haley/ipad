<?php
	//check url for messages
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if(strpos($url, 'upload=failed') !== false) {

		echo "<div class = 'msg'>
				There Was An Error Uploading Content<br>
			</div>";
	}
	else if(strpos($url, 'upload=success') !== false){
		echo "<div class = 'msg'>
				Your Content Was Successfully Uploaded<br>
			</div>";
	}
	
	else if(strpos($url, 'edit=success') !== false){
		echo "<div class = 'msg'>
				Your Content Was Updated Successfully<br>
			</div>";
	}
	else if(strpos($url, 'edit=failed') !== false){
		echo "<div class = 'msg'>
				An Error Has Occurred And Your Content Could Not Be Updated<br>
			</div>";
	}
	else if(strpos($url, 'record=unavailable') !== false){
		echo "<div class = 'msg'>
				An Error Has Occurred And The Chosen Record Could Not Be Found<br>
			</div>";
	}
	else if(strpos($url, 'error=file') !== false){
		echo "<div class = 'msg'>
				An Error Has Occurred And The Chosen Record Could Not Be Found<br>
			</div>";
	}
	else if(strpos($url, 'delete=success') !== false){
		echo "<div class = 'msg'>
				Your Content Was Successfully Deleted<br>
			</div>";
	}
	else if(strpos($url, 'delete=failed') !== false){
		echo "<div class = 'msg'>
				An Error Has Occurred And Your Content Could Not Be Deleted<br>
			</div>";
	}
?>