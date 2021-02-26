<!DOCTYPE html>
<html>
<body>
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

class photo {
	public photoId;
	public userId;
	public albumId
	public description;
	public title;
	public pictureDirectory;
	function __construct($photoId, $userId, $albumId, $description, $description, $pictureDirectory) {
    $this->photoId = $photoId;
	$this->userId = $userId;
	$this->albumId = $albumId;
	$this->description = $description;
	$this->title = $title;
	$this->pictureDirectory = $pictureDirectory;
  }
}

class album {
	public albumId;
	public userId;
	public title;
	public description;
	function __construct($albumId, $userId, $title, $description) {
    $this->albumId = $albumId;
	$this->userId = $userId;
	$this->title = $title;
	$this->description = $description;
  }
}

class commentSection {
	public sectionId;
	public pictureId;
	function __construct($sectionId, $pictureId) {
    $this->sectionId = $sectionId;
	$this->pictureId = $pictureId;
  }
}

class comment {
	public commentId;
	public pictureId;
	public commentContent;
	function __construct($commentId, $pictureId, $commentContent) {
    $this->commentId = $commentId;
	$this->pictureId = $pictureId;
	$this->commentContent = $commentContent;
  }
}


?>
<html>
<body>