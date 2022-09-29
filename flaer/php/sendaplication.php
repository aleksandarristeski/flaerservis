<?php
$name = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$adresa = $_POST['adresa'];
$poraka = $_POST['poraka'];
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require 'vendor/autoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = '';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = ;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    
    
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
     $mail->Port       = ;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('', 'FlaerInfoAplikacija');
    $mail->addAddress('');     //Add a recipient
    $mail->addAddress('');             
    $mail->addReplyTo( $email, 'addReplyToInformation');
   // $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Aplikacija za mini rabota';
    $mail->Body    = 'Ime i prezime: ' . $name . '<br>Email: ' . $email . '<br>Telefon: ' . $telefon . '<br>Mesto na ziveenje: ' . $adresa . '<br>Poraka: ' .  $poraka ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
