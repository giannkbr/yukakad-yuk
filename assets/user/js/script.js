$(window).scroll(function () {
  $('nav, a, span').toggleClass('scrolled', $(this).scrollTop() > 20);
});

AOS.init({
  once: true,
});

function myFunction(x) {
  if (x.matches) {
    // If media query matches
    var swiper = new Swiper('.mySwiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  } else {
    var swiper = new Swiper('.mySwiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }
}

var x = window.matchMedia('(max-width: 991px)');
myFunction(x); // Call listener function at run time
x.addListener(myFunction); // Attach listener function on state changes
