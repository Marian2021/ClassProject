<?php
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


?>