<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST['mail_to'])and isset($_POST['mail_sub']) and isset($_POST['mail_msg'])){
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
    
    
    $mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "selemonworku21@gmail.com";
$mail->Password = "Se0945068337";
$mail->SetFrom("selemonworku21@gmail.com");
$mail->Subject = $mailSub;
$mail->Body =$mailMsg ;
$mail->AddAddress($mailto);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
    
//   
//   $mail = new PHPMailer();
//   $mail ->IsSmtp();
//   $mail ->SMTPDebug = 1;
//   $mail ->SMTPAuth = true;
//   $mail ->SMTPSecure = 'ssl';
//   $mail ->Host = "smtp.gmail.com";
//   $mail ->Port = 465; // or 587
//   $mail ->IsHTML(true);
//   $mail ->Username = "selemonworku21@gmail.com";
//   $mail ->Password = "Se0945068337";
//   $mail ->SetFrom("selemonworku21@gmail.com");
//   $mail ->Subject = $mailSub;
//   $mail ->Body = $mailMsg;
//   $mail ->AddAddress($mailto);
//   
//   if(!$mail->Send())
//   {
//       echo "Mail Not Sent";
//   }
//   else
//   {
//       echo "Mail Sent";
//   }

}else{
    echo 'Error';
}



   

