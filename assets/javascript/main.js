"use strict";

const navContainer = document.querySelector(".navigation__box");

//nav smooth scrolling using event delegation
navContainer.addEventListener("click", function (e) {
  e.preventDefault();

  if (e.target.classList.contains("navigation__link")) {
    const id = e.target.getAttribute("href");
    document.querySelector(id).scrollIntoView({
      behavior: "smooth",
    });
  }
});
