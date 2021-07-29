<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <!--JavaScrip y jquery-->
    <meta charset="utf-8">
    <script type="text/javascript" src="../../CSS/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../JS/header.js" ></script>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../../CSS/estilog.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
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
    function listarrock($conn){
        $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus ,code from bdadministracion.cancionestop c WHERE c.codegen = '300'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

	$conn=conectar();
	?>

	<section>
			<img src="Imagenes/banner.jpg" width="100%">
	</section>
	<section class="fondito">
		<div class="tablaindice">
			<div class="margeninfo">
				<div class="indiceimagen">
				<img src="Imagenes/bagi.gif" width="100%">
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
					<li><a class="a-indice">Definición</a></li>
					<li><a class="a-indice" href="#Banda">Bandas</a></li>
						<ul>
							<li><a class="a-indice" href="#Beatles">The Beatles</a></li>
							<li><a class="a-indice" href="#Rolling">The Rolling Stones</a></li>
							<li><a class="a-indice" href="#U2">U2</a></li>
							<li><a class="a-indice" href="#Pink">Pink Floyd</a></li>
							<li><a class="a-indice" href="#Led">Ledd Zepellin</a></li>
							<li><a class="a-indice" href="#Who">The Who</a></li>
						</ul>
					<li><a class="a-indice" href="#recomendaciones">Recomendaciones</a></li>
				</ul>
				<ul>
					<img src="Imagenes/monito.gif" width="60%">
					<img src="Imagenes/bandera1.jpg" width="60%" height="400px">
				</ul>
			</div>
			<div id="indice2" >
				<h2><strong>EL ROCK</strong></h2>
				El concepto original mencionaba al rock and roll como la mezcla del blues, el rhythm and blues, el country y otros estilos. En la actualidad, suele utilizarse el término rock para nombrar a los estilos modernos derivados del rock and roll, quedando éste último concepto para designar al ritmo original que surgió en los ’50. <br>

				Entre los muchos subgéneros que han nacido o que han tenido como origen el rock podríamos destacar el jazz rock, el rock progresivo, el punk rock, el heavy metal, el blues rock, el country rock o el folk rock. Este último estilo se atribuye su creación a uno de los artistas más alabados del siglo XX. Nos estamos refiriendo al estadounidense Bob Dylan, que es conocido por canciones tales como “The Times They Are a-Changin” o “Beyond Here Lies Nothin´”.
		<br>

				El músico y cantante Elvis Presley (1935–1977) es considerado el Rey del Rock y uno de sus pioneros. Elvis se convirtió en un ícono de este estilo musical gracias a sus bailes, su vestimenta y su capacidad vocal. <br>

				La banda más importante del rock, en cambio, surgió en Inglaterra: The Beatles. Fue formada en 1960 por John Lennon, Paul McCartney, George Harrison y Ringo Starr. <br>

				No obstante, existen otros muchos artistas que se consideran figuras míticas dentro del rock, en toda su extensión y vertientes. Este sería el caso de los siguientes <br>

				<p class="bandera">
					<img src="Imagenes/bandera5.jpg" width="550px" height="450px" align="center"></p>		

			</div>
			</div>
		</div>
		<br>
		<br>
		<br>
	</section>

	<section class="fondito">
			<div class="tablagenero">
				<div class="margentitulo">
					<div class="itemtablatitulo">
						<h2><strong class="tamaño2" id="Banda">BANDA</strong></h2>
					</div>
					<div class="itemtablatitulo">
						<h2><strong class="tamaño2">DESCRIPCION</strong></h2>
					</div>
					<div class="itemtablatitulo">
						<h2><strong class="tamaño2">HIT</strong></h2>
					</div>
				</div>
			</div>
			<br>
			<br>
<?php 
	foreach (listarrock($conn) as $a => $value) {
	?>


  			<div class="tablainfo">
					<div class="margeninfo">
					<div class="itemtablainfo">
						<br>
						<section id="<?=$value[6]?>"><strong><?=$value[0]?></strong></section>
						<br>
						<img src="<?='../../Administracion/topcanciones/imagenes/'.$value[1]?>" width="85%" >
					</div>
					<div class="itemfalso">
					</div>
					<div class="itemtablainfo">
						<br>
						<br><br><br><br><br>
						<p><?=$value[2]?>
						<br> 
						</p>
					</div>
					<div class="itemtablainfo">
						<br>
						<strong><?=$value[3]?></strong>
						<br>
						<br>
						<audio src="<?='../../Administracion/topcanciones/audio/'.$value[5]?>"  controls="controls"></audio>	
						<br>	
						<img src="<?='../../Administracion/topcanciones/imagenes/'.$value[4]?>" width="50%" >	
						<br>
						<br>
					</div>
					</div>
			</div>



  <?php
	        }
	    ?>
	
	<section>
		<div class="fondoreco">
				<div class="tablareco">
					<div class="tituloreco">
					</div>
					<div class="tituloreco">
						<h2><strong class="tamaño2">RECOMENDACIONES </strong></h2>
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
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>atisfaction-The Rolling Stones</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/1.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">	
						<strong>Respect-Aretha Franklin</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/2.mp3"  controls="controls"></audio>
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
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>Stairway to Heaven-Led Zeppelin</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/3.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">	
						<strong>Yesterday-The Beatles</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/4.mp3" controls="controls"></audio>
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
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>Born to Run-Bruce Springsteen</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/5.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img  src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>Hotel California-Eagles</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/6.mp3" controls="controls"></audio>
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
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>Light My Fire-The Doors</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/7.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">	
						<strong>Good Vibrations-The Beach Boys</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/8.mp3" controls="controls"></audio>
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
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">
						<strong>Hey Jude-The Beatles</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/9.mp3" controls="controls"></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="Imagenes/imgspoc.png" width="40" height="40"  >
					</div>
					<div class="itemcanciones2">	
						<strong>Imagine-John Lennon</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="musica/10.mp3" controls="controls"></audio>
					</div>
					</div>	
				</div>			
			</div>
			<br>
			<br>
			
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
				<a c href="https://open.spotify.com/album/3u1f0ziKFCkqcHUQ0AldCU" target="_blank"><img src="Album/al1.jpg" width="90%" class="acercar"></a>				
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/album/7DUvURQ0wfA1kgG8j99frR?highlight=spotify:track:17lu4tymfnhmcIDlzBbtAb" target="_blank"><img src="Album/al2.jpg" width="90%" class="acercar"></a>		
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/album/59plsPcJYFlSA5ImekNQJ0" target="_blank"><img src="Album/al3.jpg" width="90%" class="acercar"></a>					
			</div>
		</div>
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/album/5HRB9TeaIHRBxfIm4XZTj6" target="_blank"><img src="Album/al4.jpg" width="90%" class="acercar"></a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/album/22BzOOZKYZ2jYYKLpOlnET" target="_blank"><img src="Album/al5.jpg" width="90%" class="acercar"></a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/album/0OeuSeP8wp8n8OuTqYb61C" target="_blank"><img src="Album/al6.jpg" width="90%" class="acercar"></a>
			</div>
		</div>	
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/album/3PRoXYsngSwjEQWR5PsHWR" target="_blank"><img src="Album/al7.jpg" width="90%" class="acercar"></a>	
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/album/3j7nicLAWXM0Fb08q9XGyf" target="_blank"><img src="Album/al8.jpg" width="90%" class="acercar"></a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/album/5PORx6PL7CdOywSJuGVrnc" target="_blank"><img src="Album/al9.jpg" width="90%" class="acercar"></a>	
			</div>
		</div>						
	</div>
	</section> 

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
					<img src="imagenes/r001.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="imagenes/r005.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="imagenes/r003.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="imagenes/r004.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="imagenes/r006.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="imagenes/r007.gif" width="30%">					
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