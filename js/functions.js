$(document).ready(function () {
    
});

function traducir() {
    var textotraducir = $('#textotraducir').val().trim();

    if (textotraducir === '') {
        alert('Por favor, ingresa texto para traducir.');
        return;
    }

    var idiomaOrigen = $('#idiomaOrigen').val();
    var idiomaDestino = $('#idiomaDestino').val();

    $.ajax({
        type: "POST",
        url: "./getTranslate.php",
        data: {
            textotraducir: textotraducir,
            idiomaOrigen: idiomaOrigen,
            idiomaDestino: idiomaDestino
        },
        dataType: "json",
        success: function (response) {
            if (response.success) {
                $('#textotraducido').val(response.textotraducido);
            } else {
                alert(response.message);
            }
        },
        error: function (xhr, status, error) {
            alert('Error en la solicitud: ' + error);
        }
    });
};





function intercambiarBanderas() {
    
    var idiomaOrigen = $('#idiomaOrigen').val();
    var idiomaDestino = $('#idiomaDestino').val();

    if(idiomaOrigen == 'es'){
        $('#idiomaOrigen').val('en');
        $('#idiomaDestino').val('es');
        $('#paisOrigen').attr('src', 'assets/banderas/usa.png');
        $('#paisDestino').attr('src', 'assets/banderas/mexico.png');
    }else{

        $('#idiomaDestino').val('en');
        $('#idiomaOrigen').val('es');
        $('#paisDestino').attr('src', 'assets/banderas/usa.png');
        $('#paisOrigen').attr('src', 'assets/banderas/mexico.png');
    }

    $('#textotraducir').val('');
    $('#textotraducido').val('');
    
 
}