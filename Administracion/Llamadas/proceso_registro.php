<?php

    include_once '../controlador/conexion.php';
    $conn = conectar();

     $yes=agregarUsuario($_REQUEST['usuario'],$_REQUEST['contrasena'], $conn);
    if($yes==1){
    header("location:../../Menu/Menu.php"); 
      }else{
         echo "<script>alert('usuario existente'); window.history.back();</script>";
      }
?>