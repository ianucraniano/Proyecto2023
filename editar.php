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

 if(!empty(trim($_POST['nombre'])) && !empty(trim($_POST['apellido'])) && 
 !empty(trim($_POST['telefono'])) && !empty(trim($_POST['dni'])) && !empty(trim($_POST['fecha'])))&& !empty(trim($_POST['email']))&& !empty(trim($_POST['clave']))&& !empty(trim($_POST['tipo_usuario'])){

	if (ValidacionDatos()){
         
           
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $dni=$_POST['dni'];
    $fecha=$_POST['fecha_alta'];
    $email=$_POST['email'];
    $clave=$_POST['clave'];
    $tipousu=$_POST['tipo_usuario'];

   
  
       $sql="UPDATE usuarios SET nombre='$nombre',apellido='$apellido',telefono="$telefono",dni="$dni",fecha_alta='$fecha',email="$email",clave="$clave",' WHERE idusuarios=$id"; 

       $result=mysqli_query($conex,$sql);

     //die($sql);
        $fila=mysqli_fetch_array($result);

       if ($result){
          
         
          header("Location:form_editar.php?mnje=ok");

      }else{ 
          $error.="error en la insercion";
          header("Location::form_editar.php?msje=ok".$error);
      }
  
      
    }
      
}
        // Se arma la sentencia SQL de Actualización
         
      
        // Ejecuta la sentencia

       

        //die($sql);

        // Evalúa si se realizó la actualización de algun dato


?>