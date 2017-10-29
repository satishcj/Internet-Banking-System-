<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>My Home</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	
	<div id="header"> <center><h1>INTERNET BANKING SYSTEM</h1></center>
		<div>
			<div class="logo">
				<a href=""></a>
			</div>
   
          
			<ul id="navigation">
				<li class="active">
					<a href="ahome.php">Home</a>
				</li>
				
				<li>
					<a href="addstaff.php">Add Staff</a>
				</li>
				<li>
					<a href="deletestaff.php">Delete Staff</a>
				</li>
			</ul>
          
		</div>
	</div>			
			
<div id="contents">
		
    
        
 <script type="text/javascript" src="javascrpt.js" ></script>

	<script type="text/javascript" >
	
	
	
	
		function check(thisFrm)
		{
			
			
			with(thisFrm)
			{
				if(!checkBlnk(sid,"Staff ID field cant be left blank"))
				{
						return false;
				}
				if(!checkBlnk(snm,"Staff name field cant be left blank"))
				{
						return false;
				}
				
				if(!checkBlnk(spno,"Phone no field cant be left blank"))
				{
						return false;
				}
				if(!checkphoneLen(spno,"phone no field must have 10 digit"))
				{
						return false;
				}
				if(!checkBlnk(seid,"E-mail id field cant be left blank"))
				{
						return false;
				}
				if(!checkemail(seid,"Invalid Email id"))
				{
						return false;
				}
				if(!checkBlnk(dept,"Department field cant be left blank"))
				{
						return false;
				}
				
				
			}
			
			
			
		}
	
	
	
	
	</script>





</head>

<?php





	require "class_admin.php";
	$conn = new db_class();
	$sid = $_REQUEST["sid"];



	$sql=$conn->viewstaff1($sid);
	if($sql == FALSE) 
		{ 
    		die(mysql_error()); // TODO: better error handling
		}

while($row=mysql_fetch_array($sql))
	{


	

?>


<form name="staffupdate" method="post" enctype="multipart/form-data" action="process_staffprofile.php">
<table align="center" border="0" cellspacing="6">
<caption><h1><font color="#FF0000">EDIT STAFF PROFILE</font></h1></caption>

<tr>
<td><b>Staff ID:</b><td><input type="text" name="sid" size="30" value="<?php echo $row[0] ?>"/>
</tr>
<tr>
<td><b>Name:</b><td><input type="text" name="snm" size="30" value="<?php echo $row[2] ?>"/>
</tr>
<tr>
<td><b>Phone No:</b><td><input type="text" name="spno" size="30" value="<?php echo $row[3] ?>"/>
</tr>
<tr>
<td><b>Email:</b><td><input type="email" name="seid" size="30" value="<?php echo $row[4] ?>"/>
</tr>
<tr>
<td><b>Department:</b><td><input type="text" name="dept" size="15" value="<?php echo $row[5] ?>"/>
</tr>
<tr>
<br />
<td>&nbsp;<td><input type="submit" name="submit" value="UPDATE" onclick="return check(staffprofile)" />
</tr>
<tr>
<br />
<td>&nbsp;<td><input type="reset" name="reset" value="RESET"/>
</tr>



<?php
	}


?>
</table>
</form>



       
        
        
        
        
        
</div>	



	<div id="footer" class="clearfix">
		<p>
		<table align="center" width="100%">
			<tr>
				<td align="center">copyright©2017INTERNETBANKINGSYSTEM.All Rights Reserved.</td>
			</tr>
			<tr align="right">
				<td>Patel Shruti<br/><br/>
				Khambhati Keshvi<br/><br/>
				</td>
			</tr>
		</table>
		</p>
	</div>

</body>
</html>
