<?php

	session_start();
	require_once "class_admin.php";
	$conn = new db_class();

if(ISSET($_POST['submita'])){
	$sid = $_POST["aid"];
	$pwd = $_POST["pwd"];

		$conn->login($sid, $pwd);
		echo '<script>alert("Successfully Logged In!")</script>';
		echo '<script>window.location= "login_a.php"</script>';
		header("location:ahome.php?msg_stud=Admin Logged In successfully");  // server side redirection
	}	


?>