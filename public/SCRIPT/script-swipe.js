var swiper = new Swiper(".unique-swiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 150,
    modifier: 2.5,
    slideShadows: true,
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".unique-swiper-button-next",
    prevEl: ".unique-swiper-button-prev",
  },
  pagination: {
    el: ".unique-pagination",
    clickable: true,
  },
});
