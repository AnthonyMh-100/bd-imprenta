<?php 

include ("conexion.php");


$querySelect = "SELECT * FROM `ventas`";

$resultSelect = $conexion->query($querySelect);

if (!$resultSelect) {
    die('Query Consulta Fallida'.$conexion->error());
}

$json =array();
while($row = $resultSelect->fetch_assoc()){
$json[]= array(
    'id'=>$row['id'],
    'producto'=>$row['producto'],
    'cantidad'=>$row['cantidad'],
    'descripcion'=>$row['descripcion'],
    'precio'=>$row['precio'],
    'cuenta'=>$row['cuenta'],
    'saldo'=>$row['saldo'],
    'pago'=>$row['pago'],
    'fecha'=>$row['fecha'],
    'telefono_cliente'=>$row['telefono_cliente']

);
}

$jsonString = json_encode($json);

echo $jsonString;


?>