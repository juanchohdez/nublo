<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="V/css/estilo.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
		<link rel="stylesheet" type="text/css" href="V/css/animate.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

		<script type="text/javascript">
			window.onload = function() {
		  var input = document.getElementById("username").focus();
		}
		</script>

		<style type="text/css" media="all">
		<?php
		session_start();
		session_destroy();

		  $valor = rand(0,2);
		  $imagenes = array("roque1.jpg" , "roque2.jpg" , "roque3.jpg");
		  echo "body{ background: url('".$imagenes[$valor]."') no-repeat fixed;  background-size: cover; width:100%; height:100vh; transition: 1s ease }";

		?>



		</style>

		<link rel="icon" type="image/png" href="logo.ico">
		<title>TPVNublo</title>

	</head>
	<body >
	<section>
	<div id="wrapper" class="animated fadeInLeft">
			<div id="clouds" class="stage"></div>

		<form name="form" class="login-form" action="C/InicioSesion.php" method="post">

			<div class="header">
			<img src="V/img/logo.png" class="centrado-div" width="40%">
			<h1>Iniciar Sesión</h1>
			<span>Ingresa tu nombre de usuario y contraseña para ingresar a TPVNublo.</span>
			</div>

			<div class="content">
			<input name="username" type="text" id="username" class="input username" autocomplete="off" placeholder="Usuario" title="Solo letras y números" pattern="[0-9a-zA-Z]*" required autofocus />
			<div class="user-icon"></div>
			<input name="password" type="password" class="input password" placeholder="Password" title="Solo letras y números" pattern="[0-9a-zA-Z]*" required/>
			<div class="pass-icon"></div>
			</div>


			<div class="footer">
			<input type="submit" name="submit" value="Login" class="button" />
			<input type="reset" name="submit" value="Restaurar" class="register" />
			</div>

		</form>

	</div>
	</section>

	</body>
</html>
