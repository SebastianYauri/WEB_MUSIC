
<?php

         include_once '../controlador/conexion.php';
    $conn = conectar();


    $accion = $_REQUEST['accion'];

    if ($accion === "agregar") {
            $fotart=$_FILES['fotart']['name'];
            $rutaart=$_FILES['fotart']['tmp_name'];
            $destinofotart=$fotart;
            copy($rutaart, $destinofotart);

            $fotdisco=$_FILES['fotdisco']['name'];
            $rutadisco=$_FILES['fotdisco']['tmp_name'];
            $destinodisco=$fotdisco;
            copy($rutadisco, $destinodisco);

            $mus=$_FILES['mus']['name'];
            $rutamus=$_FILES['mus']['tmp_name'];
            $destinomus=$mus;
            copy($rutamus, $destinomus);
  
        agregartopc($_REQUEST['code'],$_REQUEST['nomart'],$destinofotart,
            $_REQUEST['descrip'], $_REQUEST['nomcan'],$destinodisco ,
            $destinomus,$_REQUEST['decoracionT'],$_REQUEST['codegen'],$_REQUEST['fandom'], $conn); 
    }



   else if ($accion === "eliminar") {
        eliminartopc($_REQUEST['code'], $conn);
    }
    else if ($accion === "modificar") {
       
            $fotart=$_FILES['fotart']['name'];
            $rutaart=$_FILES['fotart']['tmp_name'];
            $desfotart=$fotart;
            copy($rutaart,'imagenes/'.$desfotart);

            $fotdisco=$_FILES['fotdisco']['name'];
            $rutadisco=$_FILES['fotdisco']['tmp_name'];
            $desdisco=$fotdisco;
            copy($rutadisco,'imagenes/'.$desdisco);

            $mus=$_FILES['mus']['name'];
            $rutamus=$_FILES['mus']['tmp_name'];
            $desmus=$mus;
            copy($rutamus,'audio/'.$desmus);


        	actualizartodotopc($_REQUEST['code'],$_REQUEST['nomart'],$desfotart,$_REQUEST['descrip'], $_REQUEST['nomcan'],$desdisco ,$desmus,$_REQUEST['decoracionT'],$_REQUEST['codegen'],$_REQUEST['fandom'], $conn); 
        }
   
    header("location:listar_topc.php");
?>
