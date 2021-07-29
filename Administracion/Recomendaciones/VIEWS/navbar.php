<style>
  

.nav{


background-color: #303030;


}





</style>
<head>
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="../../css/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<html>
<head>
  <meta charset="utf-8">

  <title></title>
  <!--JavaScrip y jquery-->
  <script type="text/javascript" src="../../../../CSS/jquery-3.6.0.min.js"></script>

  <script type="text/javascript" src="../../../../JS/header.js" ></script>

  <!--CSS-->
  <link rel="stylesheet" type="text/css" href="../../../../CSS/estilog.css">
  <link rel="stylesheet" type="text/css" href="../../../css/miestilo.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;700;900&display=swap" rel="stylesheet">
</head>
<html>

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
    <div class="logo"><a class="none" href="../../../../Menu/Menu.php">MUSHARE</a></div>
    <nav>
      <a href="#generos">Géneros</a>
      <?php
      if(isset($_SESSION['logeoIN']) && $_SESSION['logeoIN']=true){

          if (isset($_SESSION['esAdmin']) && $_SESSION['esAdmin']=true) {

            echo"<a href='../../../../Administracion/Menu.php'>Admin</a>";
            echo"<a href='../../../../Administracion/Llamadas/proceso_deslogeo.php'> ".$miusuario ."</a>";

          } else{          
                  

          echo"<a href='../../Administracion/Llamadas/proceso_deslogeo.php'> ".$miusuario ."</a>";
            }

      }

      else{
          echo"<a href='../../../../Menu/signIn.php'>Ingresar</a>";
          echo"<a href='../../../../Menu/register.php'>Registrarse</a>";
         
        }

      ?>

  </nav>
  </div>
</header>


</body>
</html>