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
     
			
     
			if ($result) {
				header("Location: listadoadm.php?mensaje=Usuario agregado!&tipo=success");
				exit;
			} else {
				// Verifica si el error es un DNI duplicado
				if (mysqli_errno($conex) == 1062) {
					$error = "Error, DNI duplicado";
				} else {
					$error = "Error en la inserción de datos";
				}
				
				// Cierra la declaración después de manejar el error
				
				
				// Redirige con el mensaje de error
				header("Location: form_agregar.php?mensaje=Error al agregar usuario&tipo=error" . urlencode($error));
				exit;
			}
			
			// Aquí se cierra la declaración si la ejecución fue exitosa
			
			
			} else {
				$error = "";
				header("Location: form_agregar.php?mensaje=Error en la validación de datos&tipo=error" . urlencode($error));
				exit;
			}
			
			} else {
				$error = "";
				header("Location: form_agregar.php?mensaje=Todos los campos son obligatorios&tipo=error" . urlencode($error));
				exit;
			}
			

		

?>
