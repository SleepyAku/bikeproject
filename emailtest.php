<?php

//Requires php 8.0
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

//Load Composer's autoloader
//require 'libs/Autoload.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//echo "Mailer Open<br>";


$mail->IsSMTP(); 
$mail->Host  = "mail.vivaldi2000.com"; 
$mail->SMTPDebug  = 1;                 
                                           // 1 = errors and messages

                                           // 2 = messages only
$mail->SMTPAuth   = true;                  
$mail->Port       = 587;                    
$mail->Username   = "student@vivaldi2000.com"; 
$mail->Password   = "Donoevil2164!";    

//echo "User Set<br>";


$mail->SMTPOptions = array(
    'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true
         )
     );
// 3 will show all data    
$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->CharSet = "UTF-8";
$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->SMTPSecure = 'tls';  



// this stuff changes
$mail->setFrom("student@vivaldi2000.com","Support");

$mail->addAddress("rick2164@msn.com","Rick Earley");     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Test email From Student@vivaldi2000.com 1.0";
//$mail->Body    = "Body of Message - This is alot of Data";
 
    $body  = "<b>Body of Message - This is alot of Data</b>"; 

    $mail->MsgHTML($body);



    if(!$mail->send()) {
        $result = 0;
        $mailerror = $mail->ErrorInfo;
       //          echo $mailerror;
       } else {
          $result = 1;
       }


       echo "Email Sent";