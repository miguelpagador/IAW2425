$(document).ready(function() {
    // Ocultar elementos por id o clase
    $('#btn-ocultar').click(function() {
        $('#encabezado').hide(); // Oculta el encabezado por su id
        $('.pares').hide(); // Oculta los párrafos con clase "pares"
    });

    // Mostrar elementos por id o clase
    $('#btn-mostrar').click(function() {
        $('#encabezado').show(); // Muestra el encabezado por su id
        $('.pares').show(); // Muestra los párrafos con clase "pares"
    });
});
