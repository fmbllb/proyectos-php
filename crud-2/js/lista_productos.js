document.addEventListener("DOMContentLoaded", async function () {
    obtenerDatos();
});

// Para formatear a json y pasar los datos al html en la sig funcion
async function obtenerDatos() {
    const respuesta = await fetch(".php/lista_productos.php");
    const informacion = await respuesta.json();

    agregarDatosTabla(informacion);
}

async function agregarDatosTabla(informacion) {
    const tbody = document.getElementById("productos");
    tbody.innerHTML = "";
    for (let i = 0; i < informacion.total; i++) {
        const fila = informacion.data[i];
        const tr = document.createElement("tr");
        let id = fila.id;
        tr.innerHTML = `
        <td>${id}</td>
        <td>${fila.nombre}</td>
        <td>${fila.precio}</td>
        <td>${fila.descripcion}</td>

        <td><button class="btn" onclick="eliminarProducto(${id})"></button></td>
        `
    }
}

async function eliminarProducto() {
    console.log("eliminado");
}