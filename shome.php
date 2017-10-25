<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>STUDENT HOME</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body background="images/images-19.jpeg">

	
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
		
    
 <br><br><br>       
        
 <img src="images/images-25 - Copy.jpeg">
 <img src="images/images-27 - Copy.jpeg">
 <img src="images/images-28 - Copy.jpeg">       
        
        
 <center><h1><font color="#FF0000">    
 <?php
    		error_reporting(0);
				if($_REQUEST["msg3"]<>"")
				{
					echo $_REQUEST["msg3"];	//You are logged in...
				}
				
  
    	?>     </font></h1></center>
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
