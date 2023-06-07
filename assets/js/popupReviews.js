let surveyBtn = document.querySelector(".survey-button");

surveyBtn.addEventListener("click", () => {
  body.classList.toggle("scroll_off");
  document.querySelector(".survey").classList.toggle("active");
});

orderArea.forEach((area) => {
  area.addEventListener("click", () => {
    body.classList.remove("scroll_off");
    document.querySelector(".survey").classList.remove("active");
  });
});

orderCls.forEach((cls) => {
  cls.addEventListener("click", () => {
    body.classList.remove("scroll_off");
    document.querySelector(".survey").classList.remove("active");
  });
});
