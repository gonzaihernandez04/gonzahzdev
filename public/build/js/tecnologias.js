window.addEventListener("DOMContentLoaded",()=>{!async function(){const n=await fetch(window.location.origin+"/api/tecnologias");!function(n){const e=document.querySelector(".slides-container");!function(n,e,t){let i=0;for(;i<e.length;){const o=e[i],a=o.tipoLenguaje;if(!n.has(a)){headingTipo=document.createElement("H3"),headingTipo.textContent=a,headingTipo.classList.add("seccion__texto");const e=document.createElement("DIV");e.classList.add("slides-container__slide"),t.appendChild(headingTipo),n.set(a,e),t.appendChild(e)}const s=n.get(a);s.setAttribute("data-tipo",o.tipoLenguaje);const c=`\n                <img src="build/img/tecnologias/${o.imagen}.svg" loading="lazy" class="slides-container__slide-img" alt="${o.descripcion}" />\n            `;s.innerHTML+=c,i++}}(new Map,n,e)}(await n.json())}()});
//# sourceMappingURL=tecnologias.js.map
