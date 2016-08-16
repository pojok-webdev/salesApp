<?php
class Users extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function change_password(){
		$salt = sha1(random_string('alnum',32));
		$password = 'ora rahasia';
		$email = "puji@padi.net.id";
		$pass = sha1($password.$salt);
		$sql = "update users set salt='".$salt."',password='".$pass."' where email='".$email."'";
		$this->db->query($sql);
	}
	function create(){
		$salt = sha1(random_string('alnum', 32));
		$password = "rahasia";
		$pass = sha1($password.$salt);
		$sql = "insert into users (fname,mname,lname,email,salt,password) ";
		$sql .= "values ";
		$sql .= "('tamer','p','lane','puji@padi.net.id','".$salt."','".$pass."')";
		$this->db->query($sql);
	}
	function login(){
		$username = "puji@padi.net.id";
		if($this->padi_auth->login($username,"ora rahasia")){
			session_start();
			$_SESSION["username"] = $username;
			echo "OK";
		}else{
			echo "Wrong Username / Password";
		}
	}
	function is_signin(){
		session_start();
		if(isset($_SESSION["username"])){
			echo $_SESSION["username"];
		}else{
			echo "session habis";
		}
	}
}
