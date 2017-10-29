<?php
	
	if(ISSET($_POST['submit']))
	{
	require_once "class_admin.php";
	$conn = new db_class();

	$sid = $_REQUEST["sid"];
	
	
	$snm = $_REQUEST["snm"];
	
	$pno = $_REQUEST["spno"];   //int
	$eid= $_REQUEST["seid"];
	$dept = $_REQUEST["dept"];
		$conn->update_staffprofile($sid,$snm,$pno,$eid,$dept);
		echo '<script>alert("Successfully Registered!")</script>';
		echo '<script>window.location= "staffprofile.php"</script>';
		header("location:addstaff.php?msg_stud=Staff Updation successfully done..");  // server side redirection
	}	
?>