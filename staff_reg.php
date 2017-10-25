<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>My Home</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	
	<div id="header">
		 <center><h1>INTERNET BANKING SYSTEM</h1></center>
		<div>
			<div class="logo">
				<a href=""></a>
			</div>
   
          
			<ul id="navigation">
				<li class="active">
					<a href="login_s.php">Home</a>
				</li>
				<li>
					<a href="about.php">Profile</a>
				</li>
				<li>
					<a href="contactus.php">Account Statement</a>
				</li> 
				<li>
					<a href="courses.php">Customer Services</a>
				</li>
				<li>
					<a href="schedule.php">Policy Details</a>
				</li>
				<li>
					<a href="logout.php">Logout</a>
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
				if(!checkBlnk(sid,"Staff id field cant be left blank"))
				{
						return false;
				}
				if(!checkBlnk(pwd,"Password field cant be left blank"))
				{
						return false;
				}
				if(!checkLen(pwd,"Password field must have more than 8 char"))
				{
						return false;
				}
				
				if(!checkBlnk(snm,"Staff name field cant be left blank"))
				{
						return false;
				}
				
				if(!checkBlnk(pno,"Phone no field cant be left blank"))
				{
						return false;
				}
				if(!checkphoneLen(pno,"phone no field must have 10 digit"))
				{
						return false;
				}
				if(!checkBlnk(eid,"E-mail id field cant be left blank"))
				{
						return false;
				}
				if(!checkemail(eid,"Invalid Email id"))
				{
						return false;
				}
				
				
				
			}
			
			
			
		}
	
	
	
	
	</script>




</head>


<b><center><strong><h1><font color="#FF0000">Student Registration Form</font></h1></strong></center></b>
<br />
<br />


<form name="stud_reg" method="post" enctype="multipart/form-data" action="process_reg_c.php">
<table align="center" border="0" cellspacing="6">


<tr>
<td><b>Staff Id:</b><td><input type="text" name="sid" size="3"/>
</tr>

<tr>
<td><b>Password:</b><td><input type="password" name="pwd" size="12"/>
</tr>

<tr>
<td><b>Name:</b><td><input type="text" name="snm" size="25"/>
</tr>

<td><b>Phone No:</b><td><input type="text" name="pno" size="10"/>
</tr>
<tr>
<td><b>Email Id:</b><td><input type="email" name="eid" size="30"/>
</tr>

<tr>
<br />
<td>&nbsp;<td><input type="submit" name="submits" value="SUBMIT" onclick="return check(staff_reg)" />
</tr>
<tr>
<br />
<td>&nbsp;<td><input type="reset" name="reset" value="RESET"/>
</tr>

</table>
</form>	
     
     
     
     
     
     
     
     
     
</div>	



	<div id="footer" class="clearfix">
		<p>
		<table align="center" width="100%">
			<tr>
				<td align="center">copyright©2015TMSclasses.All Rights Reserved.</td>
			</tr>
			<tr align="right">
				<td>Patel Shruti<br/><br/>
				Ghoniya Bittu<br/><br/>
				Karangiya Jigisha<br/><br/>
				Modi Jinal</td>
			</tr>
		</table>
		</p>
	</div>

</body>
</html>
