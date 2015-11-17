<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donors</title>
</head>

<body>




<?php
	$req_mob=$_POST['req_mob'];
	$req_group=$_POST['req_group'];	

//	$req_mob='9946379677';
//	$req_group='O Positive';	
	
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   mysql_select_db('blooddonate');
   $sql="select * from donor where BGroup='$req_group'";
   
	$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
		  die('Could not get data: ' . mysql_error());
		}
		echo "<table width='700' border='1'><tr><th>Name</th><th>Mobile</th><th>Blood Group</th><th>Email</th><th>Address</th></tr>";
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			echo "<tr>";
			echo "<td>{$row['Name']}</td>";
			echo "<td>{$row['Mob']}</td>";
			echo "<td>{$row['BGroup']}</td>";
			echo "<td>{$row['Email']}</td>";			
			echo "<td>{$row['Address']}</td>";							
			echo "</tr>";
		} 
		echo "</table>";	
	echo "Fetched data successfully\n";
	mysql_close($conn);   
?>
</body>
</html>
