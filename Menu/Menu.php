<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<!--JavaScrip y jquery-->
	<script type="text/javascript" src="../CSS/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../JS/header.js" ></script>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="../CSS/estilog.css">

	<link rel="stylesheet" type="text/css" href="css/indexCss.css">
	<link rel="preconnect"  href="https://fonts.gstatc.com">
	<link rel="stylesheet"  href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap">
</head>
<body>

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
    function listarNoticia($conn){
        $sql="select tit, txt, fot from bdadministracion.noticia where tipo='1'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }
    function listarNoticia2($conn){
        $sql="select tit, txt, fot from bdadministracion.noticia where tipo='2'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

	$conn=conectar();
	?>

<!--INCLUIR LA CABECERA-->
	<?php
		include '../Include/cabecera_Pag.php';
	?>

<?php 
	foreach (listarNoticia($conn) as $a => $value) {
	?>

<section>
	<div class="centrar bajo">
	<div class="noticia_principal">
		<a  href="https://www.tomaticket.es/artista/acdcl">
			<br>
			<br>
			<img src="<?='../Administracion/Noticia/'.$value[2]?>" width="90%" >

			<br>
			<br>

			<h2 class="titulo_noticias"  ><?=$value[0]?></h2>
			<p class="texto_">
				<?=$value[1]?>
		    </p>
		</a>
		
	</div>	
</div>

</section>

    <?php
	        }
	    ?>

<?php 
	foreach (listarNoticia2($conn) as $a => $value) {
	?>
<section>
	<br><br>
	    <div class="centrar">
	<div class="noticia_secundaria">
		<div class="division_">
			<a href="kpopk.html">
				<br>
				<br>
			<img src="<?='../Administracion/Noticia/'.$value[2]?>" width="90%" >
				<br>
				<br>
		    </a>
		</div>
		<div class="division_">
				<br>
				<br>
			<a href="kpop.html"></a>
			<h2 class="titulo_noticias"><?=$value[0]?></h2>
			<p class="texto_">
				<?=$value[1]?>
		    </p>
		</div>
	</div>
	</div>
</section>
	<?php
	    }
	?>

<?php
		include '../Include/footer_menu.php';
	?>

</body>
</html>