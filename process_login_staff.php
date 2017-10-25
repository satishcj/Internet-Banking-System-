<?php

	session_start();
	require_once "class_staff.php";
	$conn = new db_class();

if(ISSET($_POST['submit'])){
	$sid = $_POST["sid"];
	$pwd = $_POST["pwd"];

		$conn->login($sid, $pwd);
		echo '<script>alert("Successfully Logged In!")</script>';
		echo '<script>window.location= "login_s.php"</script>';
		header("location:shome.php?msg_stud=Staff Logged In successfully");  // server side redirection
	}	


?>