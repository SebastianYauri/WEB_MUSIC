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
    <link rel="stylesheet" type="text/css" href="../css/miestilo.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<?php
		include '../../Include/cabecera.php';
	?>
<br>
<br>
	
<section>

	<?php
            include_once '../controlador/conexion.php';
           // $obj=new Conectar();
            $conn=conectar();
           
        ?>
        <center>
            <h1>Relación de noticias</h1>
            <a href="Agregar_noticia.php">Nueva Noticia</a><br><br>
            <form method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th>Codigo</th>
                        <th>Titulo</th>
                        <th>Informacion</th> 
                        <th>Tipo</th>
                        <th>Imagen</th>                  
                        <th>Eliminar</th>
                        <th>Modificar</th>
                    </tr>
                    <?php     
                        foreach(listarNoticia($conn) as $a=>$datos){
                            echo "<tr>
                                  <td>$datos[0]</td>
                                  <td>$datos[2]</td>
                                  <td>$datos[1]</td>
                                  <td>$datos[4]</td>";   
                    ?>

                            <td><img src="<?=''.$datos[3]?>" width="100" height="100"></td>
                            <td><a href="proceso_Noticia.php?accion=eliminar&cod=<?=$datos[0]?>">Eliminar</a></td>   
                            <td><a href="modificar_Noticia.php?cod=<?=$datos[0]?>">Modificar</a></td></tr>
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