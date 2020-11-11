<?php
    class Tutor{
        private $tutorId;
        private $fullname;
        private $dob;
        private $gender;
        private $email;
        private $password;
        private $phoneno;
        private $address;
        private $story;
        private $img;
      
        
        public function __construct($tutorId,$fullname,$dob,$gender,$email,$password,$phoneno,$address,$story,$img){
            $this->tutorId = $tutorId;
            $this->fullname = $fullname;
            $this->dob = $dob;
            $this->gender = $gender;
            $this->email = $email;
            $this->password =$password;
            $this->phoneno = $phoneno;
            $this->address= $address;
            $this->story= $story;
            $this->img = $img;
          
        }

        public function getId(){
            return $this->tutorId;
        }
        public function getFullName(){
            return $this->fullname;
        }
        public function getDob(){
            return $this->dob;
        }
         public function getGender(){
            return $this->gender;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getPhoneno(){
            return $this->phoneno;
        }
        public function getAddress(){
            return $this->address;
        }

        public function getStory(){
            return $this->story;
        }
        public function getImg(){
            return $this->img;
       }
   
    }
 
?>
