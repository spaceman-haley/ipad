<html>
	<head>
		<title> Keeping up the the iPads...</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
		<link rel ="stylesheet" href="main.css">
		

		<style>
				
		/*form styling*/

		input[type=button], input[type=submit], input[type=reset] {
		    background-color: black;
		    border: none;
		    color: white;
		    padding: 16px 32px;
		    text-decoration: none;
		    margin: 4px 2px;
		    cursor: pointer;
		}

		input[type=text]:focus {
		    background-color: #FFFFCC;
		}

		input[type=text] {
		    width: 30%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		}

		h1{
			font-size: 30px;
			text-align: center;
		}

		html{
			font-family: 'Raleway', sans-serif;
		}


		a:link {
		    text-decoration: none;
		}

		a:visited {
		    text-decoration: none;
		}
		/*New nav*/
		.container {
		    overflow: hidden;
		    background-color: #333;
		    font-family: 'Raleway', sans-serif;
		}

		.container a {
		    float: left;
		    font-size: 16px;
		    font-family:'Raleway', sans-serif;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		.dropdown {
		    float: left;
		    overflow: hidden;
		}

		.dropdown .dropbtn {
		    font-size: 16px;    
		    border: none;
		    outline: none;
		    color: white;
		    padding: 14px 16px;
		    background-color: inherit;
		}

		.container a:hover, .dropdown:hover .dropbtn {
		    background-color: green;
		}

		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		.dropdown-content a {
		    float: none;
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		    text-align: left;
		}

		.dropdown-content a:hover {
		    background-color: #ddd;
		}

		.dropdown:hover .dropdown-content {
		    display: block;
		}
		
		.validation {
			color: green;
			font-size: 25px;
			font-weight: bold;
		}
		
		.notfound {
			color: red;
			font-size: 25px;
			font-weight: bold;
		}

	</style>
	</head>
	
	<body>
	
	<h1>Keeping Up with the Ipads</h1>

	<div class="container">
	<a href = "index.php">HOME</a>
	  <div class="dropdown">
	    <button class="dropbtn">Haley</button>
	    <div class="dropdown-content">
	      <a href="form.php">Chapman</a>
	      <a href="dawsonform.php">Dawson</a>
	      <a href="morrisform.php">Morris</a>
	      <a href="report.php">Reports</a>
	    </div>
	  </div> 
	  <div class="dropdown">
	    <button class="dropbtn">Jan</button>
	    <div class="dropdown-content">
	      <a href="lakewoodform.php">Lakewood</a>
	      <a href="montviewform.php">Montview</a>
	      <a href="westlawnform.php">Westlawn</a>
	      <a href="#">Reports</a>
	    </div>
	  </div> 
	  <div class="dropdown">
	    <button class="dropbtn">Kim</button>
	    <div class="dropdown-content">
	      <a href="#">McDonnell</a>
	      <a href="#">Ridgecrest</a>
	      <a href="#">Sonnie Hereford</a>
	      <a href="#">Reports</a>
	    </div>
	  </div> 
	  <div class="dropdown">
	    <button class="dropbtn">Paula</button>
	    <div class="dropdown-content">
	      <a href="#">Highlands</a>
	      <a href="#">MLK</a>
	      <a href="#">Rolling Hills</a>
	      <a href="#">Reports</a>
	    </div>
	  </div> 
	</div>

	</center>