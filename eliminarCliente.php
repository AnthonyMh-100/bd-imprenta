<?php

include "conexion.php";

if (isset($_POST['id'])) {

   $id = $_POST['id'];

    $sql = "DELETE FROM `cliente` WHERE `id` = '$id' ";
    $result = $conexion->query($sql);

    if (!$result) {
        die('Error'.$conexion->error);
    }

    echo "dato eliminado";


    $conexion->close();

}


?>