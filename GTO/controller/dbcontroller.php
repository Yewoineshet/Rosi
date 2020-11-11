<?php
class dbcontroller {
    private $id;
    private $Name;
    private $Email;
    private $Phone;
    private $ContactReason;
    private $Message;
    private $Clientid;
    private $Fullname;
    private $Phonenumber;
    private $Password;
    private $Dateofbirth;
    private $mysqli;
    public function __construct(){
        include_once('dbconn.php');
        $this->mysqli = connect();
    }
   
    public function clientLogin($Email,$Password){
        $Pass=  md5($Password);
        $query = "SELECT * FROM client WHERE Email = '$Email' AND Password = '$Pass'";
        $result = $this->mysqli->query($query);
        if($result){
          $row = $result->fetch_assoc();
          if($row){
            session_start();
            $_SESSION['id'] = $row['Clientid'];
            $_SESSION['role'] = "client";
            return true;
          }
          else{
            return false;
          }
        }
    }
    public function addclient($client){
     $Clientid = $client->getClientid();
        $Fullname = $client->getFullname();
        $Phonenumber = $client->getPhonenumber();
        $Email = $client->getEmail();
        $Password = $client->getPassword();
        $Pass =  md5($Password);
        $Dateofbirth = $client->getDateofbirth();
        $query = "INSERT INTO client Values('$Clientid','$Fullname','$Phonenumber','$Email','$Pass','$Dateofbirth')";
        $result = $this->mysqli->query($query);
        if($result){
          return "Successully registered";
        }else{
          return "Invalid/ERROR";
        }
      
    } 
    public function addContact($contact){
        $id = $contact->getId();
        $Name = $contact->getName();
        $Email = $contact->getEmail();
        $Phone = $contact->getPhone();
        $ContactReason = $contact->getContactReason();
        $Message = $contact->getMessage();
        $query = "INSERT INTO contact Values('$id','$Name','$Email','$Phone','$ContactReason','$Message')";
        $result = $this->mysqli->query($query);
        if($result){
          return "Successully sent, thank you";
        }else{
          return "Invalid/ERROR";
        }
    } 
 }
?>



