let id;
function setId(reviewId) {
  id = reviewId;
  body.classList.toggle("scroll_off");
  document.querySelector(".survey__update").classList.toggle("active");

  // Отправьте AJAX-запрос на сервер для получения данных отзыва
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "../vendor/action/get_review.php?id=" + reviewId, true);
  xhr.setRequestHeader("Content-Type", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Обработайте успешный ответ от сервера
      let response = JSON.parse(xhr.responseText);
      if (response.success) {
        // Заполните поля формы данными отзыва
        reviewEditText.value = response.reviewText;
        reviewEditMenu.value = response.userService;
      } else {
        // Обработайте ошибку получения данных отзыва
        console.log("Ошибка получения данных отзыва");
      }
    }
  };
  xhr.send();
  console.log(typeof id);
}
let reviewEditText = document.querySelector(".order__textarea_edit");
let reviewEditMenu = document.querySelector(".order__menu_edit");
let reviewEditBtn = document.querySelector(".order__button_edit");
// Обработчик события клика на кнопку "Обновить"

reviewEditBtn.addEventListener("click", () => {
  // Получение значений полей формы
  let updatedReviewText = reviewEditText.value;
  let updatedUserService = reviewEditMenu.value;

  // Создание объекта FormData и добавление значений полей
  let formData = new FormData();
  formData.append("id", id); // Идентификатор отзыва
  formData.append("reviewText", updatedReviewText);
  formData.append("userService", updatedUserService);

  // Отправка AJAX-запроса на сервер
  fetch("../vendor/action/update_review.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        // Обработка успешного обновления отзыва
        console.log("Отзыв успешно обновлен");
        updateReviewList();
        // Выполните действия, которые вам нужно после успешного обновления отзыва
      } else {
        // Обработка ошибки при обновлении отзыва
        console.log("Ошибка при обновлении отзыва");
        updateReviewList();
      }
    })
    .catch((error) => {
      console.log("Ошибка при выполнении запроса", error);
      updateReviewList();
    });
});

// Обновление списка отзывов на странице
function updateReviewList() {
  // Здесь реализуйте код для обновления списка отзывов
  // Например, сделайте новый AJAX-запрос для получения актуальных данных списка отзывов и обновите соответствующую часть страницы с помощью JavaScript или jQuery.
  location.reload();
}

orderArea.forEach((area) => {
  area.addEventListener("click", () => {
    body.classList.remove("scroll_off");
    document.querySelector(".survey__update").classList.remove("active");
  });
});

orderCls.forEach((cls) => {
  cls.addEventListener("click", () => {
    body.classList.remove("scroll_off");
    document.querySelector(".survey__update").classList.remove("active");
  });
});
