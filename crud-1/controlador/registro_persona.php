<?php
if (!empty($_POST['registrar'])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) 
    and !empty($_POST["fecha"]) and !empty($_POST["correo"])){

        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fecha"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" insert into persona (nombre,apellido,dni,fech_nacimiento,correo) 
        values('$nombre','$apellido','$dni','$fecha','$correo') ");
        if($sql==1){
            header("location:lista_personas.php");
            echo '<div class="alert alert-success" role="alert">Persona registrada exitosamente.</div>';
        }else{
            echo '<div class="alert alert-danger" role="alert">Error al registrar.</div>';
        }
    }else{
        echo "Algunos datos faltan en el formulario.";
    }
}
?>