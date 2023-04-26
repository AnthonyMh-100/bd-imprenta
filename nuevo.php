<?php
 session_start();

 include "conexion.php";
 
 if(!isset($_SESSION['username'])) {
     header("Location: login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="stylesheet" href="estilos/nuevo.css">
    <link rel="icon" type="image/png" href="img/ideaslogo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Nuevo Cliente</title>
</head>
<body>
   
    <div class="main-principal"> 
        <div class="barra-arriba">

            <h1>Sistema de Venta</h1>
            <p>Administrador</p>
            <div><img src="img/userSesion.svg" alt="" srcset=""></div>

        </div>
        <div class="cuerpo-principal">

            <div class="cuerpo-izquierda">
                <ul class="enlaces">
                    <label for="cambiar"><img src="img/menu.svg" alt="" srcset=""></label>
                    <input type="checkbox" name="" id="cambiar">
                    <li class="li"><a href="index.php"><img src="img/home.svg" alt="" srcset=""></a><p class="textos"></p></li>
                    <li class="li"><a href="nuevo.php"><img src="img/new.svg" alt="" srcset=""></a><p class="textos"></p></li>
                    <li class="li"><a href="cliente.php"><img src="img/user.svg" alt="" srcset=""></a><p class="textos"></p></li>
                    <li class="li"><a href="historial.php"><img src="img/history.svg" alt="" srcset=""></a><p class="textos"></p></li>
                    <li class="li"><a href="venta.php"><img src="img/venta.svg" alt="" srcset=""></a><p class="textos"></p></li>
                    <li class="li" id="c-s"><a href="#"><img src="img/off.svg" alt="" srcset=""></a><p class="textos"></p></li>
                </ul>
            </div>

          
            <div class="cuerpo-derecha">
                <h1>Nuevo Cliente</h1>
                <div class="div-nuevo">
                    <form action="mostrarCliente.php" method="post" id="form-cliente">
                        <div>
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Escriba su nombre" required>
                        </div>
                        <div>
                            <label for="">Apellido</label>
                            <input type="text" name="apellido" id="apellido" placeholder="Escriba su apellido" required>
                        </div>
                        <div>
                            <label for="">Telefono</label>
                            <input type="text" name="apellido" id="telefono" placeholder="Escriba su telefono" maxlength="9" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" id="registrar">Registrar</button>
                        </div>             
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="control/index.js"></script>
    <script src="control/nuevo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   
   
</body>
</html>