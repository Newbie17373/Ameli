// Обработчик события клика на кнопку "Удалить"
function deleteReview(reviewId) {
  // Создаем новый объект XMLHttpRequest
  var xhr = new XMLHttpRequest();

  // Устанавливаем метод запроса и URL для отправки AJAX-запроса
  xhr.open("POST", "../../vendor/action/delete_review.php", true);

  // Устанавливаем заголовок Content-Type для передачи данных в формате JSON
  xhr.setRequestHeader("Content-Type", "application/json");

  // Создаем объект с данными для передачи на сервер
  var data = {
    reviewId: reviewId,
  };

  // Преобразуем объект в формат JSON
  var jsonData = JSON.stringify(data);

  // Устанавливаем обработчик события изменения состояния запроса
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Успешное удаление отзыва

        // Обновляем список отзывов на странице
        updateReviewList();
      } else {
        // Ошибка при удалении отзыва
        console.log("Ошибка при удалении отзыва");
      }
    }
  };

  // Отправляем AJAX-запрос с данными на сервер
  xhr.send(jsonData);
}

// Обновление списка отзывов на странице
function updateReviewList() {
  // Здесь реализуйте код для обновления списка отзывов
  // Например, сделайте новый AJAX-запрос для получения актуальных данных списка отзывов и обновите соответствующую часть страницы с помощью JavaScript или jQuery.
  location.reload();
}
