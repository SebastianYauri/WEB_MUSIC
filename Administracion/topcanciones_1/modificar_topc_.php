
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
    <link rel="stylesheet" type="text/css" href="../css/miestilo.css">
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
    <body>
        <?php    


         function conectar() {
        $conn= mysqli_connect ("localhost","root", "","bdadministracion");
        return $conn;

    }


        function buscartopc(string $code,$conn){
        $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus, decoracionT, codegen, fandom from cancionestop where code='$code'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        if(mysqli_num_rows($res)>0){
            $vec= mysqli_fetch_array($res);
        }
        return $vec; 
        }  


            $conn =conectar();
            $code=$_REQUEST['code']; 
            $a=buscartopc($code, $conn);
        ?>
        <section style="centrar">
        <center><a class="boton_personalizado botones" href="../menu.php">Menu Admin</a> <br><br>
            <h1>Registro de productos</h1> <br>         
            <form action="Proceso_topc.php" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="code" value="<?=$code?>">
                <label>Nombre Artista:</label>
                <input name="nomart" value="<?=$a[0]?>">
                <br><br>  

                <label>Foto_artista:</label>
                <input name="fotart" type="file">  
                <br><br>  

                <label>Descripcion:</label>
                <textarea name="descrip" rows="8" cols="100" value="<?=$a[2]?>">    <?=$a[2]?> </textarea>
                <br><br>     

                <label>Nombre de Cancion:</label>
                <input name="nomcan" value="<?=$a[3]?>">
                <br><br>  

                <label>Foto_disco:</label>
                <input type="file" name="fotdisco">
                <br><br>  

                <label>mp3</label>
                <input type="file" name="mus">
                <br><br>  

                <label>Tipo de decoracion:</label>
                <input name="decoracionT" value="<?=$a[6]?>">
                <br><br>  

                <label>Genero:</label>
                <input name="codegen" value="<?=$a[7]?>">
                <br>  <br>  

                <label>Fandom</label>
                <input name="fandom" value="<?=$a[8]?>">
                <br><br>  
                
                <input type="hidden" name="accion" value="modificar">
                <input type="submit" value="Actualizar">    
            </form>
        </center>
    
    </section>
    <footer id="generos">
        <div class="centrar">
        <div class="logo"><a class="none" href="javascript:alertaWin()">MUSHARE</a></div>
        <nav>
            <a href="javascript:abrirventana('https://www.facebook.com/Mushare-103731488541088')" ><img src="../imagenes/facebook.png" class="imagenes_red"></a>
            <a href="javascript:abrirventana('https://www.instagram.com/mushare_music/')"><img src="../imagenes/instagram.png" class="imagenes_red"></a>
            <a href="javascript:abrirventana('https://twitter.com/Mushare7')"><img src="../imagenes/twitter.png" class="imagenes_red"></a>
        </nav>
        </div>
        <div class="centrar" >
                <ul class="lista_generos ">
                    <li>
                        <a class="generos_footer" href="../Electronica/Electronica.html" class="footer-link">Electrónica
                        </a>
                    </li>
                    <li>
                        <a class="generos_footer"href="../BALADAS/baladas.html" >Baladas
                        </a>
                    </li>
                    <li>
                        <a class="generos_footer"href="../80/index.html" >
                        Clasicos 80's
                        </a>
                    </li>
                    <li>
                        <a  class="generos_footer"href="../Rock/Rock.html">
                        Rock
                        </a>
                    </li>
                    <li>
                        <a class="generos_footer"href="../kpop/kpop.html" >
                        ㅤKpopㅤ
                        </a>
                    </li>
                    <li>
                        <a class="generos_footer"href="../rap/rapavance2.html" >
                        ㅤRapㅤ
                        </a>
                    </li>
                </ul>
        </div>
    </footer>
    </body>
</html>
