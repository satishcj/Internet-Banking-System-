<?php
	
	require_once "class_admin.php";
	$conn = new db_class();

	$sid = $_REQUEST["sid"];
	
		$conn->delete_staffprofile($sid);
		echo '<script>alert("Successfully Registered!")</script>';
		echo '<script>window.location= "deletestaff.php"</script>';
		header("location:deletestaff.php?msg_stud=Staff Deleted successfully done..");  // server side redirection
		
?>