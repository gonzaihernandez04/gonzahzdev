const { getSlideTransformEl } = require("swiper/effect-utils");

window.addEventListener("DOMContentLoaded", () => {
  apiTech();
});

async function apiTech() {
  // TODO cambiar URL para la API
  const response = await fetch("http://localhost:3000/api/tecnologias");
  const tecnologias = await response.json();
  imprimirTecnologias(tecnologias);
}

function imprimirTecnologias(tecnologias) {
  const contenedor = document.querySelector(".tecnologias");
  const slideContainer = document.createElement("DIV");
  slideContainer.classList.add("slides-container");
  contenedor.appendChild(slideContainer);

  // Crea un map, que es un diccionario. Me permitira hacer complejidad O(n), evitando O(n^2)
  const slidesMap = new Map();

  tecnologias.forEach((tecnologia) => {
    const tipo = tecnologia.tipoLenguaje;

    if (!slidesMap.has(tipo)) {
      const slide = document.createElement("DIV");
      slide.classList.add("slides__slide");
      slidesMap.set(tipo, slide);
      slideContainer.appendChild(slide);
    }
    const slide = slidesMap.get(tipo);
    const slideImg = `
    <img src="build/img/tecnologias/${tecnologia.nombre}.svg" alt="${tecnologia.descripcion}" />
`;
    slide.innerHTML += slideImg;
  });
}
