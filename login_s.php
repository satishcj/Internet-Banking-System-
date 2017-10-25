<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>HOME</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body background="../home-parallax-background.jpg">

	
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
				if(!checkBlnk(ltxt,"Staff ID field cant be left blank"))
				{
						return false;
				}
				if(!checkBlnk(ptxt,"Password field cant be left blank"))
				{
						return false;
				}
			}
		}
		</script>
</head>

<br>
<br>
<br>
<br>
<form name="login" method="post" action="process_login_staff.php">
<table border="0" align="center"  cellspacing="2">
<tr>
<td width="40%"><h3>STAFF ID</h3><td><input type="text" name="sid" size=3 />
</tr>
<tr>
<td width="40%"><h3>PASSWORD</h3><td><input type="password" name="pwd" size=12/>
</tr>
<tr>
<td>&nbsp;<td><input type="submit" name="submit" value="LOGIN" onclick="return check(login_s)"/>
</tr>
<tr>
<td>&nbsp;<td><input type="reset" name="rst" value="RESET" />
</tr>
<tr>
<td>
</tr>
</table>
</form>
<center>
<h1><font color="#FF0000">     
    	<?php
    		error_reporting(0);
				if($_REQUEST["msg4"]<>"")
				{
					echo $_REQUEST["msg4"];	//invalid userid and pass
				}
				if($_REQUEST["msg_stud"]<>"")
				{
					echo $_REQUEST["msg_stud"];	//Student reg successfully...	
				}
				if($_REQUEST["msg_tea"]<>"")
				{
					echo $_REQUEST["msg_tea"];	//teacher reg successfully...	
				}
				if($_REQUEST["msg"]<>"")
				{
					echo $_REQUEST["msg"];	//teacher reg successfully...	
				}
  
    	?>
</font></h1>
</center>
  
        
        
        
        
        
        
        
        
        
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
