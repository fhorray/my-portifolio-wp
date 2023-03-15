// Light and dark mode
const body = document.querySelector("body");
const modeBtn = document.querySelector("#light-mode");
let imgMode = document.querySelector("#img-mode");

modeBtn.addEventListener("click", function () {
  body.classList.toggle("light-mode");
  if (imgMode.src === "https://fsantos.vercel.app/img/sun-i.svg") {
    imgMode.src = "https://fsantos.vercel.app/img/moon-on-i.svg";
  } else if (imgMode.src === "https://fsantos.vercel.app/img/moon-on-i.svg") {
    imgMode.src = "https://fsantos.vercel.app/img/sun-i.svg";
  }
});

// Language dropdown
const languageBtn = document.querySelector("#language-btn");
const languageContainer = document.querySelector(".lang-dropdown");

languageBtn.addEventListener("click", function () {
  languageContainer.classList.toggle("visible");
});
