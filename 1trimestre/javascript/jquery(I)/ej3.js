/* Rellena este fichero */
$(document).ready(function () {
    $("#btn-aumentar").click(function(){
        $("#encabezado").css({"font-size":"40px","color":"blue"})
        $(".pares").css({"font-size":"40px","color":"blue"})
    });
    $("#btn-disminuir").click(function(){
        $("#encabezado").css({"font-size":"10px", "color":"red"})
        $(".pares").css({"font-size":"10px", "color":"red"})
    });
});