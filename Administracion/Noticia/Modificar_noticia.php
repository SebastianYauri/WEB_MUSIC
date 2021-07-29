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
	<br>
	<br>
	<br>
	<div class="centrar">
	<?php           
            include_once '../controlador/conexion.php';

            $conn=conectar();
            $cod=$_REQUEST['cod']; 
            $a=buscarNoticia($cod, $conn);
        ?>
            <h1>Registro de productos</h1>          
            <form action="proceso_Noticia.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="cod" value="<?=$cod?>">
                <label>Titulo:</label>
                <input name="tit" value="<?=$a[0]?>"><br>
                <label>Informacion:</label>
                <input name="txt" value="<?=$a[1]?>"><br>
                <label>Tipo:</label>
                <input name="txt" value="<?=$a[2]?>"><br>
                <label>Imagen:</label>
                <input type="file" name="fot"><br>

                <input type="hidden" name="accion" value="modificar">
                <input type="submit" value="Actualizar">    
            </form>
        <br><a href="../Menu.php">Gestionar</a>
	</div>
	<br>
	<br>
	<br>
</section>

	<br><br>

<?php
		include '../../Include/footer_Pag.php';
	?>
</body>
</html>