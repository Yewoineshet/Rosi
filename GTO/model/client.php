<?php
    class client{
        private $Clientid;
        private $Fullname;
        private $Phonenumber;
        private $Email;
        private $Password;
        private $Dateofbirth;
        public function __construct($Clientid,$Fullname,$Phonenumber,$Email,$Password,$Dateofbirth){
            $this->Clientid = $Clientid;
            $this->Fullname = $Fullname;
            $this->Phonenumber = $Phonenumber;
            $this->Email = $Email;
           
            $this->Password = $Password;
            $this->Dateofbirth = $Dateofbirth;
        }

        public function getClientid(){
            return $this->Clientid;
        }
        public function getFullName(){
            return $this->Fullname;
        }
        public function getPhoneNumber(){
            return $this->Phonenumber;
        }
        public function getEmail(){
            return $this->Email;
        }
        
        public function getPassword(){
            return $this->Password;
        }
        public function getDateofbirth(){
            return $this->Dateofbirth;
        }
    }
?>