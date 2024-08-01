import Swal from 'sweetalert2'



export function questionSuccessAlert() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
    });

    return swalWithBootstrapButtons.fire({
        title: "¿Estás seguro?",
        text: "No podrás revertir esto",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Sí, registrar opinión!",
        cancelButtonText: "No, cancelar!",
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire({
                title: "Opinión registrada",
                text: "Registro exitoso",
                icon: "success"
            });
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            swalWithBootstrapButtons.fire({
                title: "Cancelado",
                text: "Oops, cancelaste la operación",
                icon: "error"
            });
        }
        return result; // Retorna el resultado para manejarlo en la llamada
    });
}



export function errorAlert(texto){
Swal.fire({
    icon: "error",
    title: "Oops...",
    text: "Algo fue mal",
    footer: texto
  });

}