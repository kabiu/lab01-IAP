<?php
include "crude.php";
include "authenticator.php";
include_once 'DBConnector.php';
class User implements Crud,Authenticator{
	private $user_id;
	private $first_name;
	private $last_name;
	private $city_name;
	private $username;
	private $password;

	function__contruct($first_name,$last_name,$city_name,$username,$password){
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->city_name =$city_name;
		$this->username =$username;
		$this->password =$password;
	}


    public static function create(){
		$instance = new self();
		return $instance;
	}
	public function setUsername($username){
		$this->username =$username;
	}
	public function getUsername(){
		$this->username =$username;
	}
	public function setPassword($password){
		$this->password =$password;
	}
	public function getPassword(){
		$this->password =$password;
	}
	public function setUserId($user_id){
		$this->user_id = $user_id;

	}
	public function getUserId(){
		return $this->$user_id;
	}

	public function save(){
		$fn = $this->first_name;
		$ln = $this->last_name;
		$city =$this->city_name;
		$uname =$this->username;
		$this->hashpassword();
		$pass =$this->password;
		$res = mysql_query("INSERT INTO user(first_name,last_name,user_city,username,password) VALUES{'$fn','$ln','$city','$uname','$pass'}") or die ("Error" . mysql_error());
		return $res;
	}

	public function readAll(){
		return null;
	}
    public function readUnique(){
    	return null;

    }
    public function search(){
    	return null;
    }
    public function update(){
    	return null;
    }
    public function removeAll(){
    	return null;
    }



}
?>