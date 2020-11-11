<?php
     class TutorC{
       private $highId;
       private $maths;
       private $english;
       private $computer;
       private $biology;
       private $chemistry;
       private $phyics;
       private $economics;
       private $business;
       private $geography;
       private $history;
       private $civics;
       private $drawing; 
       Private $tutor_id;
       
       public function __construct($highId,$maths,$english,$computer,$biology,$chemistry,$physics,$economics,$business,$geography,$history,$civics,$drawing,$tutor_id){
                $this->highId=$highId;
                $this->maths=$maths;
                $this->english=$english;
                $this->computer=$computer;
                $this->biology=$biology;
                $this->chemistry=$chemistry;
                $this->physics=$physics;
                $this->economics=$economics;
                $this->business=$business;
                $this->geography=$geography;
                $this->history=$history;
                $this->civics=$civics;
                $this->drawing=$drawing;
                $this->tutor_id=$tutor_id;
         }
        
          public function getHighId(){
            return $this->highId;
        } public function gettutor_id(){
            return $this->tutor_id;    
        } public function getMaths(){
            return $this->maths;
        } public function getEnglish(){
            return $this->english;
        } public function getComputer(){
            return $this->computer;
        } public function getBiology(){
            return $this->biology;
        } public function getPhysics(){
            return $this->physics;
        } public function getChemistry(){
            return $this->chemistry;
        } public function getEconomics(){
            return $this->economics;
        } public function getBusiness(){
            return $this->business;
        } public function getGeography(){
            return $this->geography;
        } public function getHistory(){
            return $this->history;
        } public function getCivics(){
            return $this->civics;
        } public function getDrawing(){
            return $this->drawing;
        }
         
         
     }
?>
   
