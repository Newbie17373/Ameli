// Функция для получения отзывов через Ajax-запрос
function getReviews(filter) {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const response = JSON.parse(xhr.responseText);
      const reviews = response.reviews;
      updateReviewsList(reviews);
    }
  };

  // Формируем данные для отправки на сервер
  const data = new FormData();
  data.append("filter", filter);

  // Отправляем Ajax-запрос
  xhr.open("POST", "../../../vendor/action/get_reviews.php", true);
  xhr.send(data);
}

// Функция для обновления списка отзывов
function updateReviewsList(reviews) {
  const reviewsList = document.querySelector(".reviews__list");
  reviewsList.innerHTML = reviews;
}

// Обработчик клика на кнопку "Положительные"
document
  .querySelector(".reviews__controls-menu_positive")
  .addEventListener("click", function () {
    getReviews("positive");
    setTimeout(() => {
      reviewsList.scrollBy(44400, 0);
      reviewsList.scrollBy(-4444444000, 0);
    }, 1100);
  });

// Обработчик клика на кнопку "Отрицательные"
document
  .querySelector(".reviews__controls-menu_negative")
  .addEventListener("click", function () {
    getReviews("negative");
    setTimeout(() => {
      reviewsList.scrollBy(44400, 0);
      reviewsList.scrollBy(-4444444000, 0);
    }, 1100);
  });

// Обработчик клика на кнопку "Все"
document
  .querySelector(".reviews__controls-menu_usual")
  .addEventListener("click", function () {
    getReviews("all");
    setTimeout(() => {
      reviewsList.scrollBy(44400, 0);
      reviewsList.scrollBy(-4444444000, 0);
    }, 1100);
  });

// Получение отзывов при загрузке страницы
window.addEventListener("DOMContentLoaded", function () {
  getReviews("all");
  setTimeout(() => {
    reviewsList.scrollBy(44400, 0);
    reviewsList.scrollBy(-4444444000, 0);
  }, 1100);
});
