<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ea716e85a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="statics/style.scss">
</head>

<body>
    <div class="col-8 p-3 m-auto">
        <h1 class="text-center text-secondary m-5">Lista de personas</h1>
        <?php
            include "controlador/eliminar_persona.php";
            include "modelo/conexion.php";
        ?>
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Correo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "modelo/conexion.php";
                $sql = $conexion->query("select * from persona");
                while ($datos = $sql->fetch_object()) { ?>
                    <tr>
                        <td><?= $datos->id ?></td>
                        
                        <td><?= $datos->nombre ?></td>
                        
                        
                        <td><?= $datos->apellido ?></td>
                        
                    
                        <td><?= $datos->dni ?></td>
                        
                    
                        <td><?= $datos->fech_nacimiento ?></td>
                        
                    
                        <td><?= $datos->correo ?></td>
                        
                        <td>
                            <a href="modificar_persona.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="lista_personas.php?id=<?= $datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>