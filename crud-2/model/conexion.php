<?php
    $conexion = new mysqli('localhost', 'root', '', 'crud_php');
    if($conexion->connect_error){
        echo "Error en la conexion";
    }else{
        echo "Conexion exitosa";
    }
?>