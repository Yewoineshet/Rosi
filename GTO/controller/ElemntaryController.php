<?php
 
    class ElemntaryController{
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
            private $tutor_id;


            public function __construct(){
            include_once ('dbconn.php');
            $this->mysqli = connect();

    }
        public function addTutorB($tutorb){
            $elemId=$tutorb->getElemId();
            $english= $tutorb->getEnglsh();
            $maths = $tutorb->getMaths();
            $biology= $tutorb->getBiology();
            $physics= $tutorb->getPysics();
            $chemistry= $tutorb->getChemistry();
            $science= $tutorb->getScience();
            $social = $tutorb->getSocial();
            $civics= $tutorb->getCivics();
            $computer= $tutorb->getComputer();
            $tutor_id=$tutorb->gettutor_id();
            
$query = "INSERT INTO elemntarycourses VALUES('$elemId','$english','$maths','$biology','$physics','$chemistry','$science','$social','$civics','$computer','$tutor_id')";
//$quer="INSERT INTO `elemntarycourses`(`english`, `maths`, `biology`, `physics`, `chemistry`, `science`, `social`, `civics`, `IT`, `tutor_id`) VALUES ($elemId,$english,[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])"            
            $result = $this->mysqli->query($query);
            if($result){
                return "Successfully Signed Up";
            }else{
                return "Invalid Information"; 
//                return $query;
            }
    }
    
  } 