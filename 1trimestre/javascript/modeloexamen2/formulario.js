function nombre(){
   let name= document.getElementById("nombre").value
   if (name==''){
    document.getElementById("error1").innerHTML = "Debes rellenar el nombre"
    return false
    }else {
        document.getElementById("error1").innerHTML = ""
        return true}
}

function apellidos(){
    let apellido1 = document.getElementById("apellido1").value
    let apellido2 = document.getElementById("apellido2").value
    if(apellido1=='' && apellido2==''){
        document.getElementById("error2").innerHTML = "Los apellidos son obligatorios"
        document.getElementById("error3").innerHTML = "Los apellidos son obligatorios"
    }else if (apellido1==''){
     document.getElementById("error2").innerHTML = "Debes rellenar el apellido"
     return false
    }else if (apellido2==''){
      document.getElementById("error3").innerHTML = "Debes rellenar el segundo apellido"
      return false
     }else {
        document.getElementById("error2").innerHTML = ""
        document.getElementById("error3").innerHTML = ""
        return true}
 }

 function dni(){
    let dn= document.getElementById("dni").value

    if (dn==''){
     document.getElementById("error4").innerHTML = "Debes rellenar el dni"
     return false
    }else if(dn!=''){
        let letra =['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
        var cadena = document.getElementById("dni").value; //DNI completo 
        let cadenaSinEspacios = cadena.replace(" ", "");   
        let cadenaLimpia = cadenaSinEspacios.toUpperCase();
        var numero = parseInt(cadenaLimpia.substring(0,8)); //Parte numerica
        var letraUsuario = cadena [8]; //Letra escrita por el usuario
        var letraReal = letra[numero%23]; // Letra "real" del DNI calculada segun formula
        if (letraUsuario!=letraReal){  // Si no coincide letras es falso
            document.getElementById("error4").innerHTML = "DNI incorrecto burto"
            return false;} 
        else{
            document.getElementById("error4").innerHTML = ""
            return true;}
        }
 }

 function email(){
    let email= document.getElementById("email").value
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email==''){
     document.getElementById("error5").innerHTML = "Debes rellenar el email"
     return false
    }else if (emailRegex.test(email)==false) {
        document.getElementById("error5").innerHTML = "El email no es valido"
        return false
     }else {
        document.getElementById("error5").innerHTML = ""
        return true}
 }

 function contrasena(){
    let password1= document.getElementById("password1").value
    let password2= document.getElementById("password2").value
    if (password1==''){
     document.getElementById("error6").innerHTML = "Debes rellenar la contraseña"
     return false
     }else if(password1!=password2 || password1.length<8){
        document.getElementById("error6").innerHTML = "Las contraseñas deben coincidir y tener una longitud minima de 8 digitos"
        document.getElementById("error7").innerHTML = "Las contraseñas deben coincidir y tener una longitud minima de 8 digitos"
        return false
     }
     else {
        document.getElementById("error6").innerHTML = ""
        document.getElementById("error7").innerHTML = ""
        return true}
 }

 function caja(){
    let caja = document.getElementById("caja").checked
    if (caja == false){
        document.getElementById("error8").innerHTML = "Debes aceptar la politica de la empresa"
        return false
    }else{
        document.getElementById("error8").innerHTML = ""
        return true}
}

function comprobar(){
    nombre();
    apellidos();
    dni();
    email();
    contrasena();
    caja();
    if(nombre()==true && apellidos()==true && dni()==true && email()==true 
        && contrasena()==true && caja()==true){
            let textonombre = document.getElementById("nombre").value
            let textoapellido1 = document.getElementById("apellido1").value
            let textoapellido2 = document.getElementById("apellido2").value
            let textodni = document.getElementById("dni").value
            let nombre = textonombre.substring(0,1)
            let apellido1 = textoapellido1.substring(0,3)
            let apellido2 = textoapellido2.substring(0,3)
            let dni = textodni.substring(6)
            let todo = nombre + apellido1 + apellido2 + dni
            alert(todo)
        }else{
            alert("Debes rellenar los campos obligatorios")
        }
    
}