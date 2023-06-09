<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$user_service = $_POST['user_service'];
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

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Заказ';
    $mail->Body    = "Здравствуйте, мое имя: <b>'$user_name'</b> и мне нужно с вами поговорить об услуге: <b>$user_service</b>, позвоните мне по номеру телефона: <b>$user_phone</b>, или пришлите сообщение на почту: <b>'$user_email'</b>.";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header('Location: thank-u.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
