<?php
session_start();
require "../components/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Получите данные из POST-запроса
  $reviewId = $_POST['id'];
  $updatedReviewText = $_POST['reviewText'];
  $updatedUserService = $_POST['userService'];
  $updatedUserMark = $_POST['userMark'];

  // Выполните запрос к базе данных для обновления отзыва
  $sql = "UPDATE reviews SET review = :reviewText, service = :userService, mark = :userMark WHERE `index` = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':reviewText', $updatedReviewText, PDO::PARAM_STR);
  $stmt->bindParam(':userService', $updatedUserService, PDO::PARAM_STR);
  $stmt->bindParam(':userMark', $updatedUserMark, PDO::PARAM_STR);
  $stmt->bindParam(':id', $reviewId, PDO::PARAM_INT);
  $stmt->execute();

  // Проверьте, было ли успешно обновление отзыва
  if ($stmt->rowCount() > 0) {
    $response = [
      'success' => true,
      'message' => 'Отзыв успешно обновлен',
    ];
  } else {
    $response = [
      'success' => false,
      'message' => 'Ошибка при обновлении отзыва',
    ];
  }

  // Верните ответ в формате JSON
  header('Content-Type: application/json');
  echo json_encode($response);
}
?>
