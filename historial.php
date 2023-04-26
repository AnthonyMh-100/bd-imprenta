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
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="estilos/index.css">
    <link rel="stylesheet" href="estilos/historial.css">
    <link rel="icon" type="image/png" href="img/ideaslogo.png" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Historial</title>
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
               
                <div class="buscar-historial">
                    <!-- <div class="boton-buscar">
                        <form action="" method="post">
                            <input type="text" name="input-busar" id="input-buscar" placeholder="Telefono">
                            <input type="submit" value="Buscar" id="btn-buscar" name="btn-buscar">
                        </form>
                    </div>

                    <div class="cliente-buscado">
                        <h5>Cliente:</h5>
                        <h5>Maria del Carmen</h5>
                    </div> -->

                   </div>
              
                   <div class="cuerpo">  
                   <h1>Historial de Venta</h1>   
                    <table class="table">
                        <thead>
                            <tr class="table-dark">
                            <th scope="col">#</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cuenta</th>
                                <th scope="col">Saldo</th>
                                <th scope="col">Pago</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">telefono</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Editar</button>
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                       


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Historial</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <input type="hidden" id="e-id">
                                <form action="historial.php" method="post" id="edit-historial">
                            
                                    <div>
                                    <label for="">Producto</label></br>
                       <select name="producto" id="h-producto" style="width:200px">
                        <option value="Banner">Banner</option>
                        <option value="Vinil">Vinil</option>
                        <option value="Formatos">Formatos</option>
                        <option value="Guias">Guias</option>
                        <option value="Otros">Otros</option>
                       </select>

                                    </div>
                                    <div>
                                    <label for="">Cantidad</label></br>
                        <input type="number" name="cantidad" id="h-cantidad" min="0">

                                    </div>
                                    <div>
                                        <label for="">Descripcion</label></br>
                                        <input type="text" name="h-descripcion" id="h-descripcion">

                                    </div>
                                    <div>
                                        <label for="">Precio</label></br>
                                        <input type="text" name="h-precio" id="h-precio">

                                    </div>
                                    <div>
                                        <label for="">Cuenta</label></br>
                                        <input type="text" name="h-cuenta" id="h-cuenta">

                                    </div>
                                    <div>
                                        <label for="">Saldo</label></br>
                                        <input type="text" name="h-saldo" id="h-saldo">

                                    </div>
                                    <div>
                                    <label for="">Pago</label></br>
                    <select name="pago" id="h-pago" style="width:200px">
                        <option value="Pago Digital">Pago Digital</option>
                        <option value="Pago Efectivo">Pago Efectivo</option>
                    </select>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Actualizar Historial</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                          
             
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="control/index.js"></script>
    <script src="control/historial.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</body>

</html>