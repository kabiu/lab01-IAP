<?php 
 define('DB_SERVER', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'btc3205');

 class DBConnecter{
 	public $conn;

 	function__contruct(){
 		$this->conn =mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die("Error:" mysql_error());
 		mysql_select_db(DB_NAME,$this->conn);

 		public function closeDatabase(){
 			mysql_close($this->conn);
 		}
 	}
 }
 ?>