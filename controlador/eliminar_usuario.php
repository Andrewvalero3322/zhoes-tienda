<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from proveedores_2 where Id=$id");
    if ($sql==1) {
        echo '<div class="alert alert-succes">Usuario eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar usuario </div>';


    }
}

?>