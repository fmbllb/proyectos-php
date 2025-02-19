<?php
if(!empty($_POST["modificar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) 
    and !empty($_POST["dni"]) and !empty($_POST["fech_nacimiento"] and !empty($_POST["correo"]))){
        $nombre=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fech_nacimiento=$_POST["fech_nacimiento"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" update persona set nombre='$nombre', apellido='$apellido',
        dni='$dni', fech_nacimiento='$fech_nacimiento', correo='$correo' where id=$id");

        if($sql == 1){
            header("location:index.php");
            echo "<div class='alert alert-success'>Usuario modificado</div>";
        }
    }else{
        echo "<div class='alert alert-danger'>Existen casos vacios.</div>";
    }
}
?>