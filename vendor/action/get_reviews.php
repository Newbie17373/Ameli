<?php
session_start();
require "../components/connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Функция для получения положительных отзывов
  function getPositiveReviews() {
    global $conn;
    $sql = "SELECT * FROM reviews WHERE mark >= 4";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

  // Функция для получения отрицательных отзывов
  function getNegativeReviews() {
    global $conn;
    $sql = "SELECT * FROM reviews WHERE mark <= 3";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

  // Функция для получения всех отзывов
  function getAllReviews() {
    global $conn;
    $sql = "SELECT * FROM reviews";
    $result = mysqli_query($conn, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

  function toStr($result) {
    $output = "";
    foreach ($result as $row) {
      $output .= "
        <li class='reviews__list-item'>
          <p class='reviews__text'>" . $row['review'] . "</p>
          <div class='reviews__border'></div>
          <div class='reviews__user'>
            <div class='reviews__user-photo'>
              <img src='" . $row['image'] . "' alt='' class='reviews__user-photo-item'>
            </div>
            <div class='reviews__userdata'>
              <div class='reviews__username'>" . $row['nickname'] . "</div>
              <div class='reviews__userservice'>" . $row['service'] . "</div>
              <div class='reviews__mark'>" . $row['mark'] . "/5</div>";
      
      if (isset($_SESSION['login'])) {
        if ($_SESSION['login'] === $row['login']) {
          // Отзыв создан текущим пользователем
          // Код для добавления меню с кнопками удаления и изменения
          $output .= "
            <button class='reviews__menu'>&#9776;</button>
            <div class='reviews__buttons'>
              <button class='reviews__delete-btn registation__close' onclick='deleteReview(" . $row['index'] . ")'>&#10060;</button>
              <button class='reviews__edit-btn edit-form' onclick='setId(" . $row['index'] . ")'><img class='reviews__edit-btn-item' src='https://cdn-icons-png.flaticon.com/512/1024/1024092.png' alt=''></button>
            </div>";
        }
      }
      
      $output .= "
            </div>
          </div>
        </li>";
    }
    
    return $output;
  }

  $reviews = "";
  $filter = $_POST['filter'];

  if ($filter === 'positive') {
    $reviews = toStr(getPositiveReviews());
  } elseif ($filter === 'negative') {
    $reviews = toStr(getNegativeReviews());
  } else {
    $reviews = toStr(getAllReviews());
  }

  echo json_encode(['reviews' => $reviews]);
}
?>
