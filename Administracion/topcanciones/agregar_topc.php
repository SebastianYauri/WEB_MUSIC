<!DOCTYPE html>
<html>
    <head>

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
            include_once '../controlador/conexion.php';
            $conn=conectar();
        ?>
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
<br>
<br><section>
     <br>  <br> 
            <a class="boton_personalizado botones" href="agregar_topc.php">Nuevo producto</a>
     <a class="boton_personalizado botones" href="../gestion.php">Gestionar</a>
        <center>
        <h1>Registro de Canciones</h1>
        <form action="Proceso_topc.php" method="post" enctype="multipart/form-data">
            <label>Codigo</label>
            <input type="texto" name="code" required>
<br><br>
            <label>Nombre Artista</label>
            <input type="text" name="nomart" required>
<br><br>
            <label>Foto_artista</label>
            <input type="file" name="fotart" required>

<br><br>
            <label>Descripcion</label>
            <input type="text" name="descrip" required>
<br><br>
            <label>Nombre de Cancion</label>
            <input type="text" name="nomcan" required>

<br><br>
            <label>Foto_disco</label>
            <input type="file" name="fotdisco" required>
<br><br>
            <label>mp3</label>
            <input type="file" name="mus" required>

<br><br>
            <label>Tipo de decoracion</label>
            <input type="text" name="decoracionT" required>
<br><br>
            <label>Genero</label>
            
            <select name="codegen">
            <?php
                foreach (listarGenero($conn) as $a => $datos) {

            ?>
                    
                    <option value="<?= $datos[0] ?>"><?= $datos[1] ?></option>
            <?php
                }
            ?>
            </select>
<br><br>
            <label>Fandom</label>
            <input type="text" name="fandom" required>
<br><br>
            <input type="hidden" name="accion" value="agregar">
            <input type="submit" value="Guardar">     
        </form>
        </center>

       
        </section>
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
</html>
