<?php
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