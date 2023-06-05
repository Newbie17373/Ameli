let arrInputs = document.querySelectorAll(".registration__input");
let regBtn = document.querySelector(".registration__button");
let pass = document.querySelector(".registration__input_password");
let passRepeat = document.querySelector(".registration__input_password-repeat");
let counter = 0;

if (counter === 0) {
  for (i = 0; i < arrInputs.length; i++) {
    arrInputs[i].value.length < 1 ? counter++ : counter--;
  }

  counter === -arrInputs.length
    ? (regBtn.disabled = false)
    : (regBtn.disabled = true);
  counter = 0;
}

for (i = 0; i < arrInputs.length; i++) {
  arrInputs[i].addEventListener("change", () => {
    counter = 0;
    for (i = 0; i < arrInputs.length; i++) {
      arrInputs[i].value.length < 1 ? counter++ : counter--;
    }
    counter === -arrInputs.length && pass.value === passRepeat.value
      ? ((regBtn.disabled = false), console.log("just do it"))
      : ((regBtn.disabled = true), console.log("fuck off bich"));
  });
}
