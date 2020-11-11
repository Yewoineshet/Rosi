<?php

       class KgController{
            private $kgId;
            private $english;
            private $maths;
            private $science;
            private $art;
            private $music;
            private $tutor_id;


            public function __construct(){
            include_once ('dbconn.php');
            $this->mysqli = connect();

    }
        public function addTutorA($tutora){
            $kgId = $tutora->getKgId();
            $english= $tutora->getEnglish();
            $maths = $tutora->getMaths();
            $science= $tutora->getScience();
            $art= $tutora->getArt();
            $music = $tutora->getMusic();
            $tutor_id=$tutora->gettutor_id();
    $query = "INSERT INTO kgcourses VALUES('$kgId','$english','$maths','$science','$art','$music','$tutor_id')";
            
            $result = $this->mysqli->query($query);
            if($result){
                return "Successfully Signed Up";
            }else{
                return "Invalid Information"; 
//                return $query;
            }
    }
    
  } 

