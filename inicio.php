<?php

include "conexion.php";

$sql ="SELECT COUNT(nombre) as totalCliente FROM `cliente`";

$result_cliente = $db->query($sql);



?>