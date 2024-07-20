var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  loop: true, // Assure que les diapositives bouclent continuellement
  centeredSlides: true, // Syntaxe correcte est 'centeredSlides', pas 'centerSlide'
  fadeEffect: { // Syntaxe correcte pour l'effet de fondu
      crossFade: true
  },
  grabCursor: true, // Syntaxe correcte, pas de guillemets autour de 'true'
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
  },
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
  breakpoints: {
      0: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      950: {
          slidesPerView: 3,
      },
  },
});
