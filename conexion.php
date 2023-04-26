<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "imprenta";

$conexion = new mysqli($servidor,$usuario,$contraseña,$bd);

if ($conexion->connect_error) {
    die('error'.$conexion->connect_error);
}
    // echo 'conexion exitosa';
?>