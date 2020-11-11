<?php
 
    class HighSchoolController{
            private $highId;
            private $maths;
            private $english;
            private $computer;
            private $biology;
            private $physics;
            private $chemistry;
            private $economics;
            private $business;
            private $geography;
            private $history;
            private $civis;
            private $drawing;
            private $tutor_id;


            public function __construct(){
            include_once ('dbconn.php');
            $this->mysqli = connect();

    }
        public function addTutorC($tutorc){
            $highId=$tutorc->getHighId();
            $english= $tutorc->getEnglish();
            $maths = $tutorc->getMaths();
            $copmuter= $tutorc->getComputer();
            $biology= $tutorc->getBiology();
            $physics= $tutorc->getPhysics();
            $chemistry= $tutorc->getChemistry();
            $business= $tutorc->getBusiness();
            $economics = $tutorc->getEconomics();
            $geography= $tutorc->getGeography();
            $history= $tutorc->getHistory();
            $civics= $tutorc->getCivics();
            $drawing= $tutorc->getDrawing();
            $tutor_id= $tutorc->gettutor_id();
            
$query = "INSERT INTO highschoolcourses VALUES('$highId','$english','$maths','$copmuter','$biology','$physics','$chemistry','$business','$economics','$geography','$history','$civics','$drawing','$tutor_id')";
            
            $result = $this->mysqli->query($query);
            if($result){
                return "Successfully Signed Up";
            }else{
                return "Invalid Information"; 
//                return $query;
            }
    }
    
  } 
