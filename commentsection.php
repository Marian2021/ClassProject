<?php
class user {
 
	public  email;
	public username;
	private userId;
	private permissions;
	private isAdmin;
	
	function __construct($email, $username, $userId, $permissions, $isAdmin) {
    $this->email = $email;
	$this->username = $username;
	$this->userId = $userId;
	$this->permissions = $permissions;
	$this->isAdmin = $isAdmin;
  }
	//setters
public function setemail($email){
   return $this->email= $email;
}
public function setusername($username){
    return  $this->username= $username;
}
public function setuserId($userId){
    return $this->userId= $userId;
}
public function setpermissions($permissions){
    return $this->permissions = $permissions;
}
public function setisAdmin($isAdmin){
    return $this->isAdmin= $isAdmin;
}

//getters
public function getemail($email){
    return $this->email= $email;
}
public function getusername($username){
    return $this->username= $username;
}
public function getuserId($userId){
    return $this->userId= $userId;
}
public function getpermissions($permissions){
    return $this->permissions = $permissions;
}
public function getisAdmin($isAdmin){
    return $this->isAdmin= $isAdmin;
}


}
?>
