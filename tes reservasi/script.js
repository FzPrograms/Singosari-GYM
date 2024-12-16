// const signUpButton=document.getElementById('signUpButton');
// const signInButton=document.getElementById('signInButton');
// const signInForm=document.getElementById('signIn');
// const signUpForm=document.getElementById('signup');

// signUpButton.addEventListener('click',function(){
//     signInForm.style.display="none";
//     signUpForm.style.display="block";
// })
// signInButton.addEventListener('click', function(){
//     signInForm.style.display="block";
//     signUpForm.style.display="none";
// })






'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");

const toggleNavbar = function () { navbar.classList.toggle("active"); }

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () { navbar.classList.remove("active"); }

addEventOnElem(navLinks, "click", closeNavbar);



/**
 * header & back top btn active
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

// window.addEventListener("scroll", function () {
//   if (window.scrollY >= 100) {
//     header.classList.add("active");
//     backTopBtn.classList.add("active");
//   } else {
//     header.classList.remove("active");
//     backTopBtn.classList.remove("active");
//   }
// });
// Fungsi untuk membuat loker
function createLockers() {
  const lockerGrid = document.getElementById("lockerGrid");
  const totalLockers = 50; // Total loker

  // Bersihkan grid sebelum membuat loker
  lockerGrid.innerHTML = '';

  for (let i = 1; i <= totalLockers; i++) {
      const locker = document.createElement("div");
      locker.classList.add("locker");
      locker.textContent = `Loker ${i}`;
      locker.dataset.index = i; // Simpan index loker
      locker.dataset.reserved = "false"; // Status awal loker

      locker.addEventListener("click", function () {
          // Logika pemilihan loker
          if (locker.classList.contains("reserved")) {
              const message = document.getElementById("message");
              message.textContent = "Loker ini sudah dipesan.";
          } else {
              // Batalkan semua loker yang dipilih
              const selectedLockers = document.querySelectorAll(".locker.selected");
              selectedLockers.forEach((selected) => {
                  selected.classList.remove("selected");
                  selected.dataset.reserved = "false";
              });
              // Tandai loker yang dipilih
              locker.classList.toggle("selected");
              locker.dataset.reserved = locker.classList.contains("selected") ? "true" : "false";
          }
      });

      lockerGrid.appendChild(locker);
  }
}

// Panggil fungsi createLockers saat halaman dimuat
document.addEventListener('DOMContentLoaded', createLockers);