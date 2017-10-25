<?php
	
	if(ISSET($_POST['submits']))
	{
	require_once "class_staff.php";
	$conn = new db_class();

	$sid = $_REQUEST["sid"];
	
	$pwd = $_REQUEST["pwd"];
	$snm = $_REQUEST["snm"];
	
	$pno = $_REQUEST["pno"];   //int
	$eid= $_REQUEST["eid"];
		$conn->registration_staff($sid,$pwd,$snm,$pno,$eid);
		echo '<script>alert("Successfully Registered!")</script>';
		echo '<script>window.location= "staff_reg.php"</script>';
		header("location:login_c.php?msg_stud=Staff Registration successfully done..");  // server side redirection
	}	
?>