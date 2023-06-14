<?php session_start();
if(isset($_SESSION['login'])) die(header('Location: ./index.php'));

require '../components/connect.php';


$hashedVerificationCode = $_GET['code'];




// Проверка наличия кода подтверждения в базе данных
$query = "SELECT * FROM users WHERE verification_code = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$hashedVerificationCode]);
$count = $stmt->rowCount();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$login = $row['login'];
if ($count > 0 && password_verify($row['original_verification_code'], $hashedVerificationCode)) {
    $query2 = "UPDATE users SET status = 'verified' WHERE login = ?";
    $stmt = $pdo->prepare($query2);
    $stmt->execute([$login]);

    $sql = "UPDATE users SET verification_code = ?, original_verification_code = ? WHERE login = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['', '', $login]);

   die(header('Location: ../components/alert_third.php'));
    
} else {
    die(header('Location: ../components/alert_fourth.php'));
}

?>