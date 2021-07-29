<?php

    include_once '../controlador/conexion.php';
    $conn = conectar();

    $accion = $_REQUEST['accion'];
    if ($accion === "agregar") {

       agregarAdmin($_REQUEST['usuario'],$_REQUEST['contrasena'], $conn);
    
    }
    
    else if ($accion === "eliminar") {

        eliminarAdmin($_REQUEST['usuario'], $conn);

    }
    else if ($accion === "modificar") {

        	actualizarContrasena($_REQUEST['usuario'],$_REQUEST['contrasena'], $conn); 

        } 

    

    header("location:listarAdmin.php");

?>
