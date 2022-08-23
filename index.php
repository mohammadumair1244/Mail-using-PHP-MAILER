<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


// if(isset($_POST['send']))
// {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='mohammadumair1244@gmail.com';
    $mail->Password='';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('mohammadumair1244@gmail.com');
    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    
    $mail->Subject=$_POST["subject"];
    $mail->Body=$_POST["message"];

    $mail->send();

    echo "Mail Sent";
// }

// else
// {

    // echo "Message could not be sent. Mailer Error";


// }

// catch (Exception $e) {
// }



?>


