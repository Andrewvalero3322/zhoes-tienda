<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and!empty($_POST["dni"]) and!empty($_POST["fecha_nac"]) and!empty($_POST["correo"])){
       
        $id=$_POST["Id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha_nac=$_POST["fecha_nac"];
        $correo=$_POST["correo"];

        $sql=$conexion->query(" update proveedores_2 set nombre='$nombre', apellido='$apellido', dni='$dni', fecha_nac='$fecha_nac', correo='$correo' where id=$id");
        if ($sql==1) {
            header ("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar usuario</div>";
        }

  
  
    }else{
        echo "<div class ='alert alert-warning'> verifica que todos los campos esten llenos</div>";
    }
}

?>