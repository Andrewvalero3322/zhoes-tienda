<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta htt-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud en php y mysql</title>

  <h1>ZHOES.NET<h1>

<h1></h1>
  <h1></h1>
  <a href="loguear/login_1.php"><button>Iniciar en cuenta existente</button></a>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 <script src="https://kit.fontawesome.com/7b4a9e650c.js" crossorigin="anonymous"></script>

</head>

<body>

  <script>
  function eliminar() {
    var respuesta=confirm("Estas seguro de eliminar este usuario?");
    return respuesta
  }
  
  </script>
	<h2 class="text-center p-3">Listado y datos de proveedores </h2>
  
  <?php
  include "modelo/conexion.php";
  include "controlador/eliminar_usuario.php";

 


  ?>



    <div class="container-fluid row">


    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de usuarios</h3>

        <?php
        include "modelo/conexion.php";
        include "controlador/registro_usuarios.php";
        ?>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
    <input type="text" class="form-control" name="nombre">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido del usuario</label>
    <input type="text" class="form-control" name="apellido">
  </div> 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">DNI del usuario</label>
    <input type="text" class="form-control" name="dni">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fecha_nac</label>
    <input type="date" class="form-control" name="fecha_nac">
  </div>


 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electronico </label>
    <input type="text" class="form-control" name="correo">
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>

  
</form>
<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col"> DNI</th>
      <th scope="col">FECHA_NAC</th>
      <th scope="col">CORREO</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php

    include "modelo/conexion.php";
    $sql=$conexion->query("select * from proveedores_2");
    while($datos=$sql->fetch_object()){ ?>

<tr>
      <td><?=$datos->Id?></td>
      <td><?=$datos->nombre?></td>
      <td><?=$datos->apellido?></td>
      <td><?=$datos->dni?></td>
      <td><?=$datos->fecha_nac?></td>
      <td><?=$datos->correo?></td>
      <td>
        <a href="modificar_usuario.php?id=<?= $datos->Id ?>" class="btn btn-small btn-warning"> <i class="fa-solid fa-pen-to-square"></i></a>
        <a onclick="return eliminar()" href="index.php?id=<?= $datos->Id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>

      </td>
    </tr>

    <?php }
    ?>
   
   
    
  </tbody>
</table>
</div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>|
</body>

</html>