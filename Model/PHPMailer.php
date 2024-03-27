<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer
{
   public function sendMail($title, $content, $addressMail)
   {
      $mail = new PHPMailer(true);

      try {
         $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
         $mail->isSMTP();                  
         $mail->CharSet = 'utf-8';                       
         $mail->Host = 'smtp.gmail.com';                     
         $mail->SMTPAuth = true;                                  
         $mail->Username = 'chuongtoan1602@gmail.com';                    
         $mail->Password = 'uzrs rkpq kusn ulsc';                              
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
         $mail->Port = 465;                                  

         $mail->setFrom('chuongtoan1602@gmail.com', 'babyStreet');
         $mail->addAddress($addressMail);     

         $mail->isHTML(true);                                 
         $mail->Subject = $title;
         $mail->Body = $content;

         $mail->send();
         echo 'Message has been sent';
      } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
   }
}
