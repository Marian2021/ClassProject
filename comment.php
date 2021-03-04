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
	public function setCommentId($commentId){
		$this->commentId = $commentId;
	}
	public function getCommentId(){
		return $this->commentId;
	}
	public function setPictureId($pictureId){
		$this->pictureId = $pictureId;
	}
	public function getPictureId(){
		return $this->pictureId;
	}
	public function setCommentContent($commentContent){
		$this->commentContent = $commentContent;
	}
	public function getCommentContent(){
		return $this->commentContent;
	}
}


?>
