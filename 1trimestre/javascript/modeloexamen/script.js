function validarDNI(valor){
    let valido = false;
    var validChars = 'TRWAGMYFPDXBNJZSQVHLCKET';
    var nifRexp = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
    var nieRexp = /^[XYZ][0-9]{7}[TRWAGMYFPDXBNJZSQVHLCKET]$/i;
    var str = valor.toString().toUpperCase();
  
    if (!nifRexp.test(str) && !nieRexp.test(str))
        valido = false;
  
    var nie = str
        .replace(/^[X]/, '0')
        .replace(/^[Y]/, '1')
        .replace(/^[Z]/, '2');
  
    var letter = str.substr(-1);
    var charIndex = parseInt(nie.substr(0, 8)) % 23;
  
    if (validChars.charAt(charIndex) === letter)
        valido = true;
  
    return valido;
  }

// Referencia al botón de envío
let botonEnviar = document.getElementById('botonEnviar');

// Asignar evento al botón
botonEnviar.addEventListener('click', function () {

    // Limpiar mensajes de error previos
    let errores = document.querySelectorAll('.error');
    // El siguiente bucle for limpia los posibles errores de un intento anterior
    for (let i = 0; i < errores.length; i++) {
        errores[i].innerHTML = '';
    }

    // Obtener valores de los campos
    let nombre = document.getElementById('nombre').value.trim();
    let apellido1 = document.getElementById('apellido1').value.trim();
    let apellido2 = document.getElementById('apellido2').value.trim();
    let dni = document.getElementById('dni').value.trim();
    let email = document.getElementById('email').value.trim();
    let contrasena = document.getElementById('contrasena').value;
    let confirmarContrasena = document.getElementById('confirmarContrasena').value;
    let aceptarTerminos = document.getElementById('aceptarTerminos').checked;

    let esValido = true;

    // Validar campos obligatorios
    if (nombre == '') {
        document.getElementById('error-nombre').innerHTML = 'El campo nombre es necesario para completar el formulario';
        esValido = false;
    }
    if (apellido1 == '') {
        document.getElementById('error-apellido1').innerHTML = 'El campo primer apellido es necesario para completar el formulario';
        esValido = false;
    }
    if (apellido2 == '') {
        document.getElementById('error-apellido2').innerHTML = 'El campo segundo apellido es necesario para completar el formulario';
        esValido = false;
    }
    if (!validarDNI(dni)) {
        document.getElementById('error-dni').innerHTML = 'El DNI debe tener 8 dígitos seguidos de una letra';
        esValido = false;
    }
    if (!/^\S+@\S+\.\S+$/.test(email)) {
        document.getElementById('error-email').innerHTML = 'El email no es válido';
        esValido = false;
    }
    if (contrasena.length < 8) {
        document.getElementById('error-contrasena').innerHTML = 'La contraseña debe tener al menos 8 caracteres';
        esValido = false;
    }
    if (contrasena != confirmarContrasena) {
        document.getElementById('error-confirmarContrasena').innerHTML = 'Las contraseñas no coinciden';
        esValido = false;
    }
    if (!aceptarTerminos) {
        document.getElementById('error-terminos').innerHTML = 'Debe aceptar el tratamiento de datos personales';
        esValido = false;
    }

    // Generar nombre de usuario
    if (esValido) {
        let nombreUsuario = `${nombre[0]}${apellido1.slice(0, 3)}${apellido2.slice(0, 3)}${dni.slice(-3)}`.toLowerCase().replace(/\s+/g, '');
        document.getElementById('nombreUsuarioGenerado').innerHTML = `Nombre de usuario generado: ${nombreUsuario}`;
        alert('Formulario enviado con éxito.');
    }
});
