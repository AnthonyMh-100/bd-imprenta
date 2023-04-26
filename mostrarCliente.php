<?php 

include ("conexion.php");


$querySelect = "SELECT * FROM `cliente`";

$resultSelect = $conexion->query($querySelect);

if (!$resultSelect) {
    die('Query Consulta Fallida'.$conexion->error());
}

$json =array();
while($row = $resultSelect->fetch_assoc()){
$json[]= array(
    'id'=>$row['id'],
    'nombre'=>$row['nombre'],
    'apellido'=>$row['apellido'],
    'telefono'=>$row['telefono'],
    'fecha'=>$row['fecha']

);
}

$jsonString = json_encode($json);

echo $jsonString;


?>