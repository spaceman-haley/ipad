<?php
	//check url for messages
	$urlRedirect = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	if(strpos($urlRedirect, 'upload=failed') !== false) {

		echo "<div class = 'validationfail'>
				There Was An Error Uploading Content<br>
			</div>";
	}
	else if(strpos($urlRedirect, 'upload=success') !== false){
		echo "<div class = 'validation'>
				Your Item Was Successfully Uploaded<br>
			</div>";
	}
	
	else if(strpos($urlRedirect, 'edit=success') !== false){
		echo "<div class = 'validation'>
				Your Item Was Updated Successfully<br>
			</div>";
	}
	else if(strpos($urlRedirect, 'edit=failed') !== false){
		echo "<div class = 'validationfail'>
				An Error Has Occurred And Your Content Could Not Be Updated<br>
			</div>";
	}
	else if(strpos($urlRedirect, 'record=unavailable') !== false){
		echo "<div class = 'validationfail'>
				An Error Has Occurred And The Chosen Record Could Not Be Found<br>
			</div>";
	}
	else if(strpos($urlRedirect, 'error=file') !== false){
		echo "<div class = 'validationfail'>
				An Error Has Occurred And The Chosen Record Could Not Be Found<br>
			</div>";
	}
	else if(strpos($urlRedirect, 'delete=success') !== false){
		echo "<div class = 'validation'>
				Your Content Was Successfully Deleted<br>
			</div>";
	}
	else if(strpos($urlRedirect, 'delete=failed') !== false){
		echo "<div class = 'validationfail'>
				An Error Has Occurred And Your Content Could Not Be Deleted<br>
			</div>";
	}
	else if(strpos($urlRedirect, 'other=failed') !== false){
		echo "<div class = 'validationfail'>
				An error had occurred.  Please make another selection.<br>
			</div>";
	}
?>