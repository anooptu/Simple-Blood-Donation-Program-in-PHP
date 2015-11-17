<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div align="center">
    <form action="insert-donor.php" method="post">
         <table width="300" border="0" cellspacing="3px" cellpadding="3px" align="center">
         <th>
         	Yes! I am a donor!
         </th>
         <tr>
         	<td align="center"><input type="text" name="d_name" placeholder="Your Name"/></td>
         </tr>          
          <tr>
			<td align="center"><input type="text" name="d_mob" placeholder="Your Mobile Number" /></td>
          </tr>
          <tr>
          	<td align="center"><select name="d_group">
                <option value="O Positive">O Positive</option>
                <option value="O Negative">O Negative</option>
                <option value="A Positive">A Positive</option>
                <option value="A Negative">A Negative</option>    
                <option value="B Positive">B Positive</option>
                <option value="B Negative">B Negative</option>                           
                <option value="AB Positive">AB Positive</option>
                <option value="AB Positive">AB Negative</option>                
        	</select></td>
          </tr>
         <tr>
         	<td align="center"><textarea name="d_address" rows="3" cols="50" placeholder="Your Address"></textarea></td>
         </tr>    
         <tr>
         	<td align="center"><input type="text" name="d_email" placeholder="Your E-Mail"/></td>       
         </tr>
          <tr>
           <td align="center"><input type="submit" name="add_donor" value="Become a Donor"/></td>
          </tr>
        </table>
	</form>
</div>
</body>
</html>
<?php
	if(isset($_POST['add_donor']))
		{
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		
		if(! $conn )
			{
			  die('Could not connect: ' . mysql_error());
			}
		   
		mysql_select_db('blooddonate');
		$sql="INSERT INTO donor (Name,Mob, Email, Address, BGroup) VALUES ('$_POST[d_name]','$_POST[d_mob]','$_POST[d_email]','$_POST[d_address]','$_POST[d_group]')";
		   
		if($retval = mysql_query( $sql, $conn ))
			{
			echo "Insert SUCCESS!";
			}
		}
?>
