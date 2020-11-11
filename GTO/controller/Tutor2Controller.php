<?php
       
    class Tutor2Controller{
            private $tutor2Id;
            private $eduStatus;
            private $experience;
            private $school;
            Private $pay;
            private $cv; 
        
   
    public function __construct(){
        include_once ('dbconn.php');
        $this->mysqli = connect();
    }     
       
     public function addTutor2($tutor2){
            $tutor2Id= $tutor2->getTutor2Id();
            $eduStatus =$tutor2->getEduStataus();
            $experience =$tutor2->getExperience();
            $school = $tutor2->getSchool();
            $pay= $tutor2->getPay();
            $cv= $tutor2->getCv();
           $tutor_id=$tutor2->gettutor_id();
           
     $query = "INSERT INTO tutor2 VALUES('$tutor2Id','$eduStatus','$experience','$school','$pay','$cv','$tutor_id')";        
            $result = $this->mysqli->query($query);   
            if($result){
                return "Successfully Signed Up";
                
            }else{
                return "Invalid Information"; 
            }
    
     }
    
    }
