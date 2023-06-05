let arrBtnOrder = document.querySelectorAll(".button-order");
let arrBtnConsult = document.querySelectorAll(".button-consult");
let orderArea = document.querySelectorAll(".order__area");
let orderCls = document.querySelectorAll(".order__close");

arrBtnOrder.forEach((btn) => {
  btn.addEventListener("click", () => {
    body.classList.toggle("scroll_off");
    document.querySelector(".order").classList.toggle("active");
  });
});

arrBtnConsult.forEach((btn) => {
  btn.addEventListener("click", () => {
    body.classList.toggle("scroll_off");
    document.querySelector(".consult").classList.toggle("active");
  });
});

orderArea.forEach((area) => {
  area.addEventListener("click", () => {
    body.classList.toggle("scroll_off");
    document.querySelector(".order").classList.remove("active");
    document.querySelector(".consult").classList.remove("active");
  });
});

orderCls.forEach((cls) => {
  cls.addEventListener("click", () => {
    body.classList.toggle("scroll_off");
    document.querySelector(".order").classList.remove("active");
    document.querySelector(".consult").classList.remove("active");
  });
});
