<?php
    include_once '../controlador/conexion.php';
    $conn = conectar();

    $accion = $_REQUEST['accion'];
    if ($accion === "agregar") {
    	$foto=$_FILES['fot']['name'];
        $ruta=$_FILES['fot']['tmp_name'];
        $producto="imagenes/".$foto;
        copy($ruta, $producto);
        agregarNoticia($_REQUEST['cod'],$producto, $_REQUEST['tit'], $_REQUEST['txt'],$_REQUEST['tipo'], $conn);
    }
    else if ($accion === "eliminar") {
        eliminarNoticia($_REQUEST['cod'], $conn);
    }
    else if ($accion === "modificar") {
        if (!empty($_FILES['fot']['tmp_name'])) {
           $foto=$_FILES['fot']['name'];
        	$ruta=$_FILES['fot']['tmp_name'];
        	$destino="imagenes/".$foto;
       		copy($ruta, $destino);
        	actualizarNoticia($_REQUEST['cod'],$destino,$_REQUEST['tit'], $_REQUEST['txt'],$_REQUEST['tipo'], $conn); 
        } else {
            actualizarNoticia($_REQUEST['cod'], $_REQUEST['tit'], $_REQUEST['txt'],$_REQUEST['tipo'], $conn);            
        }
    }
    header("location:Listar_noticia.php");
?>
