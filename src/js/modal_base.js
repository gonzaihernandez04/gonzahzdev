window.addEventListener('DOMContentLoaded',()=>{
    const modal = document.querySelector('.modal');
    if(!modal) return;
    const btnCerrar = document.querySelector('.btn-cerrar');
    if(!btnCerrar) return;
    const btnAbrir = document.querySelector('.btn-abrir-modal');
    if (!btnAbrir) return;

    btnCerrar.addEventListener('click',cerrarModal)

    function cerrarModal(){
        modal.classList.remove('modal--mostrar');
    }

    btnAbrir.addEventListener('click',abrirModal);

    function abrirModal(){
        modal.classList.add('modal--mostrar');
    }



})