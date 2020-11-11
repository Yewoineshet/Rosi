<?php
   class TutorB{
       private $elemId;
       private $english;
       private $maths;
       private $biology;
       private $physics;
       private $chemistry;
       private $science;
       private $social;
       private $civics;
       private $computer; 
       Private $tutor_id;
       
       public function __construct($elemId,$english,$maths,$biology,$physics,$chemistry,$science,$social,$civics,$computer,$tutor_id){
                $this->elemId=$elemId;
                $this->english=$english;
                $this->maths=$maths;
                $this->biology=$biology;
                $this->physics=$physics;
                $this->chemistry=$chemistry;
                $this->science=$science;
                $this->social=$social;
                $this->civics=$civics;
                $this->computer=$computer;
                $this->tutor_id=$tutor_id;
       }
         public function getElemId(){
         return $this->elemId;
         
         }
         public function gettutor_id(){
            return $this->tutor_id;
        }
         public function getEnglsh(){
            return $this->english;
        }  public function getMaths(){
            return $this->maths;
        }  public function getBiology(){
            return $this->biology;
        }  public function getPysics(){
            return $this->physics;
        } public function getChemistry(){
            return $this->chemistry;
        }  public function getScience(){
            return $this->science;
        }  public function getSocial(){
            return $this->social;
        }  public function getCivics(){
            return $this->civics;
        } public function getComputer(){
            return $this->computer;
        }


   }
?>
