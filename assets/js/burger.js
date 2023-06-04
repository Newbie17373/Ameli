let body = document.querySelector("body");
let burger = document.querySelector(".header__burger");
let midPart = document.querySelector(".header__part_mid");
let leftPart = document.querySelector(".header__part_left");

burger.addEventListener("click", () => {
  body.classList.toggle("scroll_off");
  burger.classList.toggle("active");
  midPart.classList.toggle("active");
  leftPart.classList.toggle("active");
});
