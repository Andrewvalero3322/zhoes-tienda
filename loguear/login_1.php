
<?php
  
session_start();

if (isset($_POST['login'])) {
  
  include ('modelo/conexion.php');

  // Verificar si la conexión a la base de datos se realizó correctamente
  if ($conexion) {
    
    $correo = $_POST['correo'];
    $dni = $_POST['dni'];

    $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND dni = '$dni'";
    
    $result = $conexion->query($query);

    if ($result->num_rows > 0) {
      
      $_SESSION['correo'] = $correo;
      header('Location: inicio.php');
      exit();

    } else {
      
      echo "Correo o DNI incorrectos";
      
    }

  } else {
    
    echo "Error al conectarse a la base de datos";
    
  }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Zhoes.net</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center p-3">Zhoes.net</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo">
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" id="dni">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Iniciar sesión</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>