$(document).ready(function() {

    console.log('j query')

    $("#form-cliente").submit(function(e){
        e.preventDefault();

        let nombre = $("#nombre").val();
        let apellido = $("#apellido").val();
        let telefono = $("#telefono").val();


        $.ajax({
            url : 'nuevoCliente.php',
            type : 'POST',
            data:{nombre:nombre,apellido:apellido,telefono:telefono},
            success : function(response){
                Swal.fire(
                    'Registrado!',
                    'Cliente registrado Exitosamente',
                    'success'
                  )

                  $('#form-cliente').trigger('reset');
            }
        });


    });

});