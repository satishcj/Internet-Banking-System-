<?php

	session_start();
	

if(ISSET($_POST['submit'])){
	require_once "class.php";
	
	$conn = new db_class();
	$uid = $_POST["uid"];
	$upwd = $_POST["pwd"];

	$qr ="select * from user where User_ID='".$uid."'";
	

	$res = mysql_query($qr,$cn);
	
	$row=mysql_fetch_array($res);	//customer
	
	
	if($row[0]==$uid && $row[1]==$upwd)//admin
		{
		$conn->login($uid, $pwd);
		echo '<script>alert("Successfully Logged In!")</script>';
		echo '<script>window.location= "login_c.php"</script>';
		header("location:ahome.php?msg1=You are logged in...!");	
		}
	else if($row1[0]==$uid && $row1[1]==$upwd)//staff
		{
		$conn->login($uid, $pwd);
		echo '<script>alert("Successfully Logged In!")</script>';
		echo '<script>window.location= "login_c.php"</script>';
		header("location:shome.php?msg2=You are logged in...!");	
		}
	else if($row2[0]==$uid && $row2[1]==$upwd)//customer
		{
		$conn->login($uid, $pwd);
		echo '<script>alert("Successfully Logged In!")</script>';
		echo '<script>window.location= "login_c.php"</script>';
		header("location:chome.php?msg3=You are logged in...!");	
		}
	else
		{
		header("location:3home.php?msg4=Invalid userid and password!");
		}

	}	


?>