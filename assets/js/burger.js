let body = document.querySelector("body");
let burger = document.querySelector(".header__burger");
let midPart = document.querySelector(".header__part_mid");

burger.addEventListener("click", () => {
  body.classList.toggle("scroll_off");
  burger.classList.toggle("active");
  midPart.classList.toggle("active");
});
