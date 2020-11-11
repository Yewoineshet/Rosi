<?php
     
       class GradeController{
            private $gradeId;
            private $kg;
            private $elemntary;
            private $highschool;
           
        public function __construct(){
            include_once ('dbconn.php');
            $this->mysqli = connect();

    }
        public function addTutorD($tutord){
            $gradeId = $tutord->getGradeId();
            $kg= $tutord->getKg();
            $elemntary = $tutord->getElemntary();
            $highschool= $tutord->getHighSchool();
          
    $query = "INSERT INTO grade VALUES('$gradeId','$kg','$elemntary','$highschool')";
            
            $result = $this->mysqli->query($query);
            if($result){
                return "Successfully Signed Up";
            }else{
                return "Invalid Information"; 
//                return $query;
            }
    }
    
  } 


