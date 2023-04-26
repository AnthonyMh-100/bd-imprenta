<?php

include "conexion.php";

if (isset($_POST['telefonos'])) {
  
    $telefono = $_POST['telefonos'];
 

    $sql = "SELECT * FROM `cliente` WHERE telefono ='$telefono' OR nombre='$telefono' ";
   
    $result = $conexion->query($sql);

    if (!$result) {
        die('Error'.$conexion->error);
    }
    
    $json =array();

    while($row = $result->fetch_assoc()){
    $json[]= array(      
        'nombre'=>$row['nombre'],
        'apellido'=>$row['apellido']
    );
    }
    
    $jsonString = json_encode($json);
    
    echo $jsonString;

    $conexion->close();

}


?>