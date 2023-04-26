let cambiar =  document.getElementById('cambiar');
    let cuerpoIzquierda = document.querySelector('.cuerpo-izquierda');
    let li = document.querySelectorAll('.li');
    let textos = document.querySelectorAll('.textos');
    var cerrar = document.querySelector('.cerrar');
   //  var cerrar_sesion = document.querySelector('.cerrar-sesion');
   
    cambiar.addEventListener('click',()=>{
        if (cambiar.checked) {
           cuerpoIzquierda.style.width = '8vw';
           cuerpoIzquierda.style.transition = '0.8s';
           
         li.forEach((i)=>{
            i.style.width ='12vw';  
  
         });

         for (let i = 0; i < textos.length; i++) {
            const elemento = textos[i];
            
            textos[i].style.transition = '0.8s';
            
            textos[i].style.height = '10px';

            textos[0].innerText='Inicio';
            textos[1].innerText='Nuevo';
            textos[2].innerText='Clientes';
            textos[3].innerText='Historial';
            textos[4].innerText='Venta';
            textos[5].innerText='Cerrar Sesion';
           
         }
    
        
        }else{
            cuerpoIzquierda.style.width = '5vw';
            cuerpoIzquierda.style.transition = '0.7s';
            for (let i = 0; i < textos.length; i++) {
            const elemento = textos[i];
            elemento.style.transition='0.7s';
            textos[i].innerText='';
            textos[i].style.height = '0px';
            
         }
            
        }
    })

    $(document).ready(function() {
      $("#c-s").click(function() {
        $.ajax({
          type: "POST",
          url: "cerrarSesion.php",
          success: function(response) {
            window.location.replace("login.php");
          }
        });
      });
    });

