<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'src/Exception.php';
require 'src/SMTP.php';
require 'src/PHPMailer.php';

//Create an instance; passing `true` enables exceptions
function sendMail($mailTo, $title, $context){
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ntbinh14122004@gmail.com';                     //SMTP username
        $mail->Password   = 'qhhvnflcocqmkhzk';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('ntbinh14122004@gmail.com', 'Ngo Thanh Binh');
        $mail->addAddress($mailTo);     //Add a recipient
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $title;
        $mail->Body    = $context;
        $mail->send();
        // $mail->sendMail();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
};

?>