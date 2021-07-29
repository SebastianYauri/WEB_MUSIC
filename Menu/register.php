<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title></title>
	<link rel="stylesheet" type="text/css" href="css/formularios.css">

	<script type="text/javascript" src="../JS/header.js" ></script>
	<link rel="stylesheet" type="text/css" href="../CSS/estilog.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">

	<script type="text/javascript" src="../Administracion/js/alertas.js" ></script>

	<script type="text/javascript" src="../CSS/jquery-3.6.0.min.js"></script>
</head>
<body>
	<?php
	include'../include/cabecera_Pag.php';
	?>
<br>
<br>
		<div class="centrar_2">
			<div class="imagen">	
			<img class="img" src="fondos/fondo1.jpg">
			</div>
			<div class="formulario">
				<p class="texto_centrar"><h1>REGISTRARSE</h1></p> <br><br>
				<form action="../Administracion/Llamadas/proceso_registro.php" method="post">
				<p>Nombre Completo:</p>
				<input class="input" type="text" name="nombre">
				<br>
				<br>
				<p>Correo Electronico</p>
				<input class="input" type="email" name="correo">
				<br>
				<br>
				<p>Usuario</p>
				<input class="input" type="text" name="usuario">
				<br>
				<br>
				<p>Contraseña:</p>
				<input class="input" type="password" name="contrasena">
				<br>
				<br>
				<p>Repite la contraseña:</p>
				<input class="input" type="password" name="rcontrasena">
				<br>
				<br>
				<input type="hidden" name="accion" value="agregar">
				<input class="boton_personalizado" type="submit" name="agregar" value="Registrarse" onclick="sign1()">
				<br>
				<br>
				Al registrarte, aceptas nuestras
				<br>Condiciones de uso y Política
			    <br>de privacidad.
				¿Ya tienes una cuenta?
				<br> <a class="link" href="signIn.php">Iniciar Sesión </a></p><br>
				</form>
			</div>
		</div>

<br>
<br>
	<?php
		include '../Include/footer_menu.php';
	?>
</body>
</html>