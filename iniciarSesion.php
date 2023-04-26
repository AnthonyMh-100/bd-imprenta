<?php

session_start();
include "conexion.php";


if (isset($_POST['user'])&& isset($_POST['pass'])) {
    # code...
$username = $_POST['user'];
$password = $_POST['pass'];

$querySesion = "SELECT * FROM login WHERE usuario='$username' AND clave='$password'";

$result = $conexion->query($querySesion);

  // Si el usuario existe, iniciarlos en sesión
  if(mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    echo "success";
  } else {
    echo "fail";
  }

}

$conexion->close();




?>