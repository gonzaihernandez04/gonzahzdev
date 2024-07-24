// core version + navigation, pagination modules:
import Swiper from "swiper/bundle";
import { Navigation } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";

document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".swiper")) {
    const options = {
      slidesPerView: 2,
      spaceBetween: 15,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },

        1200: {
          slidesPerView: 4,
        },
      },
    };

    Swiper.use([Navigation]);
    new Swiper(".swiper", options);
  } 


    const options2 = {
      slidesPerView: 2,
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
      },
    };

    Swiper.use([Navigation]);
    new Swiper(".swiper2", options2);

  
});



