document.addEventListener('DOMContentLoaded', () => {
    const switchDark = document.querySelector('.switch-button >input');
    const body = document.querySelector('body');
    
    if (!switchDark) {
        console.error('No se encontró el botón con la clase "switch-button".');
        return;
    }
    
    switchDark.addEventListener('click', (e) => {
        // Si hay un input dentro del switch(div) debe hacerse esto.
        
        e.stopPropagation();
        body.classList.toggle('darkmode');
        const isDarkMode = body.classList.contains('darkmode')
        const isChecked = switchDark.checked;
        localStorage.setItem('darkmode',isDarkMode)
        localStorage.setItem('isChecked',isChecked)
    });

    function getLocalStorageItems(){
        const isDarkMode = localStorage.getItem('darkmode') === 'true'
        const isChecked = localStorage.getItem('isChecked') === 'true'

        if(isDarkMode){
            body.classList.toggle('darkmode');

        }
        if(isChecked){
            switchDark.checked = true
        }
    }

    getLocalStorageItems();
});