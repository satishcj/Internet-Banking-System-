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