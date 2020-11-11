<?php
    class Contact{
        private $id;
        private $Name;
        private $Email;
        private $Phone;
        private $ContactReason;
        private $Message;
      
        public function __construct( $id,$Name,$Email,$Phone,$ContactReason,$Message){
            $this->id= $id;
            $this->Name = $Name;
            $this->Email = $Email;
            $this->Phone = $Phone;
            $this->ContactReason = $ContactReason;
            $this->Message= $Message;
            
        }
        public function getId(){
            return $this->id;
        }

        public function getName(){
            return $this->Name;
        }
        public function getEmail(){
            return $this->Email;
        }
        public function getPhone(){
            return $this->Phone;
        }
        
        public function getContactReason(){
            return $this->ContactReason;
        }
        public function getMessage(){
            return $this->Message;
        }
    }
?>
