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

        <h1>Registro de noticias</h1>
        <br>
        <br>
        <form action="proceso_Noticia.php" method="post" enctype="multipart/form-data">
            <label>Codigo</label>
            <input type="text" name="cod" required><br>
            <label>Titulo</label>
            <input type="text" name="tit" required><br>
            <label>Texto</label>
            <input type="text" name="txt" required><br>
            <label>Tipo</label>
            <input type="text" name="tipo" required><br>
            <label>Foto</label>s
            <input  type="file" name="fot" required><br>
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