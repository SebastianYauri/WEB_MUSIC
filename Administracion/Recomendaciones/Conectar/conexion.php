<?php 

/**
* 
*/
class Conexion
{
    var $conexion;  
    var $error;

    function Conectar()
    {
      try
      {
    $this->conexion = new PDO('mysql:host=localhost;dbname=bdadministracion','root','');
        
      } catch (PDOException $e)
      {
         $this->error = $e->getMessage();
      }  
        return $this->conexion;
    }
 
}


 

?>