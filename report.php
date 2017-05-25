<?php
	include 'dbconn.php';

	$school = $_SESSION['$school'];
	$_SESSION['serial'] = '$serial';

?>

<html>
	<head>
	<title>Ipad Report</title>
	<link rel ="stylesheet" href="reportcss.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

	<style>

.social a {
	font-size: 30px;
	padding: 15px;

</style>

	</head>

	<body>


	<a href = "include/createfile.php">DOWNLOAD REPORT</a>


		<table>
			<tr>
				<th> Delete </th>
				<th> Serial Number</th>
				<th> Description </th>
				<th> Funding Source </th>
				<th> Location </th>
				<th> School </th>
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
				<form action = 'include/delete.php' method = 'POST'>
					<input type = 'hidden' name = 'id' value = '" .$row['serial']. "'>
					<td><input type = 'submit' name = 'deleteItem' value='DELETE'><br>
				</form></td> 
					<td> <?php echo $row->serial; ?> </td>
					<td> <?php echo $row->description; ?> </td>
					<td> <?php echo $row->funding; ?> </td>
					<td> <?php echo $row->location; ?> </td>
					<td> <?php echo $row->schoolID; ?> </td>
					<div class = "color"><td> <?php echo $row->found; ?></td></div>
			</tr>
			
		<?php } 
				}
		}
						
		?>
	</table>

	
	</body>
</html>	