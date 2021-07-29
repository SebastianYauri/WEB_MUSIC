
<?php

    function conectar() {
        $conn= mysqli_connect ("localhost","root", "","bdadministracion");
        return $conn;

    }


    function eliminartopc($code, $conn){
        $sql="delete from cancionestop where code='$code'";   
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }
       
       
     function agregartopc($code,$nomart,$fotart,$descrip,$nomcan,$fotdisco, $mus, $decoracionT, $fandom, $codegen, $conn){
        $sql="insert into bdadministracion.cancionestop values('$code','$nomart','$fotart','$descrip','$nomcan','$fotdisco','$mus','$decoracionT','$codegen','$fandom')";   
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }   

    function actualizartodotopc($code,$nomart,$fotart,$descrip,$nomcan,$fotdisco, $mus, $decoracionT, $codegen, $fandom, $conn){
        $sql="update bdadministracion.cancionestop set nomart='$nomart', fotart='$fotart', descrip='$descrip', nomcan='$nomcan', fotdisco='$fotdisco', mus='$mus', decoracionT='$decoracionT',fandom='$fandom',codegen='$codegen' where code='$code'";   
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }


     

    $conn=conectar();

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
