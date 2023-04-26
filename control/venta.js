$(document).ready(function() {

    console.log('jquery')
    
    var array_ventas = [];

    //BUSCANDO AL CLIENTE 

       $("#form-buscar").submit(function(e) {
        e.preventDefault();
        let Ctelefono = $("#c-telefono").val();
 // Obtén el valor del campo de formulario

        $.ajax({
            url : 'buscarCliente.php',
            type : 'POST',
            data : {telefonos: Ctelefono},
            success : function(response) {
                let json_cliente = JSON.parse(response);
                let plantilla = "";
                json_cliente.forEach(venta =>{

                    plantilla =` <h5 >Cliente :</h5><h5>${venta.nombre} ${venta.apellido}</h5>`;
                  
                });
                $("#cliente-venta").html(plantilla);
                if (JSON.parse(response).length == 0) {
                  Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No Existe el Cliente!',
                    
                  })
                }
                
            }
        });
       
    })

    //AGREGAR PRODCUTOS A LAS TABAL DE VENTAS
    $("#btn-agregar").click(function(e){
        let telefono = $("#c-telefono").val();
        let producto = $('#producto').val();
        let cantidad = $('#cantidad').val();
        let descripcion = $('#descripcion').val();
        let precio = $('#precio').val();
        let cuenta = $('#cuenta').val();
        let saldo = $('#saldo').val();
        let pago = $('#pago').val();
        
        var venta_productos = {
        "telefono": telefono,
        "producto": producto,
        "cantidad": cantidad,
        "descripcion": descripcion,
        "precio": precio,
        "cuenta": cuenta,
        "saldo": saldo,
        "pago": pago
        }
        array_ventas.push(venta_productos);
        $(".container-datos").trigger('reset');
        var plantilla = "";

                
        array_ventas.forEach(venta => {

            plantilla +=  `<tr>
            <td>${venta.producto}</td>
            <td>${venta.cantidad}</td>
            <td>${venta.descripcion}</td>
            <td>${venta.precio}</td>
            <td>${venta.cuenta}</td>
            <td>${venta.saldo}</td>
            <td>${venta.pago}</td>
            <td>                     
                <button type="button" class="btn btn-danger delete">Eliminar</button>
            </td>
        </tr>`;
            
        });



        $(".tbody").html(plantilla);
        
        var arrayTotal = [];
        var sumaTotal = 0; 

            array_ventas.forEach(element => {     
            arrayTotal.push(parseInt((element.precio)));
           
        });

        $('#totalId').html(arrayTotal.reduce((a,b)=>a+b).toLocaleString("es-PE", {
            style: "currency",
            currency: "PEN"
          }));

    
        console.log(arrayTotal.reduce((a,b)=>a+b));
       console.log(array_ventas)
    
          
    })
    
 //ELIMINADFO PRODUCTOS EN LA TABLA DE VENTAS
     
    $(document).on('click','.delete',function(e) {
    
 
     $('.table tr').click(function() {
        var producto = $(this).find('td:first').html();
           console.log(producto);

           $(".table td").each(function() {
            if ($(this).text() === producto) {
              $(this).closest("tr").remove();
            }
          });

        array_ventas = $.grep(array_ventas, function(obj) {
            return obj.producto != producto;
          
          });
          console.log(array_ventas);
          var arrayTotal = [];
          var sumaTotal = 0; 
  
              array_ventas.forEach(element => {     
              arrayTotal.push(parseInt((element.precio)));
             
          });

          if (arrayTotal.length === 0) {
            $('#totalId').html(0);
          } else {

            $('#totalId').html(arrayTotal.reduce((a,b)=>a+b).toLocaleString("es-PE", {
                style: "currency",
                currency: "PEN"
              }));
            console.log(arrayTotal.reduce((a,b)=>a+b));
          }
        //   console.log($(this)[0].parentElement.parentElement.remove());
      });
     

     })

    //IMPRIMIENDO LA TABLA COMO BOLETA PDF
    // $(".imprimir").click(function() {
    //     var pdf = new jsPDF('p', 'pt', 'letter');
    
    //     // source can be HTML-formatted string, or a reference
    //     // to an actual DOM element from which the text will be scraped.
    //     source = $('.table')[0];
    
    //     // we support special element handlers. Register them with jQuery-style
    //     // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
    //     // There is no support for any other type of selectors
    //     // (class, of compound) at this time.
    //     specialElementHandlers = {
    //       // element with id of "bypass" - jQuery style selector
    //       '#bypassme': function (element, renderer) {
    //         // true = "handled elsewhere, bypass text extraction"
    //         return true
    //       }
    //     };
    //     margins = {
    //       top: 80,
    //       bottom: 60,
    //       left: 40,
    //       width: 522
    //     };
    //     // all coords and widths are in jsPDF instance's declared units
    //     // 'inches' in this case
    //     pdf.fromHTML(
    //       source, // HTML string or DOM elem ref.
    //       margins.left, // x coord
    //       margins.top, { // y coord
    //         'width': margins.width, // max width of content on PDF
    //         'elementHandlers': specialElementHandlers
    //       },
    
    //       function (dispose) {
    //         // dispose: object with X, Y of the last line add to the PDF
    //         //          this allow the insertion of new lines after html
    //         pdf.save('Boleta.pdf');
    //       }, margins
    //     );
    //   });


 // GUARDANDO LA VENTA EN LA BASE DE DATOS

 $("#btn-guardar").click(function(e){



    array_ventas.forEach(e=>{

        $.ajax({
            url : "guardarVenta.php",
            type : 'POST',
            data : {telefono:e.telefono,producto:e.producto,cantidad:e.cantidad,descripcion:e.descripcion,precio:e.precio,
            cuenta:e.cuenta,saldo:e.saldo,pago:e.pago},
            success : function (response) {
                console.log(response);
                Swal.fire({
                  title: 'Venta registrada',
                  text: 'La venta se ha registrado exitosamente',
                  icon: 'success'
                }).then(function() {
                  location.reload();
                });
            }         
        })
    })


 });


 // HABILITADO Y DESHABILITADO BOTONES


});