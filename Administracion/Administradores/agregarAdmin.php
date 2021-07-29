<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title></title>
	<!--JavaScrip y jquery-->
	<script type="text/javascript" src="../../CSS/jquery-3.6.0.min.js"></script>

	<script type="text/javascript" src="../../JS/header.js" ></script>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="../../CSS/estilog.css">
	<link rel="stylesheet" type="text/css" href="../css/miestilo.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">
</head>
<body>
<?php
	include '../../Include/cabecera.php';
?>
<br>
<br>
	
<section >
	<div class="centrar">
	<br>
	<br>
	<br>
		<?php
            include_once '../controlador/conexion.php';
            $conn=conectar();
        ?>

        <h1>Registro de Administrador</h1>
        <br>
        <br>
        <form action="procesoAdmin.php" method="post" enctype="multipart/form-data">
            <label>Usuario</label>
            <input type="text" name="usuario" required><br>
            <label>Contrasena</label>
            <input type="text" name="contrasena" required><br>
            <input type="hidden" name="accion" value="agregar">
            <input class="boton_personalizado botones" type="submit" value="Guardar">     
        </form>
        <br><a href="../Menu.php">Gestionar</a>
      
		<br>
		<br>
		<br>
		</div>
</section>

	<br><br>

<?php
	include '../../Include/footer_Pag.php';
?>
</body>
</html>