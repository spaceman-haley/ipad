<?php
	include 'dbconn.php';

	$school = $_SESSION['$school'];

?>

<html>
	<head>
	<title>Ipad Report</title>
	<link rel ="stylesheet" href="reportcss.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>

	<body>


	<a href = "includes/createfile.php">DOWNLOAD REPORT</a>


		<table>
			<tr>
				<th> Serial Number</th>
				<th> Description </th>
				<th> Funding Source </th>
				<th> Location </th>
				<th> Found? </th>
			</tr>
			
		<?php
			$sql = "SELECT * FROM $school";
			$result = mysqli_query($conn, $sql);
			$count = $result->num_rows;

		
		if ($count !=0)
		{
				while($row = $result->fetch_object()){
					{				
		?>
		
			<tr>
				<td> <?php echo $row->serial; ?> </td>
				<td> <?php echo $row->description; ?> </td>
				<td> <?php echo $row->funding; ?> </td>
				<td> <?php echo $row->location; ?> </td>
				<div class = "color"><td> <?php echo $row->found; ?></td></div>
			</tr>
			
		<?php } 
				}
		}
						
		?>
	</table>

	<script>
		function f_color(){
		if (document.getElementById('.color').value = 'true') {
		document.getElementById('.color').style.color = "red";
		document.getElementById('.color').style.background="yellow";
		}
		}
		f_color();
	</script>

	
	</body>
</html>	
