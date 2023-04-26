$(document).ready(function() {

   var table = $('.table').DataTable({

    "ajax": {
        "url": "mostrarHistorial.php",
        "dataSrc": ""
    },
    "columns": [
        {"data": "id"},
        {"data": "producto"},
        {"data": "cantidad"},
        {"data": "descripcion"},
        {"data": "precio"},
        {"data": "cuenta"},
        {"data": "saldo"},
        {"data": "pago"},
        {"data": "fecha"},
        {"data": "telefono_cliente"},
        {
            "data": null,
            "render": function (data, type, row) {
                return '<button type="button" class="btn btn-primary" id="editar-historial" data-bs-toggle="modal"data-bs-target="#exampleModal">Editar</button>   <button type="button" class="btn btn-danger" id="eliminar-historial">Eliminar</button>';
            }
        }
    ],

    "pageLength": 6,
    "lengthChange": false,

    language: {
        lengthMenu: 'Mostrar _MENU_ registro de paginas',
        zeroRecords: 'No se a Encontrado',
        info: 'Mostrando pagina _PAGE_ de _PAGES_',
        infoEmpty: 'Registro no disponible',
        infoFiltered: '(filtered from _MAX_ total records)',
    },

   });


    $('.tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );


// EDIATR LOS TODOS LOS HISTORIAL

 // Evento de clic para el botón de edición
 $('.table').on('click', '#editar-historial', function () {
    // Obtener los datos de la fila seleccionada
    var data = table.row($(this).parents('tr')).data();
    
    console.log(data.id);
   // Aquí puedes procesar los datos para la edición, como mostrar un formulario modal con los valores actuales
    // ...

    let edit_producto = $("#h-producto").val(data.producto);
    let edit_cantidad = $("#h-cantidad").val(data.cantidad);
    let edit_descripcion = $("#h-descripcion").val(data.descripcion);
    let edit_precio =  $("#h-precio").val(data.precio);
    let edit_cuenta =  $("#h-cuenta").val(data.cuenta);
    let edit_saldo =  $("#h-saldo").val(data.saldo);
    let edit_pago =  $("#h-pago").val(data.pago);
    let edit_id =  $("#e-id").val(data.id);
    
 
});

$("#edit-historial").submit(function(e){

    e.preventDefault();
    
    let edit_producto = $("#h-producto").val();
    let edit_cantidad = $("#h-cantidad").val();
    let edit_descripcion = $("#h-descripcion").val();
    let edit_precio =  $("#h-precio").val();
    let edit_cuenta =  $("#h-cuenta").val();
    let edit_saldo =  $("#h-saldo").val();
    let edit_pago =  $("#h-pago").val();
    let edit_id =  $("#e-id").val();


    
    $.ajax({
        url : 'actualizarHistorial.php',
        type: 'POST',
        data : {producto: edit_producto,cantidad: edit_cantidad,descripcion: edit_descripcion,precio:edit_precio,
        cuenta: edit_cuenta,saldo: edit_saldo,pago: edit_pago,id: edit_id},
        success: function(response){
          console.log(response);
          Swal.fire(
            'Actualizado!',
            'Historial Actualizado con Exito!!',
            'success'
          )
          table.ajax.reload();
        }
    
    });
    
    
    })
    

// Evento de clic para el botón de eliminación
$('.table').on('click', '#eliminar-historial', function () {
    // Obtener los datos de la fila seleccionada
    var data = table.row($(this).parents('tr')).data();
       
        var id = data.id;
        console.log(id)
    // Aquí puedes procesar los datos para la eliminación, como enviar una solicitud AJAX para eliminar el registro de la base de datos
    // ...
    $.ajax({
        url : 'eliminarHistorial.php',
        type : 'POST',
        data :{id:id},
        success : function(response){
            console.log(response);
            Swal.fire({
                title: 'Estas Seguro?',
                text: "Se borrara el Registro",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminalo!'
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire(
                    'Eliminado!',
                    'El Registro se a sido eliminado',
                    'success'
                  )
                  table.ajax.reload();
                }
              })
            
        }


    });

});

 

   


});