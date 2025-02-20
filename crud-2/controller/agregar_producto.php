<?php
$camposErr = "";
$envioEx = "";

if(!empty($_POST['agregar_producto']) and $_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["descripcion"])){
        $nombre = test_input($_POST["nombre"]);
        $precio = test_input($_POST["precio"]);
        $descripcion = test_input($_POST["descripcion"]);

        $sql=$conexion->query(" INSERT INTO producto (nombre, precio, descripcion) 
                            VALUES ('$nombre', $precio,'$descripcion')");
        if($sql){
            $envioEx = "El envio fue exitoso.";
        }
    }else{
        $camposErr = "Algunos campos estan vacios.";
    }
    

}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>