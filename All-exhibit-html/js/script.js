var swiper = new Swiper(".carousal-partner", {
    slidesPerView: "auto",
    centeredSlides: true,
    crossFade: true,
    spaceBetween: 20,
    loop: true,
    loopFillGroupWithBlank: true,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    // pagination: {
    //   el: ".swiper-pagination",
    //   clickable: true,
    // },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 1,
  
        },
          768: {
          slidesPerView: 2,
          spaceBetween: 50,
          slidesPerGroup: 2,
  
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
            slidesPerGroup: 3,
  
        },
          1200: {
          slidesPerView: 8,
          spaceBetween: 10,
          slidesPerGroup: 1,
  
        },
      },
    });