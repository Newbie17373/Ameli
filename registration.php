<?php session_start();
if(isset($_SESSION['login'])) die(header('Location: ./index.php'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; img-src 'self' data:; media-src 'none'; object-src 'none'; font-src 'self';">
    <title>Амели</title>
    <link rel="stylesheet" href="./assets/css/layouts/registration.css">
    <link rel="icon" href="./assets/img/logos/favicon.svg" />
    <script src="./assets/js/validation.js" defer></script>
    <script src="./assets/js/passView.js" defer></script>
    <script src="./assets/js/file.js" defer></script>
</head>
<body>
    <div class="wrapper">
    <?php
        require './vendor/components/connect.php';

             // Проверка строки изображения на наличие прямой ссылки на фото 

    // Расширения файлов для фотографии
    $arrExt = [".jpeg", ".jfif" , ".jpg" , ".JPG" , ".JPE", ".bmp", ".dib", ".rle", ".gif"]; 

    // Стандартное фото профиля
    $defaultImg = "https://www.pravilamag.ru/upload/img_cache/e8a/e8a0c5d3cefffee703a2d9a58cde797e_ce_1080x673x0x23_cropped_666x444.jpg";
    $filePathInDb = '';

        if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['nickname']) && isset($_FILES['user_photo'])) {

                        // Проверяем, был ли отправлен файл
                        if(isset($_FILES['user_photo'])) {
                        $file = $_FILES['user_photo'];
    
                        // Проверяем размер файла
                        $maxFileSize = 2 * 1024 * 1024; // 2MB (в байтах)
                        if ($file['size'] > $maxFileSize) {
                            $fmsg = 'Размер файла превышает допустимый лимит (2MB). Пожалуйста, выберите файл меньшего размера.';
                        }

                        // Генерируем уникальное имя файла
                        $fileName = uniqid() . '_' . $file['name'];

                        // Путь сохранения файла
                        $uploadPath = './assets/img/users_photos/' . $fileName;

                        // Перемещаем файл в указанную папку
                        if(move_uploaded_file($file['tmp_name'], $uploadPath)) {
                            // Файл успешно загружен, можно сохранить путь в базу данных
                            $filePathInDb = './assets/img/users_photos/' . $fileName;
                            // Далее сохраняйте $filePathInDb в столбец user_photo таблицы users или делайте с ним то, что вам нужно
                            $smsg = 'Файл успешно загружен.';
                        } else {
                            $filePathInDb = $defaultImg;
                        }
                    } else {
                        $filePathInDb = $defaultImg;
                    }
            $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            $nickname = filter_var($_POST['nickname'], FILTER_SANITIZE_STRING);
            $user_photo = filter_var($filePathInDb, FILTER_SANITIZE_STRING);
            $user_phone = filter_var($_POST['user_phone'], FILTER_SANITIZE_STRING);
            $verification_code = uniqid();
            $hashedVerification_code = password_hash($verification_code, PASSWORD_DEFAULT);
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            if ($login != "" && $email != "" && $name != "" && $password != "" && $nickname != "" && $user_photo != "" && $user_phone != "" && $verification_code != "") {
                $query1 = "SELECT * FROM users WHERE login = ?";
                $stmt = $pdo->prepare($query1);
                $stmt->execute([$login]);
                $count = $stmt->rowCount();
                $query2 = "SELECT * FROM users WHERE nickname = ?";
                $stmt = $pdo->prepare($query2);
                $stmt->execute([$nickname]);
                $count += $stmt->rowCount();
                $query3 = "SELECT * FROM users WHERE email = ?";
                $stmt = $pdo->prepare($query3);
                $stmt->execute([$email]);
                $count += $stmt->rowCount();
            }
            else {
                $count = null;
            }

            if($count > 0) {
                $fmsg .= "Такой никнейм, почта или логин заняты. ";
            }
            else if($count === null){
                $fmsg .= "Одно или несколько полей формы пустые. ";
            }
            else {
                $query3 = "INSERT INTO users (login, email, name, password , nickname, user_photo, user_phone, status, verification_code, original_verification_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($query3); 
                $stmt->execute([$login, $email, $name, $hashedPassword, $nickname, $user_photo, $user_phone, 'unverified', $hashedVerification_code, $verification_code]);
                $to = $email;
                $subject = "Подтверждение адреса электронной почты";
                $message = "Добро пожаловать " .  $nickname . "! Пожалуйста, перейдите по ссылке для подтверждения вашего адреса электронной почты:  http://localhost/vendor/action/verify.php?code=$hashedVerification_code";
                $headers = "From: studio.ameli@mail.ru";
                require "./vendor/action/send_verification_code.php";
                $smsg = "Регистрация прошла успешно";
            }
        }
        ?>
        <main class="main">
            <div class="registration">
                    <div class="registration__inside container">
                        <a href="./index.php" class="registation__close">&#215;</a>
                        <a href="./index.php" class="registration__logo">
                            <img src="./assets/img/logos/logo.svg" alt="" class="registration__logo-item">
                        </a>
                        <div class="registration__border"></div>
                        <h5 class="registration__subtitle about__title">Регистрация</h5>
                        <form action="" class="registration__form" name="registrationForm" method="post" enctype="multipart/form-data">
                        <?php if(isset($smsg)){ ?><span class="registration__msg registration__msg_successful"><?php echo $smsg ?></span><?php }?>
                        <?php if(isset($fmsg)){ ?><span class="registration__msg registration__msg_unsuccessful"><?php echo $fmsg ?></span><?php }?>
                            <p class="registration__text registration__text_first prices__description">Ваш логин</p>
                            <input type="text" class="registration__input" name="login" placeholder="Example" required pattern="[A-z0-9_.-]{6,40}" minlength="9" maxlength="40" value="">
                            <p class="registration__text prices__description">Ваша почта</p>
                            <input type="email" class="registration__input" name="email" placeholder="example123@gmail.com" required pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" minlength="9" maxlength="60" value="">
                            <p class="registration__text prices__description">Ваш номер телефона</p>
                            <input type="tel" class="order__input registration__input" name="user_phone" placeholder="89136798698" required pattern="[0-9]{11}" minlength="11" maxlength="11">
                            <p class="registration__text prices__description">Ваше имя</p>
                            <input type="text" class="registration__input" name="name" placeholder="Александр" required pattern="[А-Яа-я]{3,40}" minlength="3" maxlength="40" value="">
                            <p class="registration__text prices__description">Ваш псеводоним</p>
                            <input type="text" class="registration__input" name="nickname" placeholder="Alex2003" required pattern="[A-z0-9_.-]{4,40}" minlength="4" maxlength="40"  value="">
                            <p class="registration__text prices__description">Ваше фото профиля</p>
                            <label class="order__input registration__input-photo">
                            <input type="file" class="order__input registration__input registration__input-photo-item" accept=".jpeg, .jfif, .jpg, .JPG, .JPE, .bmp, .dib, .rle, .gif" name="user_photo" value="" onchange="showFileName(this)">
                            <span class="order__input-file-btn">Выберите файл</span> 
                            <span class="order__input-text">Максимум 2мб</span>
                            </label>
                            <p class="registration__text prices__description">Ваш пароль</p>
                            <div class="registration__password"><input type="password" class="registration__input registration__input_password registration__pass" name="password" type="password" placeholder="S9Scap$iDPRZ" required pattern="[0-9a-zA-Z]{8,16}" minlength="8" maxlength="16" value=""><span class="passView"></span></div>
                            <p class="registration__text prices__description">Повторите ваш пароль</p>
                            <div class="registration__password"><input type="password" class="registration__input registration__input_password-repeat registration__pass" type="password" placeholder="S9Scap$iDPRZ" required pattern="[0-9a-zA-Z]{8-16}" minlength="8" maxlength="16" value=""><span class="passView"></span></div>
                            <a class="registration__button-wrapper"><input type="submit" class="registration__button" value="Зарегистрироваться"></a>
                            <div class="registration__link">
                                <span>Уже есть аккаунт? <a href="./authentification.php" class="registration__link-item"><span>Войти.</span></a></span>
                            </div>
                        </form>
                    </div>
                </div>
        </main>
    </div>
</body>
</html>