
function comprobarPIN (pin) {           
    // Expresion para comprobar que tenga 8 digitos solo    let expresion = /^\d{8}$/; 

    //Comprueba que la contarseña es fuerte y de 8 dígitos 
    let expresion = /\d{8,8}/;
    return expresion.test(parseInt(pin));
}

function calcularLetraDni(dni) {
    let cadena = "TRWAGMYFPDXBNJZSQVHLCKET";
    dni = parseInt(dni);
    let posicion = dni % (cadena.length - 1);
    return cadena[posicion];
}

function formatoNifValido(dni) {
    const regex = /^\d{8}[A-Za-z]$/;
    return regex.test(dni);
}

function generaUsuario(){
    let codigoHTML = "";
    codigoHTML = "Tu usuario es ";
    codigoHTML += document.getElementById("campo1").value.substring(0,2)+document.getElementById("campo2").value.substring(0,2)+document.getElementById("campo6").value.substring(-3)
    document.getElementById("resultado").innerHTML = codigoHTML;
}

document.getElementById("validar").addEventListener('click',function(){
let estanCorrectos = true;
    let campos = document.getElementsByTagName("input");
    for (var i=0;i<campos.length;i++){
        document.getElementById("campo"+(i+1).toString()).innerHTML = "";        
        if (campos[i].value == ""){
            /*Si el campo está vacio o (el campo es la casilla de verificacion y no esta marcada) entonces...*/ 
            document.getElementById("campo"+(i+1).toString()).innerHTML = "El campo " + campos[i].id + " está vacío";
            estanCorrectos = false;
        }
        
    }
    let dni=document.getElementById("campo7").value;
    let pin=document.getElementById("campo8").value;
    let pinConfirmacion=document.getElementById("campo9").value;
    //Comprobacion de que el DNI es real
    if(formatoNifValido(dni)) {
        let letraCalculada = calcularLetraDni(dni.substring(0, dni.length - 1));
        let letraEscrita = dni[dni.length - 1];
        if(letraCalculada.toLowerCase() == letraEscrita.toLowerCase()) {
        document.getElementById("errorDNI").innerHTML ="";
        } else {
        document.getElementById("errorDNI").innerHTML ="El DNI escrito no es correcto";
        }
    } else {
        document.getElementById("errorDNI").innerHTML ="El DNI no tiene el formato válido";
    }

    //Comprobacion de que el PIN es de 8 dígitos y es segura

    if(comprobarPIN(document.getElementById("campo8").value)) {
        document.getElementById("errormensajepin").innerHTML = "";
        document.getElementById("errormensajepin2").innerHTML = "";
        
    }else if (pin !== pinConfirmacion){
        document.getElementById("errormensajepin").innerHTML = "Las contraseñas deben coincidir";
        document.getElementById("errormensajepin").innerHTML = "Las contraseñas deben coincidir";
    }else{
        document.getElementById("errormensajepin").innerHTML = "Debe introducir una contraseña segura";
        document.getElementById("errormensajepin2").innerHTML = "Debe introducir una contraseña segura";
    }

    if (estanCorrectos)
        generaUsuario();

});
