<!DOCTYPE html>
<html>
<head>
	<!--JavaScrip y jquery-->
	<meta charset="utf-8">
	<script type="text/javascript" src="../../CSS/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../JS/header.js" ></script>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="../../CSS/estilog.css">

	<link rel="stylesheet" type="text/css" href="css/stilos.css">	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
	<title></title>
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
    function listar80($conn){
        $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus ,code from bdadministracion.cancionestop c WHERE c.codegen = '200'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

	$conn=conectar();
	?>

<!---191919--->

<section class="contenedor-portada-main" style="background-color: #000000">



<div class="contenedor-portada" >
	

<div  class="fnegro" >
 <img class="imagen imgA1"src="imagenes/80s22.jpg">
</div>



<img class="imagen2 imgB1" src="imagenes/port.gif" >  



</div>


</section>

<section class="fondonegro">
<br>
<br>
</section>


<section>
	
<div class="contenedor-menus fnegro" >
	

	<div class="contenedor-indice">
		
<div class="div1" >
	<fieldset class="neon " style="width: 60%;height: 80%;
	text-align: center;margin: 0px;
	background-image:url(imagenes/font2.jpg);
	background-size: 100% 103%;">
									<br>
							<section id="indice" class="glowpink"><h3>ÍNDICE</h3></section>
							<ul class="glowpink">
								<li class="glowpink">DESCRIPCIÓN</li>
								<br>
								<li class="glowpink" href="#M1">TOP ARTISTAS MAS CONOCIDOS</li>
								<br>
									<ul>

										<li><a class="glowpink" href="#M1">MICHAEL JACKSON</a></li>
										<li><a class="glowpink" href="#M2">A HA</a></li>
										<li><a class="glowpink" href="#M3">GUNS N' ROSES</a></li>
										<li><a class="glowpink" href="#M4">RICK ASTLEY</a></li>
										<li><a class="glowpink" href="#M5">MADONNA</a></li>
										<li><a class="glowpink" href="#M6">WIND & FIRE</a></li>
									</ul>
								<br>
								<li><a class="glowpink" href="#M7">CANCIONES RECOMENDADAS</a></li>
							</ul>

	</fieldset>
</div>

<div style="width: 100%;height: 30%">
	<img src="imagenes/gif.gif" width="50%" height="80%" align="middle" style="left: 12.5%;">
</div>




	</div>



	<div class="contenedor-descripcion">

<div style="width: 100%;height: 20%;align-items: center;
	justify-content: center;
	display: flex;">
	<div style="width: 20%;height: 100%">
		
	</div>

	<div style="width: 60%;height: 100%" class="oscurecer1">
		<h3 style="text-align: center;margin: 0px;color: white;font-size: 28px;font-family: 'Noto Sans JP', sans-serif; "  class="nomsong">   CLASICOS DE LOS 80'S</h3>

	</div>

	<div style="width: 20%;height: 100%">
		
	</div>
</div>

<div style="width: 100%;height: 80%">
	<fieldset class="neon field2">

		<p style="font-size: 16px ;" class="art-text3" >Son muchas las personas que aseguran que los años 80 fue el comienzo de la música electrónica.Este estilo musical se inspiró en la Disco Music que se escuchaba a mediados de los años 70. El término “disco” se convirtió en una moda en los 80, haciendo que géneros como el euro ritmo, dance music y el post disco incrementaran su popularidad.El new wave también fue otro de los géneros que se hizo popular y a su vez muy rentable durante la época.Los años 80 catapultaron la carrera de varios artistas. Tanto fue el éxito de los mismos, que hoy en día todavía se mantiene.<br><br>

		Al comienzo de los años 80 se empezaron a dar los primeros pasos de la subcultura urbana gótica en el underground de Inglaterra. Fue cuando se inició lo que hoy se conoce como post-punk. The Cure fue una de las bandas pioneras dentro de este género.<br><br>

		Artistas consagrados en los 80
		Los años 80 catapultaron la carrera de varios artistas. Tanto fue el éxito de los mismos, que hoy en día todavía se mantiene.<br>

		En muchos eventos optan por el alquiler de equipos de sonido para llevar esta música hasta los oídos de muchos. Michael Jackson y Madonna se convirtieron en los reyes del pop en los 80.
		Son muchos los géneros musicales que dieron vida a los éxitos de artistas como Tina Turner, Lionel Richie, Bryan Adams y muchos otros más.<br>

		</fieldset>
</div>






				
	</div>

</div>
</section>


<section class="fondonegro">
<br>
<br>
</section>


<section id="grupos"></section>


<?php 
	foreach (listar80($conn) as $a => $value) {
	?>


<section class="fnegro" id="<?=$value[6]?>">
	<div class="art-main">
			<div class="border">
			

			</div>



				<div class="artistas-contenedor centrado margen" style="background:url(imagenes/border.jpg);background-size: 100% 103%" >



					
						<div class="box1">
								
							<div class="nomsong">
								
						<h3  >
						<?=$value[0]?>
						</h3>
							</div>	


								<div style="height: 80% ;position: relative;">
									<img src="<?='../../Administracion/topcanciones/imagenes/'.$value[1]?>" width="87.5%" height="87.5%" align="middle" style="position: absolute;
						  
						          left: 12.5%;">
								</div>


						</div>

					<div class="box2">


						<h4 class="art-text2" >
							<?=$value[2]?>
						</h4>


					</div>


					<div class="box3">
							<div class="nomsong" style="padding-top: 20px ">
								
						<h3  >
						<?=$value[3]?>
						</h3>
							</div>	
							

							<div class="imgalbum">
									<img src="<?='../../Administracion/topcanciones/imagenes/'.$value[4]?>" width="50%" height="80%" align="middle" style="left: 12.5%;">
							</div>

								<div class="album">
										<audio src="<?='../../Administracion/topcanciones/audio/'.$value[5]?>" controls="" class="mp3"> </audio>
								</div>
						</div>



			</div>

						<div class="border">
								
					         


						</div>
	


	</div>
</section>	

    <?php
	        }
	    ?>

<section class="fondonegro">
<br>
<br>
<section id="recomendaciones"></section>
<br>
</section>




<section style="width: 100%;height: 800px" id="M7">
	<div class="recd1"><h3 class="rectxt1" id="tamaño2">   RECOMENDACIONES MUSICALES </h3>
	</div>

<div style="width: 100%;height: 90%;" class="oscurecer">
		
	<div style="width: 100%;height: 5%">
		
	</div>


	<div style="width: 100%; height: 90%;display: flex;">
		<div style="width: 50%;height:100%">
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">BEAT IT-MICHAEL JACKSON</font>
						</div>

						<div class="elementos">
							<audio src="mp3/r1.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">I WANT TO BREAK FREE-QUEEN</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r2.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">ANOTHER ONE BITES THE DUST-QUEEN</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r3.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">BOHEMIAN RHAPSODY-QUEEN</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r4.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">EVERY BREATH YOU TAKE-THE POLICE</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r5.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">LIVIN ON A PRAYER-BON JOVI</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r6.mp3" controls=""> </audio>
						</div>

				</div>																
		</div>


			<div style="width: 50%;height:100%">
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">I WANT TO KNOW WHAT LOVE IS-FOREIGNER</font>
						</div>

						<div class="elementos">
							<audio src="mp3/r7.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">PATIENCE-GUNS N ROSES</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r8.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">LAMBADA-KAOMA</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r9.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">CARELESS WHISPER-GEORGE MICHAEL</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r10.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">RADIO GA GA-QUEEN</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r11.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo1.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">LIKE A PRAYER-MADONNA</font>
						</div>
						
						<div class="elementos">
							<audio src="mp3/r12.mp3" controls=""> </audio>
						</div>

				</div>																
		</div>




	</div>
					

	<div style="width: 100%;height: 5%">
				
	</div>
</div>

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
				<a href="https://open.spotify.com/playlist/37i9dQZF1DXc3KygMa1OE7?si=2d9302adb6c442dc" target="_blank">
					<img src="grupos/p0001.jpg" width="90%" class="acercar">
				</a>				
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DX4UtSsGT1Sbe?si=bd8d2c8e48554085" target="_blank">
					<img src="grupos/p0002.jpg" width="90%"class="acercar">
				</a>			
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/133eNiZWy94NzovzViU4MP?si=469fa4936aad4112" target="_blank">
					<img src="grupos/p0003.jpg" width="90%" class="acercar">
				</a>				
			</div>
		</div>
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DX4WELsJtFZjZ?si=d8b96746d5f0460e" target="_blank">
					<img src="grupos/p0004.jpg" width="90%" class="acercar">
				</a>	
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DX1spT6G94GFC?si=0a98370f4a214d72" target="_blank">
					<img src="grupos/p0005.jpg" width="90%" class="acercar">
				</a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/2VQAAivMQwLDn4JbE8XErs?si=ee50c169ba564656" target="_blank">
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
				<a href="https://open.spotify.com/playlist/37i9dQZF1DX6l1fwN15uV5?si=94f089ce52d0482f" target="_blank">
					<img src="grupos/p0008.jpg" width="90%" class="acercar">
				</a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/19PgP2QSGPcm6Ve8VhbtpG?si=cf57cd39077f4aca" target="_blank">
					<img src="grupos/p0009.jpg" width="90%" class="acercar">
				</a>
			</div>
		</div>						
	</div>
	</section> 

<br><br><br>
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