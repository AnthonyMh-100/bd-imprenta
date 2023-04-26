<!-- <?php

// if (isset($_POST['ingresar'])) {
	
// 	header('Location: index.php');
// }


?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/login.css">
    <title>Login</title>
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#" method="POST" >
			<h1>Crear Cuenta</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Crear Cuenta</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
   
		<form action="login.php" method="POST" id="form-login">
        <img src="img/ideaslogo.png" alt="" srcset="" style="width:170px;height:70px;margin:10px 0">
			<h1 style="margin: 16px 0">Iniciar Sesion</h1>
          
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your account</span> -->
			<input type="text" placeholder="User" id="user" name="user"/>
			<input type="password" placeholder="Password" id="pass" name="pass" />
			
			<button type="submit" id="ingresar" name="ingresar" style="margin:15px 0">Ingresar</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenido!</h1>
				<p>Mantente conectado con Nosotros</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hola, Amigo!</h1>
				<p>Bienvenido a tu espacio de Trabajo!</p>
				<button class="ghost" id="signUp">Crear</button>
			</div>
		</div>
	</div>
</div>

<!-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<script src="control/login.js"></script>
<!-- SWEET ALERT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>