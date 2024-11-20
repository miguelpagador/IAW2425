$(document).ready(function() {
    // Ocultar elementos al hacer clic en el botón "Ocultar"
    $('#btn-ocultar').click(function() {
        $('h1, p').hide(); // Oculta el encabezado y los párrafos
    });

    // Mostrar elementos al hacer clic en el botón "Mostrar"
    $('#btn-mostrar').click(function() {
        $('h1, p').show(); // Muestra el encabezado y los párrafos
    });
});
