<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
require 'PHPMailerAutoload.php';
 $mail = new PHPMailer(true);                                 // Enable verbose debug output  
 $mail->isSMTP();                                       // Set mailer to use SMTP  
 $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
 $mail->SMTPAuth = true;                                // Enable SMTP authentication  
 $mail->Username = 'traituoirong2411@gmail.com';               // your SMTP username  
 $mail->Password = 'sqjjznytuusymvas';                      // your SMTP password  
 $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
 $mail->Port = 587;                                     // TCP port to connect to  
 $mail->setFrom('traituoirong2411@gmail.com', 'Pham Thanh Quan');  
 $mail->addAddress('phamthanhquan2411@gmail.com');                 // Name is optional  
 $mail->addReplyTo('phamthanhquan2411@gmail.com', 'Information');  
 //$mail->addCC('cc@example.com');                        // set your CC email address  
 //$mail->addBCC('bcc@example.com');                      // set your BCC email address  
 $mail->isHTML(true);                                   // Set email format to HTML  
 $mail->Subject = 'ma OTP'; 
 $mail->Body  = 'ma OTP la : ';  
 if($mail->send()) {  
   echo 'Message has been sent'; 
   
 } else {  
   echo 'Message could not be sent';  
 }

?>
</body>
</html>
