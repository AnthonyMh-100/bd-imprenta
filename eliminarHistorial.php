<?php

include "conexion.php";

if (isset($_POST['id'])) {

   $id = $_POST['id'];

    $sql = "DELETE FROM `ventas` WHERE `id` = '$id' ";
    $result = $conexion->query($sql);

    if (!$result) {
        die('Error'.$conexion->error);
    }

    echo "historial eliminado";


    $conexion->close();

}


?>