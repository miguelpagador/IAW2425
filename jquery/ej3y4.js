$(document).ready(function() {
    // Inicializamos un tamaño de fuente base
    let fontSize = 16; // tamaño en px

    // Aumentar tamaño de fuente
    $('#btn-aumentar').click(function() {
        fontSize += 2; // Incrementamos el tamaño
        $('#encabezado').css('font-size', fontSize + 'px'); // Cambiamos tamaño del encabezado
        $('.pares').css('font-size', fontSize + 'px'); // Cambiamos tamaño de los párrafos "pares"
    });

    // Disminuir tamaño de fuente
    $('#btn-disminuir').click(function() {
        fontSize -= 2; // Reducimos el tamaño
        if (fontSize < 10) fontSize = 10; // Limitar el tamaño mínimo
        $('#encabezado').css('font-size', fontSize + 'px');
        $('.pares').css('font-size', fontSize + 'px');
    });

    // Cambios adicionales para el ejercicio 4
    $('#btn-aumentar, #btn-disminuir').click(function() {
        // Cambiar colores del encabezado y los párrafos "pares"
        $('#encabezado').css({
            'color': 'blue',
            'background-color': 'lightyellow'
        });
        $('.pares').css({
            'color': 'green',
            'background-color': 'lightgray'
        });
    });
});
