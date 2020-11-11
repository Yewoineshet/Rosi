<?php
  class TutorD{
      private $gradeId;
      private $kg;
      private $elemntary;
      private $highschool;
    
      public function __construct($gradeId,$kg,$elemntary,$highschool) {
          $this->gradeId =$gradeId;
          $this->kg=$kg;
          $this->elemntary=$elemntary;
          $this->highschool=$highschool;
      }
      
       public function getGradeId(){
            return $this->gradeId;
        }
         public function getKg(){
            return $this->kg;
        }
         public function getElemntary(){
            return $this->elemntary;
        }
         public function getHighSchool(){
            return $this->highschool;
         }
  }
?>


