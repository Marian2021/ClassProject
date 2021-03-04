<?php
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
	public function setAlbumId($albumId){
		$this->albumId = $albumId;
	}
	public function getAlbumId(){
		return $this->albumId;
	}
	public function setUserId($userId){
		$this->userId = $userId;
	}
	public function getUserId(){
		return $this->userId;
	}
	public function setTitle($title){
		$this->title = $title;
	}
	public function getTitle(){
		return $this->title;
	}
	public function setDescription($description){
		$this->description = $description;
	}
	public function getDescription(){
		return $this->description;
	}
}


?>
