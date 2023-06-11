<?php
session_start();
// Подключение к базе данных
require "../components/connect.php";

// Получение данных из POST-запроса
$data = json_decode(file_get_contents("php://input"), true);
$reviewId = $data['reviewId'];

// Запрос на удаление отзыва из базы данных
$sql = "DELETE FROM reviews WHERE `index` = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$reviewId]);

// Проверка наличия ошибок при выполнении запроса
if ($stmt->errorInfo()[0] !== '00000') {
    // Возникла ошибка при удалении отзыва
    http_response_code(500);
    echo "Ошибка при удалении отзыва";
    exit();
}

// Успешное удаление отзыва
http_response_code(200);
echo "Отзыв успешно удален";

// Уменьшение счетчика отзывов пользователя
$query = "UPDATE users SET count = count - 1 WHERE login = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$_SESSION['login']]);
exit(header('Location: ../../index.php'));
?>