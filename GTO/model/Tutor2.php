<?php
    class Tutor2{
        private $tutor2Id;
        private $eduStatus;
        private $experience;
        private $school;
        Private $pay;
        private $cv; 
       
        Private $tutor_id;
       
        public function __construct($tutor2Id,$eduStatus,$experience,$school,$pay,$cv,$tutor_id){
            $this->tutor2Id=$tutor2Id;
            $this->eduStatus= $eduStatus;
            $this->experience= $experience;
            $this->school= $school;
            $this->pay= $pay;
            $this->cv= $cv;
            $this->tutor_id= $tutor_id;
       
            }
        public function gettutor_id(){
            return $this->tutor_id;
        }
        public function getTutor2Id(){
            return $this->tutor2Id;
        }
        public function getEduStataus(){
            return $this->eduStatus;
        
             }
        public function getExperience(){
            return $this->experience;
         
        }
        public function getSchool(){
            return $this->school;
        }
         public function getPay(){
            return $this->pay;
       
        } 
        public function getCv(){
            return $this->cv;
        }
         
        }
    
