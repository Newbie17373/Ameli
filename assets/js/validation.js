let arrInputs = document.querySelectorAll(".registration__input");
let orderInputPht = document.querySelector(".order__input_photo");
let regBtn = document.querySelector(".registration__button");
let regBrnWrp = document.querySelector(".registration__button-wrapper");
let pass = document.querySelector(".registration__input_password");
let passRepeat = document.querySelector(".registration__input_password-repeat");
let counter = 0;
console.log(typeof orderInputPht.value);

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
    counter === -arrInputs.length + 2 &&
    pass.value === passRepeat.value &&
    (orderInputPht.value === "" || orderInputPht.value != "")
      ? (regBtn.disabled = false)
      : (regBtn.disabled = true);
  });
}

console.log(regBtn.disabled);

regBtn.addEventListener("mouseout", () => {
  if (orderInputPht.value != "") counter += 2;
  if (counter === -arrInputs.length + 2 && pass.value === passRepeat.value) {
    regBtn.disabled = false;
  } else {
    if (regBtn.disabled != false) {
      (regBtn.disabled = true),
        alert(
          "Поля формы пустые и/или неправильно введен подтверждающий пароль."
        );
    }
  }
});
