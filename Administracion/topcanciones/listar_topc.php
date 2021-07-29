<!DOCTYPE html>
<html>
    <head>

    <title></title>
    <!--JavaScrip y jquery-->
    <script type="text/javascript" src="../../CSS/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="../../JS/header.js" ></script>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../../CSS/estilog.css">
    

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">
    </head>
    <body>
       
    <header >
    
        <div class="centrar">
        <div class="logo"><a class="none" href="javascript:alertaWin()">MUSHARE</a></div>
        <nav>
            <a href="#generos">Géneros</a>
            <a href="../index/signIn.php">Ingresar</a>
            <a href="../index/register.php">Registrarse</a>
            <a href="../JS_EJERCICIOS/ejercicios.html">JavaScript</a>
            <a href="../Menu.php">Admin</a>
        </nav>
        </div>

</header>

<section style="centrar">


    <?php
            include_once '../controlador/conexion.php';
           // $obj=new Conectar();
            $conn=conectar();
    ?>
      <center></center>
            <h1>Lista Top Canciones</h1>
        <br>  <br> 
            <a class="boton_personalizado botones" href="agregar_topc.php">Nuevo producto</a>
         <a class="boton_personalizado botones" href="../menu.php">Menu Admin</a> <br><br>
            <form action="Proceso_topc.php" method="post" enctype="multipart/form-data">
                <table border="1">
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre Artista</th>
                        <th>Foto_artista</th> 
                        <th>Descripcion</th>                  
                        <th>Nombre de Cancion</th>
                        <th>Foto_disco</th>
                        <th>mp3</th>
                        <th>Tipo de decoracion</th>
                        <th>Genero</th>
                        <th>Fandom</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    </tr>
                    <?php     
                          foreach (listartopc($conn) as $a => $datos) {

                            echo '<tr>';
                             //columna codigo
                            echo '<td>'.$datos[0].'</td>';

                            //columna artista
                            echo '<td>'.$datos[1].'</td>';

                            //columna cancionimg
                     ?>
                            <td><img src="<?='imagenes/'.$datos[2]?>"  width="100" height="100"></td>


                    <?php 

                             //columna descrip
                            echo '<td>'.$datos[3].'</td>';

                             //columna cancion
                            echo '<td>'.$datos[4].'</td>';


                           
                             
                     //columna cancionimg
                    ?>






                            <td><img src="<?='imagenes/'.$datos[5]?>"  width="100" height="100">

                            </td>


                           <td>  <audio src="<?='audio/'.$datos[6]?>" controls="" class="mp3"> </audio>
                            </td>
                          

                    <?php 

                             //columna descrip
                            echo '<td>'.$datos[7].'</td>';

                             //columna cancion
                            echo '<td>'.$datos[9].'</td>';

                             //columna cancion
                            echo '<td>'.$datos[8].'</td>';
                           
                             
                     //columna cancionimg
                    ?>

                    <td><a href="Proceso_topc.php?accion=eliminar&code=<?=$datos[0]?>">Eliminar</a>
                    </td>   
                    <td><a href="modificar_topc.php?code=<?=$datos[0]?>">Modificar</a></td>
                </tr>

                    <?php     
                        }  
                    ?>
                </table>
            </form>
        </center>

        <br><br>
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
                        <a class="generos_footer" href="../Electronica/Electronica.php" class="footer-link">Electrónica
                        </a>
                    </li>
                    <li>
                        <a class="generos_footer"href="../BALADAS/baladas.php" >Baladas
                        </a>
                    </li>
                    <li>
                        <a class="generos_footer"href="../80/index.php" >
                        Clasicos 80's
                        </a>
                    </li>
                    <li>
                        <a  class="generos_footer"href="../Rock/Rock.php">
                        Rock
                        </a>
                    </li>
                    <li>
                        <a class="generos_footer"href="../kpop/kpop.php" >
                        ㅤKpopㅤ
                        </a>
                    </li>
                    <li>
                        <a class="generos_footer"href="../rap/rapavance2.php" >
                        ㅤRapㅤ
                        </a>
                    </li>
                </ul>
        </div>
    </footer>
    </body>
   </section>
</html>
