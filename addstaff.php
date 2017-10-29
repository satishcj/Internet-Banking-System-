<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>TEACHER HOME</title>
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
<center><h1>Student List</h1></center>




<table border="1" align="center">


	<tr>
    
    	<th>Staff Id</th>
    	<th>Name</th>
        <th>Phone</th>
    	<th>Email</th>
        <th>Department</th>
        
        
        <th>Action</th>                        
    
    </tr>








<?php	
	
	
	require "class_admin.php";
	$conn = new db_class();
	$sql=$conn->viewstaff();
	if($sql == FALSE) 
		{ 
    		die(mysql_error()); // TODO: better error handling
		}

while($row=mysql_fetch_array($sql))
	{

?>
	<tr>
	<td><?php echo $row['Staff_ID']; ?></td>	
	<td><?php echo $row['Name'];?></td>
    	<td><?php echo $row['Phone'];?></td>
    	<td><?php echo $row['Email'];?></td>
    	<td><?php echo $row['Department'];?></td>
    

	<td><a href="staffprofile.php?sid=<?php echo $row[0] ?>">Update Staff</a></td>           

	</tr>




<?php
	}


?>

</table>


		
        
        
        
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
