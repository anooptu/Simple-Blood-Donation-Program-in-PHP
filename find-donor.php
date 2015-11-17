<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donors Group</title>
</head>

<body>
<div align="center">
    <form action="donors.php" method="post">
         <table width="300" border="0" cellspacing="3px" cellpadding="3px" align="center">
         <th>
         	Find a Donor
         </th>
          <tr>
			<td align="center"><input type="text" name="req_mob" placeholder="Your Mobile Number" /></td>
          </tr>
          <tr>
          	<td align="center"><select name="req_group">
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
           <td align="center"><input type="submit" name="req_blood" value="Find Donors"/></td>
          </tr>
        </table>
	</form>
</div>

</body>
</html>
