// window.addEventListener("DOMContentLoaded", () => {
//   const form = document.querySelector(".formulario");
//   const inputUniversidad = document.querySelector("input[name='universidad']");
//   const buttonSearch = document.querySelector(".formulario__button--buscar");
//   const cardOpciones = document.querySelector('.formulario__opciones');
//   buttonSearch.addEventListener("click", (e) => {
//     findUniversity(e);
//   });

//   async function findUniversity(e) {
//     e.preventDefault();

//     const universidad = inputUniversidad.value;
    
//     if (universidad.length >= 3) {
//       /*¿Qué Hace encodeURIComponent?
// Codifica Caracteres Especiales: Convierte caracteres especiales (como &, ?, =, y espacios) en secuencias de escape que pueden ser transmitidas de manera segura en una URL.
// Asegura la Integridad de los Datos: Evita que los caracteres especiales interfieran con la estructura del URL.*/

//       try {
//         const response = await fetch(
//           `${window.location.origin}/api/universidades?query=${encodeURIComponent(
//             universidad
//           )}`,
//           {
//             method: "GET",
//             headers: {
//               "Content-Type": "application/json",
//             },
//           }
//         );

//         const data = await response.json();
//         console.log(data);

//         if(data == []){
//           generarAlerta("error");
//         }

//         const universidades = [];

//         data.forEach((universidad) => {
//             universidades.push(universidad.name);
//         })

//        generarCard(universidades);

//         if(!response.ok){
//             throw new Error('Error en la petición');
//         }
        
//       } catch (error) {
//         console.error(error)
//       }
//     }
//   }


//   function generarCard(universidades){
//     limpiarHTML();
//     universidades.forEach((universidad,i)=>{
//         const opcion = document.createElement('div');
//         opcion.classList.add('formulario__opcion');
//         opcion.innerHTML = `<p class="formulario__opcion-nombre">${i}. ${universidad}</p>`;
//         cardOpciones.appendChild(opcion);
//         opcion.addEventListener('click',()=>{
            
//             inputUniversidad.value = opcion.children[0].textContent;
//             limpiarHTML();
//         })
//     })

//   }

//   function limpiarHTML(){
//     while(cardOpciones.firstChild){
//         cardOpciones.removeChild(cardOpciones.firstChild);
//     }
//   }

//   function generarAlerta(tipo){
//     const alerta = document.createElement('DIV');
//     alerta.classList.add(`alerta ${tipo}`);
//     const mensaje = document.createElement('P');
//     mensaje.textContent = "No existe la universidad señalada";
//     alerta.appendChild(mensaje);

//     form.appendChild(alerta);
//   }
// });
