import {questionSuccessAlert,errorAlert} from './sweet_alert.js'

window.addEventListener('DOMContentLoaded',()=>{

    const inputNombre = document.querySelector('input[name="nombre"]')
    const inputApellido = document.querySelector('input[name="apellido"]')
    const inputEmail = document.querySelector('input[name="email"]');
    const form = document.querySelector('.formulario');

    if(!form && !inputApellido && !inputEmail && !inputNombre){
        return;
    }

    let arrInputs = []

    arrInputs = [inputNombre,inputApellido,inputEmail]

   form.addEventListener('submit',async (e)=>{
    e.preventDefault();

    if(!verificarCampos(arrInputs)){
        const resultado =  await recibirAlerta()
        if (resultado.isConfirmed){
            setTimeout(() => {
                form.submit();
            }, 2000);

        }
    }else{
        errorAlert("Revisa que los campos esten llenos(Universidad y mensaje no obligatorio)");
    }

   })


   async function recibirAlerta(){

    try {
        const resultado =   await questionSuccessAlert();
        return resultado
    } catch (error) {
        console.error("Error en recibit alerta ",error)
        throw error;
    }

   }


   function verificarCampos(arrInputs){
    return !verificarRadioSeleccionado() || verificarVacio(arrInputs,0) 
   }

   function verificarVacio(arr, i = 0) {
    if (i === arr.length) {
        return false; 
    }

    if (arr[i].value.trim() === "") {
        return true

    }

    return verificarVacio(arr, i + 1);
    }   

    function verificarRadioSeleccionado(){
        const inputsStarNodes = document.querySelectorAll('input[type="radio"]')
        let arrayStars = Array.from(inputsStarNodes)
        // Busca el primer elemento con checked y retorna true o false si lo encuentra
       return arrayStars.some(star => star.checked);

    }


})
