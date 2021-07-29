<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['usuario'])){
			$miusuario=$_SESSION['usuario'];
		}
	?>
	<header >	
		<div class="centrar">
		<div class="logo"><a class="none" href="javascript:alertaWin()">MUSHARE</a></div>
		<nav>
			<a href="#generos">Géneros</a>
			<?php
			if(isset($_SESSION['logeoIN']) && $_SESSION['logeoIN']=true){

					if (isset($_SESSION['esAdmin']) && $_SESSION['esAdmin']=true) {

						echo"<a href='../../Administracion/Menu.php'>Admin</a>";
						echo"<a href='../../Administracion/Llamadas/proceso_deslogeo.php'> ".$miusuario ."</a>";

					}	else{
					
									

					echo"<a href='../../Administracion/Llamadas/proceso_deslogeo.php'> ".$miusuario ."</a>";
						}

			}

			else{
					echo"<a href='../../Menu/signIn.php'>Ingresar</a>";
					echo"<a href='../../Menu/register.php'>Registrarse</a>";
				 
				}

			?>

		</nav>
		</div>

	</header>
</body>
</html>