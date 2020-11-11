<?php
 include_once '../controller/AccountController.php';

if(isset($_POST['email']) && isset($_POST['nPassword'])){
    $email=$_POST['email']; 
    $nPassword=$_POST['Password'];
 
  
   $db=new dblogin();
   $result=$db->updatepass($user,$newpass);
   
       if($result =='1'){
       header("Location: /ocs.html");
      }
       else {
          return 'fail';
      }
    

}