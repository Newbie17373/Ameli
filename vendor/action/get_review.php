<?php
session_start();
// Подключение к базе данных
require "../components/connect.php";

// Получите значение идентификатора отзыва из параметра id в GET-запросе
$reviewId = $_GET['id'];
// echo var_dump($reviewId);

// Выполните запрос к базе данных для получения данных отзыва по его идентификатору
$sql = "SELECT * FROM reviews WHERE `index` = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $reviewId, PDO::PARAM_INT);
$stmt->execute();

// Получите данные отзыва
$review = $stmt->fetch(PDO::FETCH_ASSOC);

// Проверьте, найден ли отзыв с указанным идентификатором
if ($review) {
  // Верните данные отзыва в формате JSON
  $response = [
    'success' => true,
    'reviewText' => $review['review'],
    'userService' => $review['service']
  ];
} else {
  // Отзыв не найден
  $response = [
    'success' => false,
    'message' => 'Отзыв не найден'
  ];
}

// Верните ответ в формате JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
