<?php
	require 'connection.php';
 
	class db_class{
		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
 
		public function __construct(){
			$this->connect();
		}
 
		private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}
 
		public function registration($cid, $uid, $pwd, $cnm, $dob, $gen, $pno, $eid)
		{
			$stmt = $this->conn->prepare("INSERT INTO `user` (Customer_ID,User_ID,Password,Name,DOB,Gender,Phone,Email) VALUES(?, ?, ?, ?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param('ssssssss',$cid, $uid, $pwd, $cnm, $dob, $gen, $pno, $eid);
			if($stmt->execute())
			{
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		public function login($uid, $pwd)
		{  
            		$res = mysql_query("SELECT * FROM user WHERE User_ID = '".$uid."' AND Password = '".$pwd."'");  
            		$user_data = mysql_fetch_array($res);  
            		//print_r($user_data);  
           		 $no_rows = mysql_num_rows($res);  
              
           		 if ($no_rows == 1)   
           		 {  
           
               		 $_SESSION['login'] = true;  
                	 $_SESSION['uid'] = $user_data['User_ID'];  
                         $_SESSION['username'] = $user_data['Name'];    
                         return TRUE;  
               		 }  
           		 else  
            		{  
                	return FALSE;  
            		}  
               
                   
        	}  
	}
?>