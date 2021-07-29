
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
   
    //busqueda en la tabla usuario//
    function buscarUsuario($conn,$usuario,$contrasena){
    
    $sql="select * from usuario where usuario='$usuario' and contrasena='$contrasena'";
    $res=mysqli_query($conn,$sql);
    $can=mysqli_num_rows($res);
    return $can ;

   }
   //busqueda en la tabla administradores//
    function buscarAdministradores($conn,$usuario,$contrasena){
    
    $sql="select * from administradores where usuario='$usuario' and contrasena='$contrasena'";
    $res=mysqli_query($conn,$sql);
    $can=mysqli_num_rows($res);
    return $can ;

   }
   function agregarUsuario($usuario,$contrasena,$conn){
            $canU=buscarUsuario($conn,$usuario,$contrasena);
        if($canU==0){
        $sql="insert into usuario values('NULL','$usuario','$contrasena')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $yes=1;
            }else{
                
            $yes=0;
            }
            return $yes;
    }

    //método para agreegar Admin
    function agregarAdmin($usuario,$contrasena,$conn){
        $sql="insert into administradores values('NULL','$usuario','$contrasena')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    //método para actualizar Amin
     function actualizarContrasena($usuario,$contrasena,$conn){ 
        $sql="update administradores set contrasena='$contrasena' where usuario='$usuario'";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    //método para buscar Admin
    function buscarAdmin($usuario,$conn){
        $sql="select usuario,contrasena from administradores where usuario='$usuario' ";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        if(mysqli_num_rows($res)>0){
            $vec= mysqli_fetch_array($res);
        }
        return $vec; 
    }

    //método para eliminar Admin
    function eliminarAdmin($usuario,$conn){
        $sql="delete from administradores where usuario='$usuario'";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }
    
    //método para listar Admin
    function listarAdmin($conn){
        $sql="select usuario, contrasena from administradores";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))
                $vec[]=$f;
        return $vec;
    }



    //método para agreegar registros
    function agregarNoticia($codn,$fot,$tit,$txt,$tipo,$conn){
        $sql="insert into noticia values('$codn','$fot','$tit','$txt','$tipo')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    //método para actualizar noticias
     function actualizarNoticia($codn,$fot,$tit,$txt,$tipo,$conn){ // tit=titulo noticia, txt= texxto de la noticia
        $sql="update noticia set fot='$fot',tit='$tit',txt='$txt',tipo='$tipo' where codn='$codn'";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    //método para buscar registro
    function buscarNoticia(string $cod,$conn){
        $sql="select txt, tit, fot,tipo from noticia where codn='$cod'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        if(mysqli_num_rows($res)>0){
            $vec= mysqli_fetch_array($res);
        }
        return $vec; 
    }

    //método para eliminar noticias
    function eliminarNoticia($codn,$conn){
        $sql="delete from noticia where codn='$codn'";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    //método para listar noticias
    function listarNoticia($conn){
        $sql="select codn, txt, tit, fot, tipo from noticia";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))
                $vec[]=$f;
        return $vec;
    }
    //INFORMACION//

    function eliminartopc($code, $conn){
        $sql="delete from cancionestop where code='$code'";   
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }
       
       
     function agregartopc($code,$nomart,$fotart,$descrip,$nomcan,$fotdisco, $mus, $decoracionT, $fandom, $codegen, $conn){
        $sql="insert into cancionestop values('$code','$nomart','$fotart','$descrip','$nomcan','$fotdisco','$mus','$decoracionT','$codegen','$fandom')";   
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }   

    function actualizartodotopc($code,$nomart,$fotart,$descrip,$nomcan,$fotdisco, $mus, $decoracionT, $codegen, $fandom, $conn){
        $sql="update cancionestop set nomart='$nomart', fotart='$fotart', descrip='$descrip', nomcan='$nomcan', fotdisco='$fotdisco', mus='$mus', decoracionT='$decoracionT',fandom='$fandom',codegen='$codegen' where code='$code'";   
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }
        function buscartopc(string $code,$conn){
        $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus, decoracionT, genero, fandom from cancionestop where code='$code'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        if(mysqli_num_rows($res)>0){
            $vec= mysqli_fetch_array($res);
        }
        return $vec; 
    }   
        function listarGenero($conn){
        $sql="select codegen, nomgen from generos";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }  

            function listartopc($conn){
        $sql="select * from cancionestop";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    } 
    function listarKpop($conn){
        $sql="select nomart, fotart, descrip, nomcan, fotdisco, mus from kpop";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))  
                $vec[]=$f;
        return $vec;
    }

    //RECOMENDACIONES

    //método para agreegar registros
    function agregarReco($nom_reco,$can_reco,$tipo_reco,$can_size,$gen_reco,$conn){
        $sql="insert into recomendacion values('NULL','$nom_reco','$can_reco','$tipo_reco','$can_size','$gen_reco')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    //método para actualizar noticias
     function actualizarReco($reco_cod, $nom_reco,$can_reco,$tipo_reco,$can_size,$gen_reco,$conn){ // tit=titulo noticia, txt= texxto de la noticia
        $sql="update recomendacion set nom_reco='$nom_reco',can_reco='$can_reco',tipo_reco='$tipo_reco',gen_reco='$gen_reco' where reco_cod='$reco_cod'";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    //método para buscar registro
    function buscarReco(string $cod,$conn){
        $sql="select nom_reco, can_reco, tipo_reco,can_size, gen_reco from recomendacion where reco_cod='$cod'";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        if(mysqli_num_rows($res)>0){
            $vec= mysqli_fetch_array($res);
        }
        return $vec; 
    }

    //método para eliminar noticias
    function eliminarReco($reco_cod,$conn){
        $sql="delete from recomendacion where reco_cod='$reco_cod'";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }

    //método para listar noticias
    function listarReco($conn){
        $sql="select nom_reco, can_reco, tipo_reco,can_size, gen_reco from recomendacion";
        $res= mysqli_query($conn, $sql);
        $vec=array();
        while($f= mysqli_fetch_array($res))
                $vec[]=$f;
        return $vec;
    }

?>
