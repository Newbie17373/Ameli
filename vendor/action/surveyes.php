<?php
session_start();
require "../components/connect.php";

// Проверка, прошло ли 20 минут с момента последнего отзыва
function isAllowedToPostReview($lastReviewTime) {
    if (!$lastReviewTime) {
        // Если нет предыдущих отзывов, разрешаем публикацию
        return true;
    }

    $currentTime = time();
    $lastReviewTimestamp = strtotime($lastReviewTime);
    $interval = 20 * 60; // Интервал в секундах (20 минут)

    return ($currentTime - $lastReviewTimestamp) >= $interval;
}

if (isset($_POST['reviews_text']) && isset($_POST['user_service']) && isset($_POST['user_mark'])) {
    $reviews_text = filter_var($_POST['reviews_text'], FILTER_SANITIZE_STRING);
    $user_service = filter_var($_POST['user_service'], FILTER_SANITIZE_STRING);
    $user_mark = filter_var($_POST['user_mark'], FILTER_SANITIZE_STRING);
    
    $login = $_SESSION['login'];
    $nickname = $_SESSION['nickname'];
    $user_photo = $_SESSION['user_photo'];

   

    // Проверка на количество отзывов пользователя
    $query = "SELECT count FROM users WHERE login = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$login]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $reviewCount = $row['count'];

    if ($reviewCount >= 4) {
        die(require '../components/alert_second.php');
    }   

    // Проверка временного интервала между отзывами
    $query = "SELECT last_review_time FROM users WHERE login = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$login]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $lastReviewTime = $row['last_review_time'];

    if (!isAllowedToPostReview($lastReviewTime)) {
        die(require '../components/alert.php');
    }

    // Добавление отзыва в таблицу `reviews`
    $query = "INSERT INTO reviews (login, review, image, service, nickname, mark) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$login, $reviews_text, $user_photo, $user_service, $nickname, $user_mark]);

    // Увеличение счетчика отзывов пользователя
    $query = "UPDATE users SET count = count + 1 WHERE login = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$login]);

    // Обновление времени последнего отзыва пользователя
    $query = "UPDATE users SET last_review_time = CURRENT_TIMESTAMP WHERE login = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$login]);

    // Перенаправление после выполнения операции
    exit(header('Location: ../../index.php#reviews'));
}
?>

