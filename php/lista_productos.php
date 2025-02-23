<?php
require_once "../model/conexion.php"; #Esto es mas seguro que el include

#definiendo la query *(de todos los productos)
#deberia agregar algun estado para saber si estan eliminados o no xd
$query = "SELECT * FROM producto order by id";

#pasandole la query a la funcion de la conexion
$resultado = ejecutarQuery($query);
$data = [];
$respuesta = [];

#realizando el llenado de data en el array.
if($resultado){
    while($fila = $resultado->fetch_assoc()){
        $data[]=$fila;
    }
    #desde aqui pido lo que necesito
    #no se si podria agregar mas funciones pero creo que si
    $respuesta["data"]=$data;
    #agrego al json un mensaje
    $respuesta["message"]="Lista de usuarios";
    echo json_encode($respuesta);
}else{
    $respuesta["status"]= "error";
}
?>