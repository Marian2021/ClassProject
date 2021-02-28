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
}


?>