<?php

$kompany = $_POST['kompany'];
$name = $_POST['name'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$usluga = $_POST['usluga'];
$datum = $_POST['datum'];
$kolicina = $_POST['kolicina'];
$lokacija = $_POST['lokacija'];
$oblast = $_POST['oblast'];
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
    $mail->Host       = 'mail.flaerservis.mk';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@flaerservis.mk';                     //SMTP username
    $mail->Password   = 'makedonija01!';                               //SMTP password
    
    
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@flaerservis.mk', 'FlaerInfoPonuda');
    $mail->addAddress('aleksandar.risteski87@gmail.com');     //Add a recipient
    $mail->addAddress('dimitrovskinaum@gmail.com');             
    $mail->addReplyTo( $email, 'addReplyToInformation');
   // $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Baranje na ponuda';
    $mail->Body    =  'Ime na Firma: ' . $kompany .
                      '<br>Ime i prezime: ' . $name .  
                      '<br>Email: ' . $email . 
                      '<br>Telefon: ' . $telefon . 
                      '<br>Uslugi: ' . $usluga .
                      '<br>Poceten datum: ' . $datum .
                      '<br>Kolicina: ' . $kolicina .
                      '<br>Lokacija: ' . $lokacija .
                      '<br>Oblast: ' . $oblast . 
                      '<br>Poraka: ' .  $poraka ;

    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
