fetch('../api/v1.0/nombre.php', {
    method: "GET"

}).then(function (respuesta) {
    if (respuesta.ok) {
        return respuesta.json();
    }
}).then(function (datos) {
    document.getElementById("sal").textContent ="Hola " + datos.nombre;
});
