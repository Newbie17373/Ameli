<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/SMTP.php';

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_phone = $_POST['user_phone'];

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
    $mail->setFrom('studio.ameli@mail.ru', 'Клиент-отправитель');
    $mail->addAddress('studio.ameli304@gmail.com', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Консультация';
    $mail->Body    = "Здравствуйте, моё имя: <b>'$user_name'</b> и мне нужно с вами проконсультироваться, позвоните по моему номеру телефона: <b>'$user_phone'</b>, или пришлите сообщение на мою почту: <b>'$user_email'</b>.";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


  
    $mail->send();
    echo 'Message has been sent';
    header('Location: ../../thank-u.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
