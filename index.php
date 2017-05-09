<html>
	<head>
		<title> Keeping up the the iPads...</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
		<link rel ="stylesheet" href="main.css">
	</head>
	
	<body>
	
	<h1>Keeping Up with the Ipads</h1>
	
		<ul class="mobile-app-filter-menu" data-mobile-app-filter-menu>
		  <li class="is-active"><a href="index.php">Chapman</a></li>
		  <li><a href="dawson.php">Dawson</a></li>
		  <li><a href="morris.php">Morris</a></li>
		  <li><a href="reports.php">Reports</a></li>
		</ul>


<script>
	$('[data-mobile-app-filter-menu] li').click(function () {
	  $(this).siblings().removeClass('is-active');
	  $(this).addClass('is-active');
	});
</script>
	
<?php
	include 'include/form.php';
?>
	
	</body>
</html>