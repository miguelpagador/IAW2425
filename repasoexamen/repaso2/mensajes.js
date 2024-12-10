let lista = [];

window.onload = function () {
    let mensajesGuardados = localStorage.getItem("tweets");
    if (mensajesGuardados) {
        lista = mensajesGuardados.split(","); 
    }
    mostrar();
};

function mostrar() {
    let contenedor = document.getElementById("contenedor");
    contenedor.innerHTML = ""; 

    for (let i = 0; i < lista.length; i++) {
        contenedor.innerHTML += `
            <div class="tweet">
                <img src="imagenes/Logo_Twitter.png" alt="Logo Twitter">
                <span>${lista[i]}</span>
                <button class="btn-image" onclick="borrarMensaje(${i})">
                    <img src="imagenes/Logo_Papelera.png" alt="Eliminar">
                </button>
            </div>
        `;
    }
}

function enviarMensaje() {
    let mensaje = document.getElementById("mensaje").value;
    if (mensaje.trim() !== "") {
        lista.push(mensaje.trim());
        localStorage.setItem("tweets", lista.join(",")); 
        mostrar();
        document.getElementById("mensaje").value = "";
    } else if (mensaje.trim() == "") {
        alert("Tiene que escribir para enviar un mensaje");
    }
}

function borrarMensaje(index) {
    lista.splice(index, 1);
    localStorage.setItem("tweets", lista.join(",")); 
    mostrar();
}

function borrarTodo() {
    lista = [];
    localStorage.removeItem("tweets");
    mostrar();
}
