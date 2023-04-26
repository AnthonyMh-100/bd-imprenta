const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

// signUpButton.addEventListener('click', () => {
// 	container.classList.add("right-panel-active");
// });

// signInButton.addEventListener('click', () => {
// 	container.classList.remove("right-panel-active");
// });


$(document).ready(function(){
	$("#form-login").submit(function(e){
	  e.preventDefault();
	  $.ajax({
		type: "POST",
		url: "iniciarSesion.php",
		data: $(this).serialize(),
		success: function(response) {
		  if(response == "success") {
			window.location.replace("index.php");
		  } else {
			Swal.fire({
				icon: 'error',
				title: 'Error',
				text: 'Ingrese los datos correctamente!'
			  })
		  }
		}
	  });
	});
  });