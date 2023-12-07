const menuBtn = document.querySelector('.nav-btn');
const links = document.querySelectorAll('.header__nav-list');

links.forEach((link) => {
  menuBtn.addEventListener('click', () => {

    links.forEach((otherLink) => {
      if (otherLink !== link) {
        otherLink.classList.remove('nav__list-link--active');
      }
    });

    link.classList.toggle('header__nav-list--active');
  });
});

const swiperOne = new Swiper('.products__items-box', {
  slidesPerView: "auto",
  breakpoints: {
    0: {
      spaceBetween: 10,
    },
    768: {
      spaceBetween: 30,
    }
  }
});

const swiperTwo = new Swiper('.solution__box', {
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  navigation: {
    nextEl: ".swiper-button-right",
    prevEl: ".swiper-button-left",
  },
  allowTouchMove: false,
});




