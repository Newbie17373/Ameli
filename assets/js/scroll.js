let reviewsList = document.querySelector(".reviews__list");

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(() => {
    reviewsList.scrollBy(44400, 0);
    reviewsList.scrollBy(-4444444000, 0);
  }, 1500);
});
