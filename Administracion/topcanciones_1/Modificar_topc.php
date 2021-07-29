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
        <section >
        <div class="centrar">
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
    	</div>
    </section>

	<br><br>

<?php
		include '../../Include/footer_Pag.php';
	?>
</body>
</html>