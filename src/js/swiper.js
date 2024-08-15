// core version + navigation, pagination modules:
import Swiper from "swiper/bundle";
import { Autoplay, Navigation } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";

document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".swiper")) {
    const options = {

      slidesPerView:1,
      spaceBetween:1,
      breakpoints:{
        500:{
          slidesPerView: 2,
          spaceBetween:4,
        },
        768: {
          slidesPerView:3,
          spaceBetween:4
        },
        1366: {
          slidesPerView:5,
          spaceBetween: 8,
        }
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

   
    };

    Swiper.use([Navigation]);
    new Swiper(".swiper", options);
  } 


    const options2 = {
   
      autoplay: {
        delay: 1500,
    },
      scrollbar: {
        el: ".swiper-scrollbar",
   
      },

      breakpoints:{
        768:{
          slidesPerView: 1,
        },
        1024:{
          slidesPerView: 2,
        },
        1420:{
          slidesPerView: 3,
        }


      }
    };

    Swiper.use([Navigation,Autoplay]);
    new Swiper(".swiper2", options2);

  
});



