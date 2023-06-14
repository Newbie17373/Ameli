let arrInputs = document.querySelectorAll(".registration__input");
let orderInputPht = document.querySelector(".order__input_photo");
let regBtn = document.querySelector(".registration__button");
let regBrnWrp = document.querySelector(".registration__button-wrapper");
let pass = document.querySelector(".registration__input_password");
let passRepeat = document.querySelector(".registration__input_password-repeat");
regBtn.disabled = true;

regBrnWrp.addEventListener("mouseover", () => {
  if (
    pass.value === passRepeat.value &&
    pass.value.length > 0 &&
    passRepeat.value.length > 0
  ) {
    if (regBtn.disabled != false) {
      alert(
        "Пожалуйста, после нажатия на кнопку - 'Зарегистрироваться', подтвердите свою почту для завершения регистрации"
      );
    }
    regBtn.disabled = false;
  } else {
    if (regBtn.disabled != false) {
      regBtn.disabled = true;
      alert(
        "Поля формы пустые и/или неправильно введен подтверждающий пароль."
      );
    }
  }
});
