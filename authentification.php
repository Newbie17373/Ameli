<?php session_start();
if(isset($_SESSION['login'])) die(header('Location: ./index.php'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WS Амели</title>
    <link rel="stylesheet" href="./assets/css/registration.css">
    <script src="./assets/js/passView.js" defer></script>
</head>
<body>
    <div class="wrapper">
    <?php
        require './vendor/components/connect.php';
        
        if(isset($_POST['login']) && isset($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $query1 = "SELECT * FROM users WHERE login = ?";
            $stmt = $pdo->prepare($query1);
            $stmt->execute([$login]);
            $count = $stmt->rowCount();

            if($count === 1) {
                $stmt2 = $pdo->prepare($query1);
                $stmt2->execute([$login]);
                $user = $stmt2->fetch(PDO::FETCH_ASSOC);

                    if ($user && password_verify($password, $user['password'])) {
                        $_SESSION['login'] = $login;
                        $_SESSION['name'] = $user['name'];
                        $_SESSION['surname'] = $user['surname'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['nickname'] = $user['nickname'];
                        $_SESSION['user_photo'] = $user['user_photo'];
                        $_SESSION['user_phone'] = $user['user_phone'];
                        $smsg = "Вы успешно вошли";
                        header("Location: ./index.php");
                    }
                    else {
                        $fmsg = "Был введен неверный логин или пароль";
                    }
            }
            else {
                $fmsg = "Такого пользователя не существует";
            }
        }
        ?>
        <main class="main">
            <div class="registration">
                <div class="registration__inside container">
                    <a href="./index.php" class="registation__close">&#215;</a>
                    <div class="registration__logo">
                        <img src="./assets/img/logos/logo.svg" alt="" class="registration__logo-item">
                    </div>
                    <div class="registration__border"></div>
                    <h5 class="registration__subtitle about__title">Вход</h5>
                    <form action="" class="registration__form" method="post">
                    <?php if(isset($smsg)){ ?><span class="registration__msg registration__msg_successful"><?php echo $smsg ?></span><?php }?>
                    <?php if(isset($fmsg)){ ?><span class="registration__msg registration__msg_unsuccessful"><?php echo $fmsg ?></span><?php }?>
                        <p class="registration__text registration__text_first prices__description">Ваш логин</p>
                        <input type="text" class="registration__input" name="login" placeholder="example" required pattern="[A-z0-9_.-]{6,40}" minlength="9" maxlength="40" value="">
                        <p class="registration__text prices__description">Ваш пароль</p>
                        <div class="registration__password"><input type="password" class="registration__input registration__pass" name="password" type="password" placeholder="S9Scap$iDPRZ" required pattern="[0-9a-zA-Z]{8,16}" minlength="8" maxlength="16" value=""><span class="passView"></span></div>
                        <button class="registration__button" type="submit">Войти</button>
                        <div class="registration__link">
                            <span>Нет учетной записи? <a href="./registration.php" class="registration__link-item"><span>Создайте её.</span></a></span>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>