<?php
  class TutorA{
      private $kgId;
      private $english;
      private $maths;
      private $science;
      private $art;
      private $music;
      Private $tutor_id;
  
      public function __construct($kgId,$english,$maths,$science,$art,$music,$tutor_id) {
          $this->kgId =$kgId;
          $this->english=$english;
          $this->maths=$maths;
          $this->science=$science;
          $this->art=$art;
          $this->music=$music;
          $this->tutor_id=$tutor_id;
      }
      
       public function getKgId(){
            return $this->kgId;
        }
         public function gettutor_id(){
            return $this->tutor_id;
        }
         public function getEnglish(){
            return $this->english;
        }
         public function getMaths(){
            return $this->maths;
        }
         public function getScience(){
            return $this->science;
        }
         public function getArt(){
            return $this->art;
        }
         public function getMusic(){
            return $this->music;
        }
  }
?>

