<?php
       
    class AccountController{
            private $tutorId;
            private $fullname;
            private $gender;
            private $email;
            private $password;
            private $phoneno;
            private $address;
            private $story;
            private $img;

    public function __construct(){
        include_once ('dbconn.php');
        $this->mysqli = connect();
    }
    
   public function tutorLogin($email, $password){
       $Pass=  md5($Password);
        $query = "SELECT * FROM tutor WHERE email='$email' AND password ='$password'";
        $result = $this->mysqli->query($query);
      if($result){
          $row = $result->fetch_assoc();
          if($row){
            session_start();
            $id = $row['tutorId'];
            $_SESSION['id'] = $id;
            return true;
          }
          else{
            return false;
            
          }
        }
    } 
    
     public function updatepass($email,$nPassword){
                $stm=$this->conn->prepare("update login set password=? where email=? ");
                $stm->bind_param("ss",$nPassword,$email);
         if($stm->execute()){
                    return 1;
                }else{
                    return 2;
                }
        
             }

    public function addTutor($tutor){
            $tutorId = $tutor->getId();
            $fullname = $tutor->getFullName();
            $dob = $tutor->getDob();
            $gender = $tutor->getGender();
            $email = $tutor->getEmail();
            $password= $tutor->getPassword();
            $phoneno = $tutor->getPhoneno();
            $address = $tutor->getAddress();
            $story= $tutor->getStory();
            $img= $tutor->getImg();

      $query = "INSERT INTO tutor VALUES('$tutorId','$fullname','$dob','$gender','$email','$password','$phoneno','$address','$story','$img')";        
            $result = $this->mysqli->query($query);   
            if($result){
                return "Successfully Signed Up";
            }else{
                return "Invalid Information"; 
            }
    
    }
    
    }   
?>
