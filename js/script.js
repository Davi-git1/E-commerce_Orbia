const swiper = new Swiper('.swiper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      dynamicBullets: true,
    },

    breakpoints: {
      515: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1231: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
      1550: {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    }
  }
);

const swiperButtonOferta = new Swiper('.swiperButtonOferta', {
    loop: true,
    grabCursor: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      dynamicBullets: true,
    },

    breakpoints: {
      515: {
        slidesPerView: 5,
      },
      600: {
        slidesPerView: 5,
        spaceBetween: 5,
      },
      950: {
        slidesPerView: 9,
        spaceBetween: 5,
      },
      1550: {
        slidesPerView: 9,
        spaceBetween: 10,
      },
    }
  }
);

const swiperCarousel = new Swiper('.swiperCarousel', {
    loop: true,
    grabCursor: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      dynamicBullets: true,
    },

    scrollbar: {
    el: '.swiper-scrollbar',
  },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
    }
  }
);










const header = document.getElementById('meuHeader');

window.addEventListener('scroll', () => {
  if (window.scrollY > 100) {
    header.classList.add('fixo');
  } else {
    header.classList.remove('fixo');
  }
});



  const track = document.querySelector('.carousel-track');
  const slides = Array.from(track.children);
  const nextButton = document.querySelector('.next');
  const prevButton = document.querySelector('.prev');
  let currentIndex = 0;

  function updateSlidePosition() {
    const slideWidth = slides[0].getBoundingClientRect().width;
    track.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }

  nextButton.addEventListener('click', () => {
    if (currentIndex < slides.length - 1) {
      currentIndex++;
      updateSlidePosition();
    }
  });

  prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateSlidePosition();
    }
  });

  window.addEventListener('resize', updateSlidePosition);
