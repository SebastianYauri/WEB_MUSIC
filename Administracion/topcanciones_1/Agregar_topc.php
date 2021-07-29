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
    <div class="centrar">
     <br>  <br> 
     <?php 
    include '../controlador/conexion.php';
    $obj = new Conectar();
    ?>
        <h1>Registro de Canciones</h1>
<br><br>
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
            <input class="boton_personalizado botones" type="submit" value="Guardar">     
        </form>
       </div>
<br><br>
<br><br>

</section>

<br><br>
<br><br>

<?php
        include '../../Include/footer_Pag.php';
    ?>
</body>
</html>