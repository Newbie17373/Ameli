let regPassInpt = document.querySelectorAll(".registration__pass");
let passView = document.querySelectorAll(".passView");

for (let i = 0; i < regPassInpt.length; i++) {
  regPassInpt[i].oninput = function (event) {
    passView[i].innerHTML = regPassInpt[i].value;
  };
}
