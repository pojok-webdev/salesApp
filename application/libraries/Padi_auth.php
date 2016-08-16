<?php
class Padi_auth {
	function change_password($email,$password){
		$salt = sha1(random_string('alnum',32));
		$pass = sha1($password.$salt);
		$sql = "update users set salt='".$salt."',password='".$pass."' where email='".$email."'";
		$this->db->query($sql);
	}
	function create_user($email,$password,$fname="",$mname="",$lname=""){
		$salt = sha1(random_string('alnum', 32));
		$pass = sha1($password.$salt);
		$sql = "insert into users (fname,mname,lname,email,salt,password) ";
		$sql .= "values ";
		$sql .= "('".$fname."','".$mname."','".$lname."','".$email."','".$salt."','".$pass."')";
		$this->db->query($sql);
	}
	function login($email,$password){
		$ci =& get_instance();
		$sql = "select * from users ";
		$sql.= "where email='".$email."'";
		$query = $ci->db->query($sql);
		if($query->num_rows()>0){
			$result = $query->result()[0];
			if(sha1($password.$result->salt)===$result->password){
				return true;
			}
			return false;
		}
		return false;
	}
}
