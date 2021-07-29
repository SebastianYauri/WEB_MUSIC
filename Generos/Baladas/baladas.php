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

	<link rel="stylesheet" type="text/css" href="css/estilosB.css">
   <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
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
    function listarbaladas($conn){
        $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus ,code ,decoracionT from bdadministracion.cancionestop c WHERE c.codegen = '100'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

    function baladareco($conn){
        $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus ,code ,decoracionT from bdadministracion.cancionestop c WHERE c.codegen = '100'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }


	$conn=conectar();
	?>

<section class="contenedor">	
  <div class="contenedor banner">
 	
 	<img src="FOTOS/bannerB1.jpg" width="100%">
 </div>
</section>

   			<div class="indiceimagen" >
   			<img src="FOTOS/baile.gif" width="100%" >
   			</div>
 
<section >
   
<br>
<br>
   	<div class="tablaindice">
	<div class="margeninfo" >
        	<section id="indice"><strong>ÍNDICE</strong></section> 
        		<ul>
        			<li> <a class="listaindice" href="#texto1">Historia  </a></li>
        			<li><a class="listaindice" href="#grupos">Artistas  </a></li>
	            <ul>
	              <li><a class="listaindice" href="#ta">Armando Manzanero </a></li>
	              <li><a class="listaindice" href="#tb">Jose Jose </a></li>
	              <li><a class="listaindice" href="#tc">Leo Dan </a></li>
	              <li><a class="listaindice" href="#td">Ana Gabriel </a></li>
	              <li><a class="listaindice" href="#te">Ricardo Montaner </a></li>
	              <li><a class="listaindice" href="#tf">Guillermo Dàvila </a></li>
	            </ul>
          			</li>
        			<li> <a class="listaindice" href="#recomendaciones">Recomendaciones</a> <br></li>  
        			      		
        	</li>
        </ul> 	
     </div>
 
     <div class="margeninfo">
     	<strong> ¿Qué es?</strong>
     		El género de las baladas románticas es uno de los sellos característicos de la música  en Latinoamérica. Sin tener un país específico como punto de origen, la balada romántica nació en los años 60 de la mano de los grandes exponentes como Armando Manzanero, José José, Angélica María,Raphael, entre otros muchos nombres aún populares. 
         	Este género musical ha encontrado influencias predominantes del bolero, pero existen distinciones notorias.        	
     	
     </div>
     </div>
<br>
<br>
</section>

<section id="FOTOS">
		<div class="gif">
			<div class="filaGif">
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				
			
				
			</div>			
		</div>
	</section>

<section id="grupos" >
			<div class="tablagenero">
				<div class="margentitulo">
					<div class="itemtablatitulo">
						<h2><strong class="tamaño2">CANTANTE</strong></h2>
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
	foreach (listarbaladas($conn) as $a => $value) {
	?>
    <div class="<?='tabla-cantante-'.$value[7]?>">
    	<div class="margeninfoC">

         	<div class="item-tabla-cantante">
    		<br>
    		<section id="<?=$value[6]?>"><strong><?=$value[0]?></strong></section> 
    	    <br>
         <img src="<?='../../Administracion/topcanciones/imagenes/'.$value[1]?>" alt="imgmanzanero" width="85%">   		    		
    	   </div>

    	<div class="item-tabla-cantante"><br><br>
    		<p><?=$value[2]?></p> 		
    	</div>

    	<div class="item-tabla-cantante">
    		<strong> <?=$value[3]?></strong>
    		<br> <br>
        	<img src="<?='../../Administracion/topcanciones/imagenes/'.$value[4]?>" alt="FotoMusica1" width="200" height="200"> <br><br>
           <audio src="<?='../../Administracion/topcanciones/audio/'.$value[5]?>" controls="" ></audio>
            
    	</div>
    
    </div>
    </div> 
  
   <?php
	        }
	    ?>
</div>
</section>
<br>
<br>
<section id="recomendaciones"></section>
<section id="FOTOS">
		<div class="gif">
			<div class="filaGif">
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
				<div class="itemGif">
					<img src="FOTOS/gifBanner.gif" width="80%">
				</div>
					
			</div>			
		</div>
	</section>
 <section id="fondito">
<section >
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
 
   <br><br>
    
       <div class="BALADAS">

       	    <div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">
						<strong> UN BESO Y UNA FLOR - Nino Bravo </strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/UnBeso.mp3" controls=""> </audio>
					</div>
					</div>
				</div>

				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">	
						<strong> QUIEN COMO TU - Ana Gabriel</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/quienComo.mp3" controls="" ></audio>
					</div>
					</div>	
				</div>		
						
	    </div>
	    <br>
	    <br>


	    <div class="BALADAS">

       	    <div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">
						<strong>SI NO TE HUBIERAS IDO - Marco Antonio Solis </strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/siNoT.mp3" controls="" ></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">	
						<strong>  UN MILLON COMO TU - Lasso ft. Cami </strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/unMillon.mp3" controls="" ></audio>
					</div>
					</div>	
				</div>		
						
	    </div>

	    <br>
	    <br>
	    

	    <div class="BALADAS">

       	    <div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">
						<strong>COMO TE VA MI AMOR - Pandora  </strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/comoTeVa.mp3" controls="" ></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">	
						<strong> SE ME FUE - Myriam Hernandez </strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/seMefue.mp3" controls="" ></audio>
					</div>
					</div>	
				</div>		
						
	    </div>

	     <br>
	    <br>
	    

	    <div class="BALADAS">

       	    <div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">
						<strong>LOCOS DE AMOR - YORDANO </strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/locosD.mp3" controls=""></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">	
						<strong> TODAVÍA - MATISSE</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/matisse.mp3" controls=""  ></audio>
					</div>
					</div>	
				</div>		
						
	    </div>
	    <br>
	    <br>
	    <div class="BALADAS">

       	    <div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">
						<strong>TU NO TE IMAGINAS - Gian Marco </strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/locosD.mp3" controls=""></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">	
						<strong> TENGO UN AMOR - Pablo Herrera</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/matisse.mp3" controls=""  ></audio>
					</div>
					</div>	
				</div>		
						
	    </div>
	    <br>
	    <br> 
	     <div class="BALADAS">

       	    <div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">
						<strong>A PURO DOLOR - Son By Four </strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/locosD.mp3" controls=""></audio>
					</div>
					</div>
				</div>
				<div class="itemcanciones1">
					<div class="canciones2">
					<div class="itemcanciones2">
						<img src="FOTOS/FReco.png" alt="FReco" width="30" height="30">
					</div>
					<div class="itemcanciones2">	
						<strong> TE VI VENIR - Sin Bandera</strong>
					</div>
					<div class="itemcanciones2">					
						<audio src="SONG/matisse.mp3" controls=""  ></audio>
					</div>
					</div>	
				</div>		
						
	    </div>
	        <br>
			<br>
			<br>
		</section>  
	</section>
   <br>
   <br>
   <section id="playlist">
	<div class="centrar">
		<strong class="tamaño">¿Tiénes ganas de escuchar algo?</strong>
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a c href="https://open.spotify.com/playlist/0LKTpDsAjh8ZW0gkx7s32R" target="_blank"><img src="PLAY/album1.jpeg" width="90%"class="acercar"></a>				
			</div>
			<div class="imagenes_img">
				<a href="hhttps://open.spotify.com/playlist/7wJwkIr236APvf0m0iJaWZ" target="_blank"><img src="PLAY/album2.jpeg" width="90%"class="acercar"></a>				
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/1Ro5jfVlX0eikm2lNnE8lR" target="_blank"><img src="PLAY/album3.jpeg" width="90%"class="acercar"></a>			
			</div>
		</div>
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/5iJYG35IjHd1uWr2pP55XY" target="_blank"><img src="PLAY/album4.jpeg" width="90%"class="acercar"></a>	
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/6ZoVPnufjeM08hxTknaw4p" target="_blank"><img src="PLAY/album5.jpeg" width="90%"class="acercar"></a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/4hynLcXz4AxBrwwodbkSfT" target="_blank"><img src="PLAY/album6.jpeg" width="90%"class="acercar"></a>
			</div>
		</div>	
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/0EURtldaGz5YbfI0CCNeMf" target="_blank"><img src="PLAY/album7.jpeg" width="90%"class="acercar"></a>	
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/4pNoDumfxi3pytN3IMy6QI" target="_blank"><img src="PLAY/album8.jpeg" width="90%"class="acercar"></a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/66C6OzCJVIgUS4yvBGXLQH" target="_blank"><img src="PLAY/album9.jpeg" width="90%"class="acercar"></a>
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
					<img src="FOTOS/r001.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="FOTOS/r005.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="FOTOS/r003.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="FOTOS/r004.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="FOTOS/r006.gif" width="30%">					
				</div>
				<div class="itemreaccion">
					<img src="FOTOS/r007.gif" width="30%">					
				</div>
			</div>
			
		</div>
	</section>

<br><br><br>


<br><br><br>

	<?php
		include '../../Include/footer.php';
	?>
</body>
</html>