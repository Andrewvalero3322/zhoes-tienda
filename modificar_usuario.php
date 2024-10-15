<?php
include "modelo/conexion.php";
$Id=$_GET["id"];

$sql = $conexion->query( "select * from proveedores_2 where id=$Id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar_usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

<form class="col-4 p-3 m-auto" method="POST">
<h3 class="text-center text-secondary">Modificar usuarios</h3>


<input type="hidden" name='Id' value="<?= $_GET["id"] ?>">

<?php

     
        include "controlador/modificar_usuario.php";
        while ($datos = $sql->fetch_object()) { ?>
<div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
            <input type="text" class="form-control" name="nombre" value="<?=$datos-> nombre?>"> 
        </div>

         <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Apellido del usuario</label>
            <input type="text" class="form-control" name="apellido"value="<?=$datos-> apellido?>">
        </div> 

        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">DNI del usuario</label>
            <input type="text" class="form-control" name="dni"value="<?=$datos-> dni?>">
        </div>

        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Fecha_nac</label>
            <input type="date" class="form-control" name="fecha_nac"value="<?=$datos-> fecha_nac?>">
        </div>


        <div class="mb-1">
            <label for="exampleInputEmail1" class="form-label">Correo electronico </label>
            <input type="text" class="form-control" name="correo"value="<?=$datos-> correo?>">
        </div>

    <?php }
    ?>




<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">modificar</button>


</form> 
</body>
</html>

