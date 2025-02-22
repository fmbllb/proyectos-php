<?php
$conexion = new mysqli("localhost", "root", "", "crud_php");
$conexion->set_charset("utf8");

function ejecutarQuery($query){
    global $conexion;
    $resultado = $conexion->query($query);
    return $resultado;
}
?>