window.addEventListener("DOMContentLoaded",()=>{document.querySelector(".formulario");const e=document.querySelector("input[name='universidad']"),o=document.querySelector(".formulario__buton--buscar"),n=document.querySelector(".formulario__opciones");o.addEventListener("click",o=>{!async function(o){o.preventDefault();const t=e.value;if(t.length>=3)try{const o=await fetch("http://localhost:3000/api/universidades?query="+encodeURIComponent(t),{method:"GET",headers:{"Content-Type":"application/json"}}),r=await o.json(),i=[];if(r.forEach(e=>{i.push(e.name)}),function(o){(function(){for(;n.firstChild;)n.removeChild(n.firstChild)})(),o.forEach(o=>{const t=document.createElement("div");t.classList.add("formulario__opcion"),t.innerHTML=`<p class="formulario__opcion-nombre">${o}</p>`,n.appendChild(t),t.addEventListener("click",()=>{e.value=t.children[0].textContent})})}(i),!o.ok)throw new Error("Error en la petición")}catch(e){console.error(e)}}(o)})});
//# sourceMappingURL=universidad.js.map