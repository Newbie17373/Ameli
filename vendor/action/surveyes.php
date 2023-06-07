<?php
session_start();
require "../components/connect.php";
if(isset($_POST['reviews_text']) && isset($_POST['user_photo']) && isset($_POST['user_service'])) {
    $reviews_text = $_POST['reviews_text'];
    $user_photo = $_POST['user_photo'];
    $user_service = $_POST['user_service'];

    $sql = "INSERT INTO reviews (login, review, image, service, nickname) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'sssss', $_SESSION['login'], $reviews_text, $user_photo, $user_service, $_SESSION['nickname']);
    mysqli_stmt_execute($stmt);
    
    // Проверка наличия ошибок при выполнении запроса
    if (mysqli_error($conn)) {
        die("Error: " . mysqli_error($conn));
    }
    
    // Закрытие соединения с базой данных
    mysqli_close($conn);

    // Перенаправление после выполнения операции
    header('Location: ../../index.php');
    exit;
}
?>
