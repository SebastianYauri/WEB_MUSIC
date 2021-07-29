<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title></title>
	<!--JavaScrip y jquery-->
    <script type="text/javascript" src="../../CSS/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="../../JS/header.js" ></script>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../../CSS/estilog.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">
</head>
<body >
	<?php
		include '../../Include/cabecera.php';
	?>
<br>
<br>
	
<section>
    <?php 
    include '../controlador/conexion.php';
    $conn=conectar();
    ?>

      <center>
        <br>
        <br>
            <h1>Lista Top Canciones</h1>
        <br>  <br> 
            <a class="boton_personalizado botones" href="Agregar_topc.php">Nuevo </a>
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
    </section>

	<br><br>

<?php
		include '../../Include/footer_Pag.php';
	?>
</body>
</html>