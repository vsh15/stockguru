<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>showResults PHP page</title>
<style type="text/css">
.result {
	font-family:Arial;
	font-size:14px;
	color:black;
	margin-top:2px;
	margin-left:2px;
	border-style:solid;
	border-width:5px;
	border-color:#ffffff;
	background-color:#ffffff;
	width:350px;
	padding:5px;
}
h1{color:#FF7F50 ;
	margin-top:5px;
	font-weight:bold;
	font-size:2.5em;
	margin-left:300px;}
</style>
</head>

<body>



<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "stocks";
$row;

// 2. Create a database connection
$connection = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}


// 3. Select a database to use 

$sql = "select  avg(ClosePrice)
from stockhistory  t
where Time >= DATE_SUB(NOW(),INTERVAL 1 YEAR)
AND Symbol = 'MSFT'";

$query = $connection->query($sql);

$result;

if ($query->num_rows > 0)
{
	$x = 0;
	echo 'Average stock price of Microsoft in the latest one year';
	echo '<div class=\'result\'>';
	echo "<html><body><table border=1>";
	echo "<tr><td>AveragePrice</td></tr><hr>";
	while ($row = $query->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$row["avg(ClosePrice)"]."</td>";
		//echo "<td>".$row["DATE( Time )"]."</td>";
		//$result[$x] = $row["ClosePrice"];
		echo "</tr>";
		
		$x++;
	}
	echo "</table></body></html>";
	echo '</div>';
	//fclose($fp);
	
}

$connection->close();
?>
</body>
</html>