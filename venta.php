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
    <link rel="stylesheet" href="estilos/venta.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
    <link rel="icon" type="image/png" href="img/ideaslogo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Ventas</title>
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
                <div class="container-cliente">
                   <section>
                    <form action="" method="post" id="form-buscar">
                    <label for=""><img src="img/userCli.svg" alt="" srcset=""></label>
                    <input type="text" name="c-telefono" id="c-telefono" placeholder="Telefono" maxLength="9" required>
                    <button type="submit" class="btn btn-primary"><img src="img/buscar.svg" alt="" srcset=""></button>
                </form>
                </section>

                <section id="cliente-venta">
                
                
                </section>
                </div>
               
                <div class="container-btn" style="height:50px; gap: 12px; background: #f8fafa;">
        <!-- Button trigger modal -->
        <button type="button"  class="btn btn-primary" id="btn-add" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="img/carAdd.svg" alt="" srcset="">Agregar</button>
        <button type="button"  class="btn btn-primary" id="btn-guardar"><img src="img/bxs-save.svg" alt="" srcset=""> Guardar</button>
        <!-- <button type="button" class="btn btn-primary imprimir"><img src="img/bxs-printer.svg" alt="" srcset=""> Imprimir</button>
              -->
    </div>
          
                <div class="container-ventas">
                    <table class="table">
                        <thead>
                            <tr class="table-dark">
                    
                                <th scope="col">Producto</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cuenta</th>
                                <th scope="col">Saldo</th>
                                <th scope="col">Pago</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody class="tbody">
                          

                        </tbody>
                        <tr>
                            <td colspan="7"><h5>Total</h5></td>
                            <td style="display:flex;"><h5 id="totalId">0</h5></td>
                         </tr>
                    
                    </table>
                </div>
                <!-- <div class="container-resultado">
                    <h5>Total</h5>
                    <h5></h5>
                   
                </div> -->
            </div>
         
        </div>
           <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nueva Venta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container-datos">
    
                    <section>
                        <label for="">Producto</label></br>
                       <select name="producto" id="producto">
                        <option value="Banner">Banner</option>
                        <option value="Vinil">Vinil</option>
                        <option value="Formatos">Formatos</option>
                        <option value="Guias">Guias</option>
                        <option value="Otros">Otros</option>
                       </select>
                    </section>
        
                    <section>
                        <label for="">Cantidad</label></br>
                        <input type="number" name="cantidad" id="cantidad" min="0" required>
                    </section>
                    
                    <section>
                        <label for="">Descripcion</label></br>
                        <input type="text" name="descripcion" id="descripcion" required>
                    </section>
                         
                    <section>
                        <label for="">Precio</label></br>
                        <input type="text" name="precio" id="precio" required>
                    </section>

                    <section>
                    <label for="">Cuenta</label></br>
                    <input type="text" name="precio" id="cuenta" required>
                    </section>

                    <section>
                    <label for="">Saldo</label></br>
                    <input type="text" name="saldo" id="saldo" required>
                    </section>

                    <section>
                    <label for="">Pago</label></br>
                    <select name="pago" id="pago">
                        <option value="Pago Digital">Pago Digital</option>
                        <option value="Pago Efectivo">Pago Efectivo</option>
                    </select>
                    </section>

                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn-agregar" style="width:200px">Agregar</button>
      </div>
    </div>
  </div>
</div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="control/index.js"></script>
<script src="control/venta.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<!-- --------------------------------------- link  para formato pdf---------------------------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<!-- SWEET ALERT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
   
</body>
</html>