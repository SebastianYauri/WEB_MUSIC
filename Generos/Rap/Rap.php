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

	<link rel="stylesheet" type="text/css" href="css/estilorap.css">
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
    function listarRap($conn){
       $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus ,code from bdadministracion.cancionestop c WHERE c.codegen = '400'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

	$conn=conectar();
	?>
	<section class="contenedor-portada-main" style="background-color: #000000">

		<div class="contenedor-portada" >			
		<div  class="fnegro" >
		 <img class="imagen imgA1"src="imagenes/rap2.jpg">
		</div>
		<img class="imagen2 imgB1" src="imagenes/eminen.gif" >  
		</div>

	</section>

	<section>
		<div class="contenedor-menus fnegro" >
			
			<div class="contenedor-indice">
				
				<div class="div1">
					<fieldset class="neon " style="width: 60%;height: 80%;
					text-align: center;margin: 0px;
					background-image:url(imagenes/ladrillo.jpg);
					background-size: 100% 103%;">
													<br>
											<section id="indice" class="glowpink"><h3>ÍNDICE</h3></section>
											<ul class="glowpink">
												<li class="glowpink">DESCRIPCIÓN</li>
												<br>
												<li class="glowpink" href="#M1">TOP ARTISTAS MAS CONOCIDOS</li>
												<br>
													<ul>

														<li><a class="glowpink" href="#M1">2Pac</a></li>
														<li><a class="glowpink" href="#M2">The Notorious B.I.G</a></li>
														<li><a class="glowpink" href="#M3">Rakim</a></li>
														<li><a class="glowpink" href="#M4">Eminem</a></li>
														<li><a class="glowpink" href="#M5">Nas</a></li>
														<li><a class="glowpink" href="#M6">Jay-Z</a></li>
													</ul>
												<br>
												<li><a class="glowpink" href="#M7">Más canciones</a></li>
											</ul>

					</fieldset>
				</div>

		</div>



			<div class="contenedor-descripcion">

			    <div style="width: 100%;height: 20%;align-items: center;
				justify-content: center;
				display: flex;">
				<div style="width: 20%;height: 100%"></div>

				<div style="width: 60%;height: 100%" class="oscurecer1">
					<h3 style="text-align: center;margin: 0px;color: white;font-size: 28px;font-family: 'Arial', sans-serif; "  class="nomsong">     RAP </h3></div>

				<div style="width: 20%;height: 100%"></div>
		    </div>
				<div style="width: 100%;height: 80%">
					<fieldset class="neon field2" style="background-image:url(imagenes/ladrillo.jpg);
					background-size: 100% 103%;"">

						<p style="font-size: 16px ;" class="art-text3" >El rap surge como un estilo musical en los barrios negros y latinos de Nueva York en la década de 1970, como la expresión desde el sonido y las melodías de la cultura hip hop, que agrupa corrientes estéticas como el graffiti, el breakdance o el scratch. Desde allí se lanzó al mundo, tomando diferentes peculiaridades regionales en cada país o continente.Musicalmente hablando, mientras el hip hop propiamente dicho nace desde la música religiosa de origen negro y se funde en gran manera con el funky el disco, el rap rompe con esta ligazón y se acerca más al breakdance, tomando al mismo tiempo un lenguaje propio.
						<div style="width: 100%;height: 30%">
				<img src="imagenes/gifchico.gif" width="50%" height="80%" align="middle" style="left: 12.5%;">
			</div></p>

						</fieldset>
				</div>						
			</div>

		</div>
    </section>
    
    <?php 
				foreach (listarRap($conn) as $a => $value) {
				?>


    <section class="fnegro" id="<?=$value[6]?>">
	    <div class="art-main">
			<div class="border">
			

			</div>



				<div class="artistas-contenedor centrado margen" style="background:url(imagenes/fondo.jpg);background-size: 100% 103%" >



					
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
</section>

<section style="width: 100%;height: 800px" id="M7">
	<div class="recd1"><h3 class="rectxt1">   RECOMENDACIONES </h3>
	</div>

<div style="width: 100%;height: 90%;" class="oscurecer">
		
	<div style="width: 100%;height: 5%">
		
	</div>


	<div style="width: 100%; height: 90%;display: flex;">
		<div style="width: 50%;height:100%">
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">Dear Mama-2Pac</font>
						</div>

						<div class="elementos">
							<audio src="mas canciones/2Pac_-_Dear_Mama_Qoret.com.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">But A G Thang-Dr. Dre ft. Snoop Dogg</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/Dr. Dre ft. Snoop Dogg - Nuthinu0027 But A G Thang (Official Video) [Explicit] (MP3BUENO.SITE).mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">Lose Yourself-Eminem</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/Eminem - Lose Yourself (Lyrics) (MP3TECA.WS).mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">It Was A Good Day-Ice Cube</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/Ice_Cube_-_It_Was_A_Good_Day_Qoret.com.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">Big Pimpinu- JAY Z ft.UGK</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/JAY-Z - Big Pimpinu0027 ft. UGK (GRATIS-MP3S.NET).mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">N.Y. State of Mind-Nas</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/Nas-N.Y.-State-of-Mind-Audio.mp3" controls=""> </audio>
						</div>

				</div>																
		</div>


			<div style="width: 50%;height:100%">
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">P.I.M.P.-50 Cent Ft.Snoop Dogg </font>
						</div>

						<div class="elementos">
							<audio src="mas canciones/P.I.M.P. (Snoop Dogg Remix).mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">Es Epico-Canserbero</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/Canserbero – ES EPICO.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">Por Amor al Odio-Rafael Lechowski</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/RAFAEL LECHOWSKI - POR AMOR AL ODIO [Flowklorikos] (NUEVOEXITO.ORG).mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">Check Yo Self-IceCube</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/IceCube - Check Yo Self (320 kbps).mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2"> Still D.R.E-Dr. Dre feat. Snoop Dogg</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/Dr. Dre feat. Snoop Dogg - Still Dre.mp3" controls=""> </audio>
						</div>

				</div>
				<div style="width: 100%;height: 16.6%;display: flex;">
						<div class="elementos">
							<img src="imagenes/spo2.png" width="50" height="50">
						</div>

						<div class="elementos" style="font-size: 20px">
							<font class="art-text2">Hit Em Up Qoret-2pac ft Outlawz</font>
						</div>
						
						<div class="elementos">
							<audio src="mas canciones/2pac_ft_Outlawz_-_Hit_Em_Up_Qoret.com.mp3" controls=""> </audio>
						</div>

				</div>																
		</div>




	</div>
					

	<div style="width: 100%;height: 5%">
				
	</div>




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
				<a c href="https://open.spotify.com/playlist/37i9dQZF1DX9sQDbOMReFI" target="_blank"><img src="Album/1.jpg"  width="90%" class="acercar"></a>			
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DXcd2Vmhfon1w" target="_blank"><img src="Album/2.jpg"  width="90%" class="acercar"></a>			
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DX186v583rmzp" target="_blank"><img src="Album/3.jpg"  width="90%" class="acercar"></a>					
			</div>
		</div>
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DX6PKX5dyBKeq" target="_blank"><img src="Album/4.jpg"  width="90%" class="acercar"></a>	
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/0mSf78pnq5xVU6kOtdv6dx" target="_blank"><img src="Album/5.jpg"  width="90%" class="acercar"></a>	
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DX5jNEiuvPyWr" target="_blank"><img src="Album/6.jpg"  width="90%" class="acercar"></a>
			</div>
		</div>	
		<br>
		<br>
		<div class="imagenes_">
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DWTggY0yqBxES" target="_blank"><img src="Album/7.jpg"  width="90%" class="acercar"></a>		
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/37i9dQZF1DX0XUsuxWHRQd" target="_blank"><img src="Album/8.jpg"  width="90%" class="acercar"></a>
			</div>
			<div class="imagenes_img">
				<a href="https://open.spotify.com/playlist/4j1lzgUik3Zq8kxs8ALIGh" target="_blank"><img src="Album/9.jpg"  width="90%" class="acercar"></a>	
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