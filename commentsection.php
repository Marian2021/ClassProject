
<?php
class commentSection {
	public sectionId;
	public pictureId;
	function __construct($sectionId, $pictureId) {
    $this->sectionId = $sectionId;
	$this->pictureId = $pictureId;
  }

  //getters
  public function getsectionId($sectionId){
    return $this->sectionId= $sectionId;
}
public function getpictureId($pictureId){
    return $this->pictureId= $pictureId;
}

//setter
public function setsectionId($sectionId){
    return $this->sectionId= $sectionId;
}
public function setpictureId($pictureId){
    return $this->pictureId= $pictureId;
}

}


?>
