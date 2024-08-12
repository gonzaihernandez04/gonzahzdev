window.addEventListener('DOMContentLoaded',()=>{
    const menu = document.querySelector('.menu');
    if (!menu) return
    const navegacion = document.querySelector('.navegacion');
    if (!navegacion) return

    menu.addEventListener('click',mostrarNavegacion)

    function mostrarNavegacion(){
        navegacion.classList.toggle('navegacion--mostrar')
    }
})