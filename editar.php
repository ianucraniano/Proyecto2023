<?php
session_start();

// Conexion a la BD
require_once "conexion.php";

//Funcion de Validacion de Datos

require_once "funcionesval.php";


$error = "";

 // Recibe el id oculto desde el form_editar

 $id=$_POST['idusuarios'];

 // Crea una variable de sesión llamada ids para guardar el id del socio recibido 

 $_SESSION['ids']=$id;


// echo $_SESSION['ids'].$_POST['idusuarios'];
// die();

//echo $_POST['nombre'].$_POST['apellido'].$_POST['dni'].$_POST['email'];

 if(!empty(trim($_POST['nombre'])) && !empty(trim($_POST['apellido'])) && !empty(trim($_POST['dni'])) && !empty(trim($_POST['email']))){

	if (ValidacionDatos()){
         
           
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];   
    $email=$_POST['email'];


   
  
       $sql="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',dni='$dni',email='$email' WHERE idusuarios= $id"; 

       $result=mysqli_query($conex,$sql);

      //die($sql);
    
      if ($result) {
        header("Location: listadoadm.php?mensaje=Usuario editado correctamente&tipo=success");
        exit();
    } else {
        header("Location: listadoadm.php?mensaje=Error al editar el usuario&tipo=error");
        exit();
    }
  
      
    }
      
}


?>