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

    <link rel="stylesheet" type="text/css" href="css/Fuentes.css">

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
    function listarelectro($conn){
       $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus ,code from bdadministracion.cancionestop c WHERE c.codegen = '500'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

    $conn=conectar();
    ?>
    
    <section>
            <img src="IMAGENES/elecB.jpg" width="100%" height="500">
    </section>
    <section>
        <div class="tablaindice">
            <div class="margeninfo">
                <div class="indiceimagen">
                <img src="IMAGENES/giDJ.gif" width="100%" height="400">
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
                    <li><a class="a-indice" href="#electrónica">Definición Electrónica</a></li>
                    <li><a class="a-indice" href="#artistas">Artistas populares del 2021</a></li>
                        <ul>
                            <li><a class="a-indice" href="#idmoorekismet">MOORE KISMET</a></li>
                            <li><a class="a-indice" href="#idfirelite">FIRELITE</a></li>
                            <li><a class="a-indice" href="#idvintageculture">VINTAGE CULTURE</a></li>
                            <li><a class="a-indice" href="#idlastlings">LASTLINGS</a></li>
                            <li><a class="a-indice" href="#idspace92">SPACE 92</a></li>
                            <li><a class="a-indice" href="#idretrovision">RETROVISION</a></li>
                        </ul>
                    <li><a class="a-indice" href="#Recomendaciones">Canciones recomendadas</a></li>
                </ul>
                <ul>
                    <img src="IMAGENES/GIF 2.gif" width="60%">
                </ul>
            </div>
            <div id="indice2">
                <h2><strong>Definición Electrónica</strong></h2>
                La música electrónica es aquel tipo de música que emplea instrumentos musicales electrónicos y tecnología musical electrónica para su producción e interpretación. En general, se puede distinguir entre el sonido producido mediante la utilización de medios electromecánicos, de aquel producido mediante tecnología electrónica, que también pueden ser mezclados. Algunos ejemplos de dispositivos que producen sonido electro-mecánicamente son el telarmonio, el órgano Hammond y la guitarra eléctrica. La producción de sonidos puramente electrónicos pueden lograrse mediante aparatos como el theremin, el sintetizador de sonido o el ordenador. <br><br>
                La música electrónica se asoció originalmente y de manera exclusiva a una forma de música culta occidental, pero desde finales del año 1960, la disponibilidad de tecnología musical a precios accesibles propició que la música producida por medios electrónicos se hiciera cada vez más popular. En la actualidad, la música electrónica presenta una gran variedad técnica y compositiva, abarcando desde formas de música culta experimental hasta formas populares como la música electrónica de baile o shuffle dance. <br><br> </p>
                <strong>A continuación se mostraran algunos cantantes de música electrónica actuales</strong>
            </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section>    
    <section id="artistas">
        <div class="emote">
            <div class="emotefila">
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
            </div>          
        </div>
    </section>
    <section >
            <div class="tablagenero">
                <div class="margentitulo">
                    <div class="itemtablatitulo">
                        <h2><strong class="tamaño2">Nombre del Artista</strong></h2>
                    </div>
                    <div class="itemtablatitulo">
                        <h2><strong class="tamaño2">Información</strong></h2>
                    </div>
                    <div class="itemtablatitulo">
                        <h2><strong class="tamaño2">Canción más relevante</strong></h2>
                    </div>
                </div>
            </div>
            <br>
            <br>

<?php 
    foreach (listarelectro($conn) as $a => $value) {
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
                        <br>
                        <p><?=$value[2]?> 
                        <br> 
                        <br>
                        </p>
                    </div>
                    <div class="itemtablainfo">
                        <br>
                        <strong><?=$value[3]?></strong>
                        <br>
                        <br>
                        <audio src="<?='../../Administracion/topcanciones/audio/'.$value[5]?>" controls="controls"></audio> 
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
            <br>
            <br>
            <br>
            <section id="Recomendaciones"></section>
            <br>
    </section>
    
    <section >
        <div class="emote">
            <div class="emotefila">
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
                </div>
                <div class="itememote">
                    <img src="IMAGENES/GIF.gif" width="80%">
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
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">
                        <strong>MEDUZA  -  PARADISE</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/MEDUZA - Paradise ft. Dermot Kennedy.mp3" controls="controls"></audio>
                    </div>
                    </div>
                </div>
                <div class="itemcanciones1">
                    <div class="canciones2">
                    <div class="itemcanciones2">
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">    
                        <strong>DAVID GUETTA - BIG</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/RITA ORA,  DAVID GUETTA, IMANBEK  BIG FT. GUNNA [OFFICIAL VIDEO].mp3" controls="controls"></audio>
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
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">
                        <strong>MARTIN GARRIX  -  PRESSURE</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/Martin Garrix feat. Tove Lo - Pressure (Official Video).mp3" controls="controls"></audio>
                    </div>
                    </div>
                </div>
                <div class="itemcanciones1">
                    <div class="canciones2">
                    <div class="itemcanciones2">
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">    
                        <strong>KRISTIN VELVET  -  ROCKIN</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/Kristin Velvet - Rockin.mp3" controls="controls"></audio>
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
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">
                        <strong>DIGITALISM  -  OFFLINE</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/Offline.mp3" controls="controls"></audio>
                    </div>
                    </div>
                </div>
                <div class="itemcanciones1">
                    <div class="canciones2">
                    <div class="itemcanciones2">
                        <img  src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">
                        <strong>ROBIN SCHULZ  -  ALL WE GOT</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/Robin Schulz feat. KIDDO - All We Got (Official Video).mp3" controls="controls"></audio>
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
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">
                        <strong>PURPLE DISCO MACHINE  -  FIREWORKS</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/Fireworks (Ft. Moss Kena  The Knocks) - Official Video.mp3" controls="controls"></audio>
                    </div>
                    </div>
                </div>
                <div class="itemcanciones1">
                    <div class="canciones2">
                    <div class="itemcanciones2">
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">    
                        <strong>TUNNELVISIONS  -  KING COBRA</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/King Cobra.mp3" controls="controls"></audio>
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
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">
                        <strong>LIKE MIKE  -  GET IN TROUBLE</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/Dimitri Vegas  Like Mike vs Vini Vici - Get In Trouble (So What) (Lyric Video).mp3" controls="controls"></audio>
                    </div>
                    </div>
                </div>
                <div class="itemcanciones1">
                    <div class="canciones2">
                    <div class="itemcanciones2">
                        <img src="IMAGENES/imgspoc.png" width="40" height="40"  >
                    </div>
                    <div class="itemcanciones2">    
                        <strong>TRAVIS SCOTT -  GOOSEBUMPS</strong>
                    </div>
                    <div class="itemcanciones2">                    
                        <audio src="SONG/Travis Scott - goosebumps ft. Kendrick Lamar.mp3" controls="controls"></audio>
                    </div>
                    </div>  
                </div>          
            </div>
            <br>
            <br>         
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
                <a c href="https://open.spotify.com/playlist/09tdi9JkYgC7DP0XYBl4Az?si=be7298161b1f43a5" target="_blank"><img src="IMAGENES/e01.jfif" width="90%" class="acercar"></a>                
            </div>
            <div class="imagenes_img">
                <a href="https://open.spotify.com/playlist/317O0e8iWJLClLGDKtieRe?si=1257ffafe9d2474c" target="_blank"><img src="IMAGENES/e02.jfif" width="90%" class="acercar"></a>             
            </div>
            <div class="imagenes_img">
                <a href="https://open.spotify.com/playlist/2aKzLWVqNpiiQJ90kyfs6M?si=e2410a49f62a42f4" target="_blank"><img src="IMAGENES/e03.jfif" width="90%" class="acercar"></a>          
            </div>
        </div>
        <br>
        <br>
        <div class="imagenes_">
            <div class="imagenes_img">
                <a href="https://open.spotify.com/playlist/66DlDYdxXqCmUDXRI7QJyT?si=7b3d0d6a7f1248e0" target="_blank"><img src="IMAGENES/e04.jfif"width="90%" class="acercar"></a>
            </div>
            <div class="imagenes_img">
                <a href="https://open.spotify.com/playlist/6pq2VitqBhlXSh6DubchtC?si=a8f39b32cbc149ef" target="_blank"><img src="IMAGENES/e05.jfif" width="90%" class="acercar"></a>
            </div>
            <div class="imagenes_img">
                <a href="https://open.spotify.com/playlist/7kyvBmlc1uSqsTL0EuNLrx?si=ee8650e4e4ce4474" target="_blank"><img src="IMAGENES/e06.jfif" width="90%" class="acercar"></a>
            </div>
        </div>  
        <br>
        <br>
        <div class="imagenes_">
            <div class="imagenes_img">
                <a href="https://open.spotify.com/playlist/1hzFfwM27ZBhciazyGhAIu?si=2c58abdb4c974dba" target="_blank"><img src="IMAGENES/e07.jfif"width="90%" class="acercar"></a> 
            </div>
            <div class="imagenes_img">
                <a href="https://open.spotify.com/playlist/6Twu8gfKVjKriGP4g9Qzvf?si=5abec78cdb744f6d" target="_blank"><img src="IMAGENES/e08.jfif" width="90%" class="acercar"></a>
            </div>
            <div class="imagenes_img">
                <a href="https://open.spotify.com/playlist/37i9dQZF1DX6QbU3i33zqm?si=df59651fd9a34527" target="_blank"><img src="IMAGENES/e09.jfif" width="90%" class="acercar"></a>
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
                    <img src="IMAGENES/r001.gif" width="30%">                 
                </div>
                <div class="itemreaccion">
                    <img src="IMAGENES/r005.gif" width="30%">                 
                </div>
                <div class="itemreaccion">
                    <img src="IMAGENES/r003.gif" width="30%">                 
                </div>
                <div class="itemreaccion">
                    <img src="IMAGENES/r004.gif" width="30%">                 
                </div>
                <div class="itemreaccion">
                    <img src="IMAGENES/r006.gif" width="30%">                 
                </div>
                <div class="itemreaccion">
                    <img src="IMAGENES/r007.gif" width="30%">                 
                </div>
            </div>
            
        </div>
    </section>
    <br><br><br>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
        include '../../Include/footer.php';
    ?>
</body>
</html>