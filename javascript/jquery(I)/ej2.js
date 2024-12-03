/* Rellena este fichero */
$(document).ready(function () {
    $('#btn-ocultar').click(function () { 
        $('#encabezado').hide();
        $('.pares').hide();
    });
    $('#btn-mostrar').click(function () { 
        $('#encabezado').show();
        $('.pares').show();
    });
});