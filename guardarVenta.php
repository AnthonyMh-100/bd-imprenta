<?php

include "conexion.php";

if (isset($_POST['telefono'])) {
   
    $telefono = $_POST['telefono'];
    $producto = $_POST['producto'];
    $cantidad =$_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cuenta=$_POST['cuenta'];
    $saldo = $_POST['saldo'];
    $pago = $_POST['pago'];

    $sql = "INSERT INTO `ventas` (`id`, `producto`, `cantidad`, `descripcion`, `precio`, `cuenta`, `saldo`, `pago`, `fecha`, `telefono_cliente`) VALUES (NULL, '$producto', '$cantidad',
    '$descripcion', '$precio', '$cuenta', '$saldo', '$pago', current_timestamp(), '$telefono')";
  
  $result = $conexion->query($sql);

  if (!$result) {
    die('error'.$conexion->error);
  }
      
    echo "venta registrada";

    $conexion->close();

}


?>