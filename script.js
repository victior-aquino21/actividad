formulario.addEventListener("submit", function(event){

    const nombre = document.getElementById("nombre").value.trim();
    const apellido = document.getElementById("apellido").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();

    if (nombre === "" || apellido === "" || email === "" || password === "") {
        /// disyunción - || - OR
        event.preventDefault();
        alert("Todos los campos son obligatorios");
        return false;
    } else {
        alert("Formulario enviado correctamente");
        return true;
    }

});