document.addEventListener("DOMContentLoaded", function () {
  setTimeout(() => {
    let html = document.querySelector("html");
    let menus = document.getElementsByClassName("reviews__buttons");

    html.addEventListener("click", (event) => {
      for (let menu of menus) {
        let menuBtn = menu.previousElementSibling;

        if (menuBtn.contains(event.target)) {
          menu.classList.toggle("active");
        } else if (!menu.contains(event.target)) {
          menu.classList.remove("active");
          html.classList.remove("area");
        }
      }
    });
  }, 500);
});
