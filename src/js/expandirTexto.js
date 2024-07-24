window.addEventListener('DOMContentLoaded',()=>{
    const guias = document.querySelectorAll('.seccion__guia');



    guias.forEach(guia => {
        guia.addEventListener('click',()=>{
            expandir(guia)
        })

    });

    function expandir(guia){
        let containerPadre = guia.parentElement;
       const texto = containerPadre.querySelector('.seccion__parrafo');
       if (texto){

        if (texto.classList.contains('seccion__parrafo--expandido')){
            texto.classList.remove('seccion__parrafo--expandido')
            guia.textContent = "Seguir Leyendo"


        }else{
            texto.classList.add('seccion__parrafo--expandido')
            guia.textContent = "Ver menos"

        }
       }
        


        
    }
})