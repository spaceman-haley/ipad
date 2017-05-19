<?php
	include 'dbconn.php';
	session_start();
	$school = $_SESSION['$school'];

	// output headers so that the file is downloaded rather than displayed
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=data.csv');

	$sql = "SELECT * FROM $school";
	$result = mysqli_query($conn, $sql);
	$fp = fopen('php://memory', 'w');
  $i = 0;

  //if any rows are present
	if($result->num_rows > 0) 
	{
    //loop over every row
		while($row = mysqli_fetch_array($result))
		{
      //loop over the 5 entryes we want in the row
      for($i = 0; $i < 5; $i++)
      {
        //output each entry
			  echo(trim($row[$i + 1]));

        //only output a comma if we're not on last row
        if($i != 4)
        {
          echo(",");
        }
      }
      //output a new line between each row
      echo("\r\n");
		}
	}
				
	fpassthru($fp);
?>
