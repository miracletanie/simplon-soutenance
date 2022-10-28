function deleteConfirm(formId)
{
    Swal.fire({
        icon: 'warning',
        text: 'Voulez-vous réellement surpprimer cet élément ?',
        showCancelButton: true,
        confirmButtonText: 'Oui, Supprimer',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    });
}

$(document).ready(function() {


});