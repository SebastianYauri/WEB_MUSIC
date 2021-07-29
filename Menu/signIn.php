<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/formularios.css">

	<script type="text/javascript" src="../JS/header.js" ></script>
	<link rel="stylesheet" type="text/css" href="../CSS/estilog.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">
	<script type="text/javascript" src="../CSS/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/sign.js" ></script>
	<title></title>
</head>
<body>
	<?php
		include '../Include/cabecera_Pag.php'
	?>
<br>
<br>
<br>
<br>
	<div class="centrar_2">
			<div class="imagen">	
			<img class="img" src="fondos/fondo1.jpg" width="100%">
			</div>
			<div class="formulario" >
				<p class="texto_centrar"><h1>INGRESAR</h1></p>
				<form name="formularioSIGN" action="../Administracion/Llamadas/proceso_Logeo.php" method="post">
				<br>
				<br>
				<p>Usuario:</p>
				<input class="input" type="text" name="usuario_verificar">
				<br>
				<br>
				<p>Contraseña</p>
				<input class="input" type="password" name="contrasena_verificar">
				<br><br><br>
				<input type="hidden" name="accion" value="verificar">
				<input class="boton_personalizado" type="submit" name="verificar" value="Iniciar Sesion">
				<br>
				<br>
				Al registrarte, aceptas nuestras
				<br>Condiciones de uso y Política
			    <br>de privacidad.
				¿No tienes una cuenta?
				<br> <a class="link" href="register.php">Registrate </a></p>
         		<br>
         		<br>
				</form>
			</div>
		</div>
<br>
<br>
<br>
<br>
	<?php
		include '../Include/footer_menu.php';
	?>
</body>
</html>