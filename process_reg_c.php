<?php
	

	if(ISSET($_POST['submit']))
	{
	require_once "class.php";
	$conn = new db_class();
	$cid = $_REQUEST["cid"];
	$uid = $_REQUEST["uid"];
	$pwd = $_REQUEST["pwd"];
	$cnm = $_REQUEST["cnm"];
	$dob = $_REQUEST["dob"];
	$gen = $_REQUEST["r1"];
	
	$pno = $_REQUEST["pno"];   //int
	$eid= $_REQUEST["eid"];
		$conn->registration($cid, $uid, $pwd, $cnm, $dob, $gen, $pno, $eid);
		echo '<script>alert("Successfully Registered!")</script>';
		echo '<script>window.location= "customer_reg.php"</script>';
		header("location:login_c.php?msg_stud=Customer Registration successfully done..");  // server side redirection
	}	
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
		header("location:login_s.php?msg_stud=Staff Registration successfully done..");  // server side redirection
	}	

?>