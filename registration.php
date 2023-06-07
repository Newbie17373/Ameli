<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WS Амели</title>
    <link rel="stylesheet" href="./assets/css/registration.css">
    <script src="./assets/js/validation.js" defer></script>
</head>
<body>
    <div class="wrapper">
    <?php
        require './vendor/components/connect.php';

        if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['nickname']) ) {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $password = $_POST['password'];
            $nickname = $_POST['nickname'];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            if ($login != "" && $email != "" && $name != "" && $surname != "" && $password != "" && $nickname != "") {
                $query1 = "SELECT * FROM users WHERE login = ? AND nickname = ?";
                $stmt = $pdo->prepare($query1);
                $stmt->execute([$login, $nickname]);
                $count = $stmt->rowCount();
            }
            else {
                $count = null;
            }
            echo var_dump(isset($count));

            if($count === 1) {
                $fmsg = "Такой пользователь уже существует";
            }
            else if($count === null){
                $fmsg = "Одно или несколько полей формы пустые";
            }
            else {
                $query2 = "INSERT INTO users (login, email, name, surname, password , nickname) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = $pdo->prepare($query2); 
                $stmt->execute([$login, $email, $name, $surname, $hashedPassword, $nickname]);
                $smsg = "Регистрация прошла успешно";
                header('Location: ./index.php');
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
                        <h5 class="registration__subtitle about__title">Регистрация</h5>
                        <form action="" class="registration__form" name="registrationForm" method="post">
                        <?php if(isset($smsg)){ ?><span class="registration__msg registration__msg_successful"><?php echo $smsg ?></span><?php }?>
                        <?php if(isset($fmsg)){ ?><span class="registration__msg registration__msg_unsuccessful"><?php echo $fmsg ?></span><?php }?>
                            <p class="registration__text registration__text_first prices__description">Ваш логин</p>
                            <input type="text" class="registration__input" name="login" placeholder="example" required pattern="[A-Za-z]{9-40}" minlength="9" maxlength="40" value="">
                            <p class="registration__text prices__description">Ваша почта</p>
                            <input type="email" class="registration__input" name="email" placeholder="example@gmail.com" required pattern="[A-Za-z]{9-60}" minlength="9" maxlength="60" value="">
                            <p class="registration__text prices__description">Ваше имя</p>
                            <input type="text" class="registration__input" name="name" placeholder="Александр" required pattern="[А-Яа-я]{3-40}" minlength="3" maxlength="40" value="">
                            <p class="registration__text prices__description">Ваша фамилия</p>
                            <input type="text" class="registration__input" name="surname" placeholder="Иванов" required pattern="[А-Яа-я]{6-40}" minlength="6" maxlength="40"  value="">
                            <p class="registration__text prices__description">Ваш никнейм</p>
                            <input type="text" class="registration__input" name="nickname" placeholder="Alex2003" required pattern="[А-Яа-я]{6-40}" minlength="6" maxlength="40"  value="">
                            <p class="registration__text prices__description">Ваш пароль</p>
                            <input type="password" class="registration__input registration__input_password" name="password" type="password" placeholder="S9Scap$iDPRZ" required pattern="[A-Za-z]{8-16}" minlength="8" maxlength="16" value="">
                            <p class="registration__text prices__description">Повторите ваш пароль</p>
                            <input type="password" class="registration__input registration__input_password-repeat" type="password" placeholder="S9Scap$iDPRZ" required pattern="[A-Za-z][0-9]{8-16}" minlength="8" maxlength="16" value="">
                            <input type="submit" class="registration__button" value="Зарегистрироваться">
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