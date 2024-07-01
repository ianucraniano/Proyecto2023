<?php

// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 //Funcion de Validacion de Datos

 require_once "funcionesval.php";





$error = "";

if(!empty(trim($_POST['nombre'])) && !empty(trim($_POST['apellido'])) && 
   !empty(trim($_POST['dni']))  && !empty(trim($_POST['email'])) && !empty(trim($_POST['clave'])) && !empty(trim($_POST['fecha_alta'])) && !empty(trim($_POST['telefono']))&& !empty(trim($_POST['tipo_usuario']))){
	

	if (ValidacionDatos()){
         
		$nombre = preg_replace('/\s+/',' ',$_POST['nombre']);
		$apellido = preg_replace('/\s+/',' ',$_POST['apellido']);
		$dni = $_POST['dni'];
		$email = $_POST['email'];
		$pass = password_hash($_POST['clave'],PASSWORD_DEFAULT);
		//Campos agregados
		$telefono=$_POST['telefono'];
        $fecha=$_POST['fecha_alta'];
		$tipo=$_POST['tipo_usuario'];
            
        $sql="INSERT INTO usuarios(nombre,apellido,telefono,dni,fecha_alta,email,clave,tipo_usuario) VALUES('$nombre','$apellido','$telefono','$dni','$fecha','$email','$pass','$tipo')";

        $result=mysqli_query($conex,$sql);

        //die($sql);

        
			//codigo 1062 duplicado
     
		// if(mysqli_errno($conex) == 1062) {
		// 	header("Location: listadoadm.php?mensaje=Error DNI duplicado&tipo=error");
		// 	exit();
		// } else {
		// 	 header("Location: listadoadm.php?mensaje=Usuario agregado &tipo=succes");
		// 	exit();
		// }
		
     
     }
	
	 if ($result){
			
           
		header("Location: listadoadm.php?mensaje=Usuario agregado&tipo=success");
        exit();

	}else{ 
		header("Location: listadoadm.php?mensaje=Error al insertar usuario &tipo=error");
			exit();
	}
	
}

  

	

?>
