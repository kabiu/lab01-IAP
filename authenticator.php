<?php
interface Authenticator{
	public function hashPassword();{
		$this->password =password_hash($this->password,PASSWORD_DEFAULT);
	}
	public function isPasswordCorrect();{
		$con = newDBConnector;
		$found =false;
		$res =mysql_query("SELECT *FROM user")or die("Error" . mysql_error());
		while($row=mysql_fetch_array($res)){
			if (password_verify($this->getPassword(),$row['password']) && $this->getusername()== $row['username']) {
				$found=true;

				return $found;
				# code...
			}
		}
	}
	public function login();{
		if($this->isPasswordCorrect){
			header("Location:private_page.php");
		}
	}
	public function createUserSession(){
		session_start();
		$_SESSION['username']=$this->getusername();
	}
	public function logout();{
		session_start();
		unset($_SESSION['username']);
		session_destroy();
		header("Location:lab1.php");
	}
	public function createFormErrorSessions();
}


?>