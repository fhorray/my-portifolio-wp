// CERTIFICATES MODAL

const modal = document.querySelector(".modal-overlay");
const schools = document.querySelectorAll(
  ".s-certificates .container ul li button"
);
// const modalItem = document.querySelector(".modal-certificate");

// schools variables
const generalSchoolClass = document.querySelectorAll(".modal-overlay .item");
const origamid = document.querySelector(".modal-overlay .origamid");
const ebac = document.querySelector(".modal-overlay .ebac");
const udemy = document.querySelector(".modal-overlay .udemy");

for (let i = 0; i < generalSchoolClass.length; i++)
  for (let i = 0; i < schools.length; i++)
    schools[i].addEventListener("click", function () {
      modal.classList.remove("modal-hidden");

      if (generalSchoolClass[i].classList.contains("origamid")) {
        origamid.classList.remove("item-modal-hidden");
        ebac.classList.add("item-modal-hidden");
        udemy.classList.add("item-modal-hidden");
      } else if (generalSchoolClass[i].classList.contains("ebac")) {
        origamid.classList.add("item-modal-hidden");
        ebac.classList.remove("item-modal-hidden");
        udemy.classList.add("item-modal-hidden");
      } else if (generalSchoolClass[i].classList.contains("udemy")) {
        origamid.classList.add("item-modal-hidden");
        ebac.classList.add("item-modal-hidden");
        udemy.classList.remove("item-modal-hidden");
      }
    });

const closeBtn = document.querySelectorAll(".close-modal button");
closeBtn.forEach(function (item) {
  item.addEventListener("click", function () {
    modal.classList.add("modal-hidden");
  });
});

modal.addEventListener("click", function () {
  modal.classList.add("modal-hidden");
});
