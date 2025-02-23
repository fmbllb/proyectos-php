document.addEventListener("DOMContentLoaded", async function(){
    traerDatos();
});

// Para formatear a json y pasar los datos al html en la sig funcion
async function obtenerDatos(){
    const respuesta = await fetch("./php/lista_personas.php");
    const informacion = await respuesta.json();

    agregarDatosTabla(informacion);
}

async function agregarDatosTabla(informacion){
    const tbody = document.getElementById("personas");
    tbody.innerHTML = "";
    for(let i = 0; i < informacion.total; i++){
        const fila = informacion.data[i];
        const tr = document.createElement("tr");
        let id = fila.id;
        tr.innerHTML = `
        <td>${id}</td>
        <td>${fila.nombre}</td>
        <td>${fila.apellido}</td>
        <td>${fila.dni}</td>
        <td>${fila.fech_nacimiento}</td>
        <td>${fila.correo}</td>
        <td><button class="btn" onclick="eliminarPersona(${id})"></button></td>
        `
    }
}

async function eliminarPersona(){
    console.log("eliminado");
}