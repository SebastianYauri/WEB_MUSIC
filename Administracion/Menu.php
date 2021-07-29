<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title></title>
	<!--JavaScrip y jquery-->
	<script type="text/javascript" src="../CSS/jquery-3.6.0.min.js"></script>

	<script type="text/javascript" src="../JS/header.js" ></script>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="../CSS/estilog.css">
	<link rel="stylesheet" type="text/css" href="css/miestilo.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<?php
		include '../Include/cabecera_Pag.php';
	?>
<br>
<br>
	
<section >
	<div class="centrar">
			<br>
			<br>
		<H2>Noticias</H2>
			<br>
			<br>
			<a class="boton_personalizado botones" href="Noticia/Agregar_noticia.php">Agregar</a>
			<a class="boton_personalizado botones" href="Noticia/Listar_noticia.php">Listar</a>
			<br>
			<br>
			<br>
			<br>
		<H2>Tabla de artistas</H2>
			<br>
			<br>
			<a class="boton_personalizado botones" href="topcanciones/Agregar_topc.php">Agregar</a>
			<a class="boton_personalizado botones" href="topcanciones/Listar_topc.php">Listar</a>
			<br>
			<br>
			<br>
			<br>
		<h2>Administradores</h2>
			<a class="boton_personalizado botones" href="Administradores/agregarAdmin.php">Agregar</a>
			<a class="boton_personalizado botones" href="Administradores/listarAdmin.php">Listar</a>
			<br>
			<br>
			<br>
			<br>
		<h2>Recomendaciones</h2>
			<a class="boton_personalizado botones" href="Recomendaciones/VIEWS/CANCIONES/index.php">Agregar</a>
			<a class="boton_personalizado botones" href="Recomendaciones/VIEWS/LISTAS/index.php">Listar</a>
		</div>
			<br>
			<br>
			<br>
</section>
	
	<br>
	<br>
	<br>
<footer id="generos">
		<div class="centrar">
		<div class="logo"><a class="none" href="javascript:alertaWin()">MUSHARE</a></div>
		<nav>
			<a href="javascript:abrirventana('https://www.facebook.com/Mushare-103731488541088')" ><img src="imagenes/facebook.png" class="imagenes_red"></a>
			<a href="javascript:abrirventana('https://www.instagram.com/mushare_music/')"><img src="imagenes/instagram.png" class="imagenes_red"></a>
			<a href="javascript:abrirventana('https://twitter.com/Mushare7')"><img src="imagenes/twitter.png" class="imagenes_red"></a>
		</nav>
		</div>
		<div class="centrar" >
				<ul class="lista_generos">
					<li>
						<a class="generos_footer" href="../Generos/Electronica/Electronica.php" class="footer-link">Electrónica
						</a>
					</li>
					<li>
						<a class="generos_footer"href="../Generos/Baladas/baladas.php" >Baladas
						</a>
					</li>
					<li>
						<a class="generos_footer"href="../Generos/Clasicos/Clasicos.php" >
						Clasicos 80's
						</a>
					</li>
					<li>
						<a  class="generos_footer"href="../Generos/Rock/Rock.php">
						Rock
						</a>
					</li>
					<li>
						<a class="generos_footer"href="../Generos/Kpop/kpop.php" >
						ㅤKpopㅤ
						</a>
					</li>
					<li>
						<a class="generos_footer"href="../Generos/Rap/Rap.php" >
						ㅤRapㅤ
						</a>
					</li>
				</ul>
		</div>
	</footer>
</body>
</html>