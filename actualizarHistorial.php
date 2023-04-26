<?php

include "conexion.php";

if (isset($_POST['id'])) {

   $id = $_POST['id'];
   $producto = $_POST['producto'];
   $cantidad =$_POST['cantidad'];
   $descripcion = $_POST['descripcion'];
   $precio = $_POST['precio'];
   $cuenta=$_POST['cuenta'];
   $saldo = $_POST['saldo'];
   $pago = $_POST['pago'];

    $sql = "UPDATE `ventas` SET  `producto` = '$producto' ,`cantidad` = '$cantidad', 
    `descripcion` = '$descripcion', `precio` = '$precio', `cuenta` = '$cuenta', 
    `saldo` = '$saldo', `pago` = '$pago' WHERE `ventas`.`id` = $id";
   
    $result = $conexion->query($sql);

    if (!$result) {
        die('Error'.$conexion->error);
    }

    echo "historial actualizados";


    $conexion->close();

}


?>