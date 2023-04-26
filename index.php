<?php  
 session_start();

include "conexion.php";

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
  }

$sql ="SELECT COUNT(nombre) as totalCliente FROM `cliente`";
$sql2 ="SELECT SUM(cuenta) as sumaTotal FROM `ventas`";

$result_cliente = $conexion->query($sql);
$result_venta = $conexion->query($sql2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="stylesheet" href="estilos/index2.css">
    <link rel="icon" type="image/png" href="img/ideaslogo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Sistema de Ventas</title>
</head>
<body>
   
    <div class="main-principal"> 
        <div class="barra-arriba">
        
            <h1>Sistema de Venta</h1>
            <p>Administrador</p>
            <div ><img src="img/userSesion.svg" alt="" srcset=""></div>
          
        </div>
        <div class="cuerpo-principal">
            <div class="cuerpo-izquierda">
                <ul class="enlaces">
                    <label for="cambiar"><img src="img/menu.svg" alt="" srcset="" class="cerrar"></label>
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
                <img src="img/ideaslogo.png" alt="" srcset="">
                <h1>Bienvenido (a)</h1>  
                <div class="container-tarjetas">
                    <span class="tarjetas">
                       <img src="img/user-recc.svg" alt="" srcset="">
                       <p>Total Clientes</p>
                   <?php  while($row = $result_cliente->fetch_assoc()) { 
                    ?>
                       <label for=""><?php echo $row['totalCliente']; ?></label>
                       <?php } 
                       ?>
                    
                    </span>
                    <span class="tarjetas">
                        <img src="img/cart.svg" alt="" srcset="">
                        <p>Total Ventas</p>
                        <?php  while($row = $result_venta->fetch_assoc()) { 
                    ?>
                        <label for=""><?php echo  'S/.' . number_format($row['sumaTotal'], 2, '.', ',');?></label>
                        <?php
                         } 
                       ?>
                    
                    </span>
                    <!-- <span class="tarjetas">
                        <img src="img/tornado.svg" alt="">
                        <p>Total de Saldo</p>
                       <label for="">30</label>
                    </span> -->
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="control/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   
   
   
   
</body>
</html>