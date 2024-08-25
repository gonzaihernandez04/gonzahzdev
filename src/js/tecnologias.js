window.addEventListener("DOMContentLoaded", () => {
  apiTech();
});

async function apiTech() {

  const response = await fetch(`${window.location.origin}/api/tecnologias`);
  const tecnologias = await response.json();
  imprimirTecnologias(tecnologias);
}

function imprimirTecnologias(tecnologias) {
  const slideContainer = document.querySelector('.slides-container')

  // Crea un map, que es un diccionario. Me permitira hacer complejidad O(n), evitando O(n^2)
  const slidesMap = new Map();
    mostrarTech(slidesMap,tecnologias,slideContainer)
 



  
}
function mostrarTech(slidesMap, tecnologias, slideContainer) {
    let index = 0;

    while (index < tecnologias.length) {
        const tecnologia = tecnologias[index];
            const tipo = tecnologia.tipoLenguaje;

            if (!slidesMap.has(tipo)) {
                headingTipo = document.createElement("H3");
               headingTipo.textContent = tipo;
               headingTipo.classList.add('slides-container__title');
                const slide = document.createElement("DIV");
                slide.classList.add("slides-container__slide");
                slideContainer.appendChild(headingTipo)
                slidesMap.set(tipo, slide);
                slideContainer.appendChild(slide);
            }

            const slide = slidesMap.get(tipo);


            slide.setAttribute("data-tipo", tecnologia.tipoLenguaje);
            const slideImg = `
                <img src="build/img/tecnologias/${tecnologia.imagen}.svg" loading="lazy" class="slides-container__slide-img" alt="${tecnologia.descripcion}" />
            `;
            slide.innerHTML += slideImg;
        

        index++;
    }
}
