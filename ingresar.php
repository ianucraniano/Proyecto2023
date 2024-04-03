<?php
session_start();
// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 //Funcion de Validacion de Datos




$error = "";

//echo $_POST['dni']. " ".$_POST['clave']." ".$_POST['perfil'];

//die();

if(!empty(trim($_POST['dni']))&& !empty(trim($_POST['clave'])) && !empty(trim($_POST['perfil']))){

  
	        
	
		$dni =  $_POST['dni'];
        $clave = $_POST['clave'];
        $perfil = $_POST['perfil'];

     $sql="SELECT dni,nombre,apellido,clave,tipo_usuario FROM usuario WHERE (dni='$dni') and (clave='$clave') and (tipo_usuario='$perfil')";

     $result=mysqli_query($conex,$sql);

      //die($sql);

      if (mysqli_num_rows($result)==1){
       
        $fila=mysqli_fetch_array($result);
        if($fila['tipo_usuario']=="cliente"){
          
        $_SESSION['dnicli']=$dni;
        
        $_SESSION['nombrecli']=$fila['nombre'];
        $_SESSION['apellidocli']=$fila['apellido'];
        $_SESSION['tipousu']=$fila['tipo_usuario'];


     header("Location:pagina.php");

      } elseif($fila[tipo_usuario]=="administrador"){
        $_SESSION['dniadmin']=$dni;
        $_SESSION['nombreadmin']=$fila['nombre'];
        $_SESSION['apellidoadmin']=$fila['apellido'];
        $_SESSION['tipousu']=$fila['tipo_usuario'];

        header("Location:paginaadmin.php");

      }

    }else{
        $error.="Datos incorrectos";
        header("Location:form_ingresar.php?mensaje=".$error);

    }
  
  
}else{

  $error.="Faltan datos";
  header("Location:form_ingresar.php?mensaje=".$error);

}


  

?>