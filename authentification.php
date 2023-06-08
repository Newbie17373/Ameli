<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WS Амели</title>
    <link rel="stylesheet" href="./assets/css/registration.css">
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
                        $smsg = "Вы успешно вошли";
                    }
                    else {
                        $fmsg = "Был введен неверный логин или пароль";
                    }
            }
            else {
                $fmsg = "Был введен неверный логин или пароль";
            }
            header("Location: ./index.php");
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
                        <input type="text" class="registration__input" name="login" placeholder="example" minlength="9" maxlength="40" require>
                        <p class="registration__text prices__description">Ваш пароль</p>
                        <input type="password" class="registration__input" name="password" type="password" placeholder="S9Scap$iDPRZ" minlength="8" maxlength="16" require>
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