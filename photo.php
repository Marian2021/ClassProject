public function setPhotoId($photoId){
         $this->photoId = $photoId;
      }
public function getPhotoId(){
         return $this->photoId;
}

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
        public function setPhotoId($photoId){
         $this->photoId = $photoId;
      }
        public function getPhotoId(){
         return $this->photoId;
        }
        public function setUserId($userId){
         $this->userId = $userId;
      }
        public function getUserId(){
         return $this->userId;
        }
        public function setAlbumId($albumId){
         $this->albumId = $albumId;
      }
        public function getAlbumId(){
         return $this->albumId;
        }
        public function setDescription($description){
         $this->description = $description;
      }
        public function getDescription(){
         return $this->description;
        }
        public function setTitle($title){
         $this->title = $title;
      }
        public function getTitle(){
         return $this->title;
        }
        public function setPictureDirectory($php){
         $this->pictureDirectory = $pictureDirectory;
      }
        public function getPictureDirectory(){
         return $this->pictureDirectory;
        }
        
        
}


?>
