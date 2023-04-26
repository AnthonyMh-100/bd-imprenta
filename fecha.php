<?php
include "conexion.php";

$sql= "SELECT fecha, SUM(cuenta) AS total_por_dia FROM `ventas` GROUP BY fecha";

$result = $conexion->query($sql);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
  
    <title>fecha</title>

    <style>
        #slider {
  width: 500px;
  height: 300px;
  list-style: none;
  margin: 0;
  padding: 0;
}

#slider li {
  width: 500px;
  height: 300px;
  display: none;
}

#slider li:first-child {
  display: block;
}

button {
  margin-top: 10px;
}

    </style>
</head>
<body>

<h1>TOTAL DE VENTAS POR DIAS </h1>

<table id="table">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Total por Dia</th>
        </tr>
    </thead>
         <tbody>
            <?php 
            while($row = $result->fetch_assoc()){         
            ?>
    <tr>
          <td><?php echo $row['fecha']; ?></td> 
          <td><?php echo $row['total_por_dia']?></td> 
    </tr>

    <?php
     }
    ?>
  
           </tbody>

</table>

<ol id="slider">
  <li><img src="img/venta.svg">1</li>
  <li><img src="img/bxs-printer.svg">2</li>
  <li><img src="img/carAdd.svg">3</li>
</ol>

<button onclick="anterior()">Anterior</button>
<button onclick="siguiente()">Siguiente</button>





















<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>

<script>
      
    $(document).ready(function(){
        $('#table').DataTable();
    })
      
    var sliderIndex = 0;
var sliderItems = document.querySelectorAll("#slider li");

function siguiente() {
  if (sliderIndex < sliderItems.length - 1) {
    sliderIndex++;
  } else {
    sliderIndex = 0;
  }
  actualizarSlider();
}

function anterior() {
  if (sliderIndex > 0) {
    sliderIndex--;
  } else {
    sliderIndex = sliderItems.length - 1;
  }
  actualizarSlider();
}

function actualizarSlider() {
  for (var i = 0; i < sliderItems.length; i++) {
    sliderItems[i].style.display = "none";
  }
  sliderItems[sliderIndex].style.display = "block";
}


</script>
</body>
</html>