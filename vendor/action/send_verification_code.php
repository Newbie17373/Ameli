<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->setLanguage('ru', '/optional/path/to/language/directory/');
$mail->CharSet = 'utf-8';

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mail.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'studio.ameli@mail.ru';                     //SMTP username
    $mail->Password   = 'czP40uKLGpiGG3rSZHu4';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('studio.ameli@mail.ru', 'Веб-студия Амели');
    $mail->addAddress($to, 'Joe User');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';

    //redirect если header() используется больше одного раза
    function redirect($url)
    {
        if (!headers_sent())
        {    
            header('Location: '.$url);
            exit;
            }
        else
            {  
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$url.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
            echo '</noscript>'; exit;
        }
    }

    redirect('./index.php');
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
