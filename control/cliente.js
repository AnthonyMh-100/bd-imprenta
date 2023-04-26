$(document).ready( function () {
    console.log('j query')


    var table =  $('.table').DataTable({   
        
        "ajax": {
            "url": "mostrarCliente.php",
            "dataSrc": ""
        },
        "columns": [
            {"data": "id"},
            {"data": "nombre"},
            {"data": "apellido"},
            {"data": "telefono"},
            {"data": "fecha"},
            {
                "data": null,
                "render": function (data, type, row) {
                    return '  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Editar</button>   <button type="button" class="btn btn-danger delete-btn">Eliminar</button>';
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


  
// EDIATR LOS TODOS LOS CLIENTES

 // Evento de clic para el botón de edición
 $('.table').on('click', '.btn', function () {
    // Obtener los datos de la fila seleccionada
    var data = table.row($(this).parents('tr')).data();
    
    console.log(data.id);
   // Aquí puedes procesar los datos para la edición, como mostrar un formulario modal con los valores actuales
    // ...
    let e_nombre = $("#e-nombre").val(data.nombre);
    let e_apellido = $("#e-apellido").val(data.apellido);
    let e_telefono = $("#e-telefono").val(data.telefono);
    let e_id = $("#e-id").val(data.id);
    

});



$("#edit-cliente").submit(function(e){

e.preventDefault();

let edit_nombre = $("#e-nombre").val();
let edit_apellido = $("#e-apellido").val();
let edit_telefono = $("#e-telefono").val();
let edit_id =  $("#e-id").val();

console.log(edit_nombre, edit_apellido, edit_telefono);

$.ajax({
    url : 'actualizarCliente.php',
    type: 'POST',
    data : {nombre:edit_nombre,apellido:edit_apellido,telefono:edit_telefono,id:edit_id},
    success: function(response){
      console.log(response);
      Swal.fire(
        'Actualizado!',
        'Datos Actualizado con Exito!!',
        'success'
      )
      table.ajax.reload();

    }

});


})




// Evento de clic para el botón de eliminación
$('.table').on('click', '.delete-btn', function () {
    // Obtener los datos de la fila seleccionada
    var data = table.row($(this).parents('tr')).data();
        
        var id = data.id;
    // Aquí puedes procesar los datos para la eliminación, como enviar una solicitud AJAX para eliminar el registro de la base de datos
    // ...
    $.ajax({
        url : 'eliminarCliente.php',
        type : 'POST',
        data :{id:id},
        success : function(response){
            console.log(response);
            Swal.fire({
                title: 'Estas Seguro?',
                text: "Se borrara al cliente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminalo!'
              }).then((result) => {
                if (result.isConfirmed) {
                  Swal.fire(
                    'Eliminado!',
                    'El cliente a sido eliminado',
                    'success'
                  )
                  table.ajax.reload();
                }
              })
            
        }


    });
});


// }


  } );