<?php

include "conexion.php";

if (isset($_POST['id'])) {
   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $apellido=$_POST['apellido'];
   $telefono = $_POST['telefono'];

    $sql = "UPDATE `cliente` SET `nombre` = '$nombre', `apellido` = '$apellido', `telefono` = '$telefono' WHERE `cliente`.`id` = $id;";
   
    $result = $conexion->query($sql);

    if (!$result) {
        die('Error'.$conexion->error);
    }

    echo "datos actualizados";


    $conexion->close();

}


?>