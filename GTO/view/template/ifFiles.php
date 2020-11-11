<?php
       
        if($_POST['kg_hidden'] == 1){
            
                if(!isset($_POST['maths'])) $_POST['maths'] = "";
                if(!isset($_POST['science'])) $_POST['science'] = "";
                if(!isset($_POST['art'])) $_POST['art']= "";
                if(!isset($_POST['music'])) $_POST['music'] = "";
                $tutora = new TutorA(0,$_POST['english'],$_POST['maths'],$_POST['science'],$_POST['art'],$_POST['music']);  
         
                while ($row1=mysqli_fetch_array($result)){
                   $tutor2 = new Tutor2(0,$_POST['eduStatus'],$_POST['experience'],$_POST['school'],$_POST['pay'],$_FILES['cv']['name'],$row1[0]);
            }
            $tutord = new TutorD(0,$_POST['kg'],0,0);
             $output = $gradeController->addTutorD($tutord);
             $output = $kgController->addTutorA($tutora);
             $output = $tutor2Controller->addTutor2($tutor2);
          }
            
            elseif ($_POST['elem_hidden']) {
                
                if(!isset($_POST['english'])) $_POST['english'] = "";
                if(!isset($_POST['maths'])) $_POST['maths']= "";
                if(!isset($_POST['science'])) $_POST['science'] = "";
                if(!isset($_POST['civics'])) $_POST['civics'] = "";
                if(!isset($_POST['social'])) $_POST['social'] = "";
                if(!isset($_POST['biology'])) $_POST['biology'] = "";
                if(!isset($_POST['physics'])) $_POST['physics']= "";
                if(!isset($_POST['chemistry'])) $_POST['chemistry'] = "";
                if(!isset($_POST['computer'])) $_POST['computer'] = "";
                
                $tutorb = new TutorB(0,$_POST['english'],$_POST['maths'],$_POST['science'],$_POST['civics'],$_POST['social'],$_POST['biology'], $_POST['physics'], $_POST['chemistry'], $_POST['computer']);
              while ($row1=mysqli_fetch_array($result)){
               $tutor2 = new Tutor2(0,$_POST['eduStatus'],$_POST['experience'],$_POST['school'],$_POST['pay'],$_FILES['cv']['name'],$row1[0]);
              }
               $tutord = new TutorD(0, 0,$_POST['elemntary'],0);
             $output = $gradeController->addTutorD($tutord);
               $output = $elemntaryController->addTutorB($tutorb);
            $output = $tutor2Controller->addTutor2($tutor2); 
              
            }
           else {
               
                if(!isset($_POST['maths'])) $_POST['maths']= "";
                if(!isset($_POST['computer'])) $_POST['computer'] = "";
                 if(!isset($_POST['english'])) $_POST['english'] = "";
                if(!isset($_POST['biology'])) $_POST['biology'] = "";
                if(!isset($_POST['physics'])) $_POST['physics']= "";
                if(!isset($_POST['chemistry'])) $_POST['chemistry'] = "";
                if(!isset($_POST['economics'])) $_POST['economics'] = "";
                if(!isset($_POST['business'])) $_POST['business'] = "";
                if(!isset($_POST['geography'])) $_POST['geography'] = "";
                if(!isset($_POST['history'])) $_POST['history'] = "";
                if(!isset($_POST['civics'])) $_POST['civics'] = "";
                if(!isset($_POST['drawing'])) $_POST['drawing'] = "";
                
              $tutorc = new TutorC(0,$_POST['maths'],$_POST['english'],$_POST['computer'],$_POST['biology'],$_POST['physics'],$_POST['chemistry'], $_POST['economics'], $_POST['business'], $_POST['geography'],$_POST['history'],$_POST['civics'],$_POST['drawing']);
                while ($row1=mysqli_fetch_array($result)){
               $tutor2 = new Tutor2(0,$_POST['eduStatus'],$_POST['experience'],$_POST['school'],$_POST['pay'],$_FILES['cv']['name'],$row1[0]); 
                }
               $tutord = new TutorD(0,0,0,$_POST['highschool']);
             $output = $gradeController->addTutorD($tutord);
                $output = $highSchoolController->addTutorC($tutorc);
             $output = $tutor2Controller->addTutor2($tutor2);
           }

?>

