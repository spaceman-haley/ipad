<?php
include 'dbconn.php';

?>

<html>
	<head>
	<title>Ipad Report</title>
	<link rel ="stylesheet" href="reportcss.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>

	<body>

<<<<<<< HEAD
	<a href = "createfile.php">DOWNLOAD REPORT</a>

=======
>>>>>>> origin/master
		<table>
			<tr>
				<th> Serial Number</th>
				<th> Description </th>
				<th> Funding Source </th>
				<th> Location </th>
				<th> Found? </th>
			</tr>
			
		<?php
			$sql = "SELECT * FROM dawson";
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
	
<<<<<<< HEAD
	

    
=======
	<script>
		function f_color(){
		if (document.getElementById('.color').value = 'true') {
		document.getElementById('.color').style.color = "red";
		document.getElementById('.color').style.background="yellow";
		}
		}
		f_color();
	</script>
>>>>>>> origin/master



	
	</body>
</html>	