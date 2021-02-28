<?php
class user {
	public email;
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
}

?>