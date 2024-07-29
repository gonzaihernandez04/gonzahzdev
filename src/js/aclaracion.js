window.addEventListener('DOMContentLoaded',()=>{
    const aria = document.querySelector('.formulario__aclaracion');
    const modal = document.querySelector('.formulario__modal');
    const cerrarBtn = document.querySelector('.btn-cerrar')

    if(!aria) return;

    const ariaHidden = aria.getAttribute('aria-hidden');
    aria.onclick = ()=>{
        aria.classList.add('ocultar')
        abrirAclaracion(ariaHidden)
    }


    function abrirAclaracion(ariaHidden){
        modal.classList.add('mostrar');
        const parrafo = document.createElement('P');
        parrafo.textContent = ariaHidden;
        modal.appendChild(parrafo);
    }
    modal.onclick = ()=>{
        cerrarModal()
    }

    cerrarBtn.onclick = ()=>{
        cerrarModal()
    }

    function cerrarModal(){
        modal.children[1].remove();
        aria.classList.remove('ocultar');
        modal.classList.remove('mostrar');
    }

})