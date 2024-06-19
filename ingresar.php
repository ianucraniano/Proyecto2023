<?php
session_start();
// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 //Funcion de Validacion de Datos




$error = "";

//echo $_POST['dni']. " ".$_POST['clave']." ".$_POST['tipo_usuario'];
//die();


if(!empty(trim($_POST['dni']))&& !empty($_POST['clave']) && !empty($_POST['tipo_usuario']) ){

  //
	        
  $perfil = $_POST['tipo_usuario'];
		$dni =  $_POST['dni'];
        $clave = $_POST['clave'];
       

     $sql="SELECT idusuarios,nombre,apellido,dni,clave,tipo_usuario FROM usuarios WHERE (dni='$dni') and (tipo_usuario='$perfil')";

     $result=mysqli_query($conex,$sql);

      //die($sql);

 
      if (mysqli_num_rows($result)==1){
       
        $fila=mysqli_fetch_array($result);
       
        if(password_verify($clave, $fila['clave'])){    
          //die("entro");
        if($fila["tipo_usuario"]=="administrador"){

          $_SESSION['dniadmin']=$dni;

          $_SESSION['nombreadmin']=$fila['nombre'];
          $_SESSION['apellidoadmin']=$fila['apellido'];
          $_SESSION['tipoUsuario']=$fila['tipo_usuario'];
          $_SESSION['idusuario']=$fila['idusuarios'];
          //die($_SESSION['apellidoadmin']);
  
          header("Location:pagAdmin.php");
        

      } elseif($fila['tipo_usuario']=="gerente"){
          
        $_SESSION['dnigerente']=$dni;
        
        $_SESSION['nombregerente']=$fila['nombre'];
        $_SESSION['apellidogerente']=$fila['apellido'];
        $_SESSION['tipoUsuario']=$fila['tipo_usuario'];
        $_SESSION['idusuario']=$fila['idusuarios'];

        header("Location:pagGerente.php");
      }
    }

    }else{
        $error.="Datos incorrectos";
        header("Location:login.php?mensaje=".$error);

    }
      
  
}else{

  $error.="Faltan datos";
  header("Location:login.php?mensaje=".$error);

}


  

?>