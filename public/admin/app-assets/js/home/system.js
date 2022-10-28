const loadzone = $('#loadzone')

function post(url, param, callback) {
    $('.loader').show();
    $.post(
        url,
        param,
        function(response) {
            $('.loader').hide();
            callback(response);
            // zone.html(response);
        },
    ).fail(function() {
        swal('Erreur', 'Une erreur est survenue lors de l\'opération, Veuillez réessayer!', 'error');
    });
}

function get(url, zone) {
    zone = zone || loadzone;
    $('.loader').show();
    $.get(
        url,
        function(response) {
            $('.loader').hide();
            zone.html(response);
        }
    );
}



function getr(url, callback) {
    $('.loader').show();
    $.get(
        url,
        function(response) {
            $('.loader').hide();
            callback(response);
        }
    );
}

function datesem(date){
    var mths = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    var dd = date.split('-');
    return dd[2]+' '+mths[parseInt(dd[1])-1]+' '+dd[0];
}