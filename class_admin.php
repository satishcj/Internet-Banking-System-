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
 
		protected function connect(){
			//$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			$this->conn = mysql_connect($this->host, $this->user, $this->pass);
			mysql_select_db($this->dbname,$this->conn) or die(mysql_error());
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}
 	

		public function update_staffprofile($sid,$snm,$pno,$eid,$dept)
		{
			$sql ="update staff set Name='".$snm."',Phone='".$pno."',Email='".$eid."',Department='".$dept."' where Staff_ID='".$sid."'";
			//echo $sql;
			mysql_query($sql) or trigger_error(mysql_error().$sql); 
			
		}
		public function delete_staffprofile($sid)
		{
			$sql ="delete from staff where Staff_ID='".$sid."'";
			//echo $sql;
			mysql_query($sql) or trigger_error(mysql_error().$sql); 
			
		}



		
		
		public function viewstaff()
		{  
		$sql="select * from staff";
	        $res = mysql_query($sql) or trigger_error(mysql_error().$sql); 
		return $res;
        	}  	
		public function viewstaff1($sid)
		{  
		$sql="select * from staff where Staff_ID='".$sid."'";
	        $res = mysql_query($sql) or trigger_error(mysql_error().$sql); 
		return $res;
        	}  	







		public function login($aid, $pwd)
		{  
            		$res = mysql_query("SELECT * FROM admin WHERE Admin_ID = '".$aid."' AND Password = '".$pwd."'");  
            		$user_data = mysql_fetch_array($res);  
            		//print_r($user_data);  
           		 $no_rows = mysql_num_rows($res);  
              
           		 if ($no_rows == 1)   
           		 {  
           
               		 $_SESSION['login'] = true;  
                	 $_SESSION['aid'] = $user_data['Admin_ID'];  
                           
                         return TRUE;  
               		 }  
           		 else  
            		{  
                	return FALSE;  
            		}  
               
                   
        	}  
	}
?>





