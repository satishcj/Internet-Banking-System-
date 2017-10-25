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
 
		public function registration_staff($sid, $pwd, $snm, $pno, $eid)
		{
			$stmt = $this->conn->prepare("INSERT INTO `staff` (Staff_ID,Password,Name,Phone,Email) VALUES(?, ?, ?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param('sssss',$sid,$pwd,$snm,$pno,$eid);
			if($stmt->execute())
			{
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
		public function login($sid, $pwd)
		{  
            		$res = mysql_query("SELECT * FROM staff WHERE Staff_ID = '".$sid."' AND Password = '".$pwd."'");  
            		$user_data = mysql_fetch_array($res);  
            		//print_r($user_data);  
           		 $no_rows = mysql_num_rows($res);  
              
           		 if ($no_rows == 1)   
           		 {  
           
               		 $_SESSION['login'] = true;  
                	 $_SESSION['sid'] = $user_data['Staff_ID'];  
                         $_SESSION['staffname'] = $user_data['Name'];    
                         return TRUE;  
               		 }  
           		 else  
            		{  
                	return FALSE;  
            		}  
               
                   
        	}  
	}
?>
