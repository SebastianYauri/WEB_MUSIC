<?php

	session_start();

	include_once'../controlador/conexion.php';
	$conn=conectar();

	$usuario=$_REQUEST['usuario_verificar'];
	$contrasena=$_REQUEST['contrasena_verificar'];

	$canU=buscarUsuario($conn,$usuario,$contrasena);
	$canA=buscarAdministradores($conn,$usuario,$contrasena);
	////si no es un usuario lo busca en la tabla de administradores y si es administrador entonces entra la parte de administradores
	if($canU>0){
		$_SESSION['usuario'] = $usuario;
		$_SESSION['logeoIN']= true;
		$_REQUEST['canU']=$canU;
		header("location:../../Menu/Menu.php");
	}
	else{
		if ($canA>0) {
			$_SESSION['usuario'] = $usuario;
			$_SESSION['logeoIN'] = true;
			$_SESSION['esAdmin'] = true;
			$_REQUEST['canA']=$canA;
			header("location:../Menu.php");
			
		}else{		
			echo "<script>alert('usuario o contrasena incorrecto'); window.history.back();</script>";
		}
	}

?>