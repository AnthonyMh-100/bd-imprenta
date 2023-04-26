<?php

include "conexion.php";

if (isset($_POST['nombre'])) {
   

    $sql = "INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `telefono`) VALUES (NULL, ?, ?, ?)";
    
    $result = $conexion->prepare($sql);

    $result->bind_param("sss",$nombre,$apellido,$telefono);

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];

    $result->execute();
      
    echo "cliente registrdo";
    $conexion->close();

}


?>