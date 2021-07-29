<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!--JavaScrip y jquery-->
	<meta charset="utf-8">
	<script type="text/javascript" src="../../CSS/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../JS/header.js" ></script>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="../../CSS/estilog.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">
</head>
<body>

	<?php
		include '../../Include/cabecera.php';
	?>

	<?php
	 function conectar() {

        $conn= mysqli_connect ("localhost","root", "","bdadministracion");
        if(!$conn){          
          echo "MAL";
        }
        else{
            echo "";
        }
        return $conn;

    }
    function listarKpop($conn){
	        $sql="select nomart, fotart, descrip, fandom, nomcan, fotdisco, mus ,code from bdadministracion.cancionestop c WHERE c.codegen = '600'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

	$conn=conectar();
	?>
	<section>
			<img src="grupos/banner02.jpg" width="100%">
	</section>
	<section>
		<div class="tablaindice">
			<div class="margeninfo">
				<div class="indiceimagen">
				<img src="grupos/imgjennie.gif" width="100%">
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="tablaindice">
			<div class="margeninfo">
			<div id="indice1">
				<strong><br></strong>
				<strong>Indice</strong>
				<ul>
					<li><a class="a-indice" href="#kpop">¿Qué es el KPOP?</a></li>
					<li><a class="a-indice" href="#grupos">Top artistas mas conocidos</a></li>
						<ul>
							<li><a class="a-indice" href="#idbts">BTS</a></li>
							<li><a class="a-indice" href="#idbp">BLACKPINK</a></li>
							<li><a class="a-indice" href="#idbb">BIGBANG</a></li>
							<li><a class="a-indice" href="#idexo">EXO</a></li>
							<li><a class="a-indice" href="#idmonstax">MONSTA X</a></li>
							<li><a class="a-indice" href="#idkids">STRAY KIDS</a></li>
							<li><a class="a-indice" href="#idgirl">GIRLS GENERATION</a></li>
						</ul>
					<li><a class="a-indice" href="#recomendaciones">Canciones recomendadas</a></li>
				</ul>
				<ul>
					<img src="grupos/peppo3.gif" width="60%">
				</ul>
			</div>
			<div id="indice2">
				<h2><strong>K-POP</strong></h2>
				El 'K-pop' es un género de música coreana que está influenciado por el pop, el jazz, el hip-hop, el reggae y la electrónica, entre otros. Surgió a principios de los años 90 y desde ese momento ha tenido un crecimiento exponencial, creando un movimiento cultural seguido por millones de fans alrededor del mundo. Actualmente, este estilo de música se ha coronado como el más escuchado en YouTube en lo que va del 2020. <br><br>
				Existen diferentes grupos de 'K-pop' que han marcado tendencias en todo el mundo. Su estilo de música, moda, coreografía o cosmética son unas de las características que hacen de estos grupos un fenómeno distinto, innovador y revolucionario. La cultura coreana tiene estándares de bellezas marcados por una estética muy fina. Tener la piel limpia o el pelo y la ropa con un estilo marcado, son unas de las características típicas de la moda proveniente de Corea del Sur. Estas tendencias han influido en el 'K-pop', genero el cual tiene como 'núcleo' las industrias basadas en agencias de talentos en buscas de 'korean idols' (ídolos coreanos).<br><br>
				<strong>Ídolos coreanos</strong>Cientos de coreanos realizan audiciones buscando firmar un convenio con alguna agencia de entretenimiento. En la mayoría de los casos, estos artistas deben realizar 'entrenamientos' en los que se les inculcan clases de canto, idiomas, baile y de lenguaje. El fin de estas lecciones es crear el prototipo de un artista 'casi perfecto'.<br><br> 
				De este tipo de proceso han surgido grupos musicales de la talla de BTS, EXO y Girls' generation. La estrategia de negocio del 'K-pop' no se limita solamente a la música, estos artistas generan gran cantidad de contenido en las redes sociales y medios de comunicación, en la que demuestran lo que representan dentro de su cultura, así como lo que viven en su entorno casi en el día a día. <br><br>
				</p>	
				<strong>Acontinuación se presentaran algunos de los grupos relevantes dentro de la industria musical del KPOP</strong><br><br>				
			</div>
			</div>
		</div>
		<br>
		<br>
		<br>
	</section>
	<section id="grupos">
		<div class="emote">
			<div class="emotefila">
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
			</div>			
		</div>
	</section>
	<section >
			<div class="tablagenero">
				<div class="margentitulo">
					<div class="itemtablatitulo">
						<h2><strong class="tamaño2">GRUPO</strong></h2>
					</div>
					<div class="itemtablatitulo">
						<h2><strong class="tamaño2">INFORMACION</strong></h2>
					</div>
					<div class="itemtablatitulo">
						<h2><strong class="tamaño2">HIT</strong></h2>
					</div>
				</div>
			</div>
			<br>
			<br>
	<?php 
	foreach (listarKpop($conn) as $a => $value) {
	?>

<section>
  			<div class="tablainfo">
					<div class="margeninfo">
					<div class="itemtablainfo">

						<br>
						<section id="<?=$value[7]?>"><strong><?=$value[0]?></strong></section>
						<br>
						<img src="<?='../../Administracion/topcanciones/imagenes/'.$value[1]?>" width="85%" >
					</div>
					<div class="itemfalso">
					</div>
					<div class="itemtablainfo">
						<br>
						<br>
						<p><?=$value[2]?>
						<br> 
						<br>
						<strong><?=$value[3]?></strong>
						</p>
					</div>
					<div class="itemtablainfo">
						<br>
						<strong><?=$value[4]?></strong>
						<br>
						<br>
						<audio src="<?='../../Administracion/topcanciones/audio/'.$value[6]?>" controls="controls"></audio>	
						<br>	
						<img src="<?='../../Administracion/topcanciones/imagenes/'.$value[5]?>" width="50%" >	
						<br>
						<br>
					</div>
					</div>
			</div>
    </div> 
</section>

    	<?php
	        }
	    ?>
			<br>
			<br>
			<br>
			<section id="recomendaciones"></section>
			<br>
	</section>

	<section >
		<div class="emote">
			<div class="emotefila">
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
				<div class="itememote">
					<img src="grupos/peppo4.gif" width="80%">
				</div>
			</div>			
		</div>
	</section>
	<section>
		<div class="fondoreco">
				<div class="tablareco">
					<div class="tituloreco">
					</div>
					<div class="tituloreco">
						<h2><strong class="tamaño2">RECOMENDACIONES MUSICALES</strong></h2>
					</div>
					<div class="tituloreco">
					</div>
				</div>
		</div>

		<div class="fondocanciones">
			<br>
			<br>
			<br>
			<div class="canciones">
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>DON´T WANNA CRY</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songseventeen.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">	
						<strong>WINNER - EVERY DAY</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songeveryday.mp3" controls="controls"></audio>
					</div>
					</div>	
				</div>			
			</div>
			<br>
			<br>
			<div class="canciones">
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>BERMUDA TRIANGLE</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songtriangle.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">	
						<strong>MINO - BODY</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songbody.mp3" controls="controls"></audio>
					</div>
					</div>	
				</div>			
			</div>
			<br>
			<br>
			<div class="canciones">
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>T-ARA  -  ROLY-POLY</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songtara.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img  src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>ZICO  -  ANY SONG</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songzico.mp3" controls="controls"></audio>
					</div>
					</div>	
				</div>			
			</div>
			<br>
			<br>
			<div class="canciones">
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>BLOCK B  -  JACKPOT</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songblockb.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">	
						<strong>GOT7  -  JUST RIGHT</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songgot7.mp3" controls="controls"></audio>
					</div>
					</div>	
				</div>			
			</div>
			<br>
			<br>
			<div class="canciones">
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>TAEMIN  -  MOVE</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songtaemin.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">	
						<strong>AKMU  -  DINOSAUR</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songakmu.mp3" controls="controls"></audio>
					</div>
					</div>	
				</div>			
			</div>
			<br>
			<br>
			<div class="canciones">
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>SS501  -  LOVE LIKE THIS</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songss501.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="grupos/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2" >	
						<strong>KAI  -  MMMH</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="canciones/songkai.mp3" controls="controls"></audio>
					</div>
					</div>	
				</div>			
			</div>
			<br>
			<br>
			<br>
		</div>
	</section>
	<br>
	<br>
	<br>
	<section id="playlist">
	<div class="centrar">
		<strong class="tamaño">¿Tiénes ganas de escuchar algo?</strong>
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a c href="https://open.spotify.com/playlist/4iQcvUc9FfLqZWAhk6jMCQ" target="_blank">
					<img src="grupos/p0001.jpg" width="90%" class="acercar">
				</a>				
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/0i10er5QXE7oSz1Q4nG3dT" target="_blank">
					<img src="grupos/p0002.jpg" width="90%"class="acercar">
				</a>			
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/3LTa5Qt95cecT8dccZUw4n" target="_blank">
					<img src="grupos/p0003.jpg" width="90%" class="acercar">
				</a>				
			</div>
		</div>
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/72vEaoSJTdZFhpgLu6VzNp" target="_blank">
					<img src="grupos/p0004.jpg" width="90%" class="acercar">
				</a>	
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/7rZtVmdyTaNwzksRS0ZXB0" target="_blank">
					<img src="grupos/p0005.jpg" width="90%" class="acercar">
				</a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/2VqqWUvCzFoCQ5qTgsnQBJ" target="_blank">
					<img src="grupos/p0006.jpg" width="90%" class="acercar">
				</a>
			</div>
		</div>	
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/7leyTEMVuMffImDhkJNE8d" target="_blank">
					<img src="grupos/p0007.jpg" width="90%" class="acercar">
				</a>		
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/3kwb1LyzCSsLLacppOJQc8" target="_blank">
					<img src="grupos/p0008.jpg" width="90%" class="acercar">
				</a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/4s1RO9Zvfo9oTPpTquKSwd" target="_blank">
					<img src="grupos/p0009.jpg" width="90%" class="acercar">
				</a>
			</div>
		</div>						
	</div>
	</section> 
	<br>
	<br>
	<br>
	<br>
	<section>
		<div class="reaccionfondo">
			<div id="tituloreaccion">
				<h2><strong>¿Qué te pareció la información?</strong></h2>
			</div>
			<br>
			<br>
			<div class="reaccion">
				<div class="itemreaccion">
					<img src="grupos/r001.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="grupos/r005.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="grupos/r003.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="grupos/r004.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="grupos/r006.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="grupos/r007.gif" width="30%">					
				</div>
			</div>
			
		</div>
	</section>
	<br><br><br>

	<br>
	<br>
	<br>
	<?php
		include '../../Include/footer.php';
	?>
	
</body>
</html>