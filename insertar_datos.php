<?php

// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 //Funcion de Validacion de Datos

 require_once "funcionesval.php";





$error = "";

if(!empty(trim($_POST['nombre'])) && !empty(trim($_POST['apellido'])) && 
   !empty(trim($_POST['dni'])) && !empty(trim($_POST['edad'])) && !empty(trim($_POST['email'])) && !empty(trim($_POST['pass'])) && !empty(trim($_POST['fecha'])) && !empty(trim($_POST['telefono']))){
	

	if (ValidacionDatos()){
         
		$nombre = preg_replace('/\s+/',' ',$_POST['nombre']);
		$apellido = preg_replace('/\s+/',' ',$_POST['apellido']);
		$dni = $_POST['dni'];
		$edad = strval($_POST['edad']);
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
		//Campos agregados
		$telefono=$_POST['telefono'];
        $fecha=$_POST['fecha'];
            
        $sql="INSERT INTO socios(nombre,apellido,dni,edad,fecha_nacimiento,telefono,email,clave) VALUES('$nombre','$apellido','$dni',$edad,'$fecha','$telefono','$email','$pass')";

        $result=mysqli_query($conex,$sql);

        //die($sql);

        if ($result){
			
			$ultimoid=mysqli_insert_id($conex);
			
			$sql="INSERT INTO ficha(habilitado,ids) VALUES (1,$ultimoid)";
			
			$result=mysqli_query($conex,$sql);
             header("Location:index.php?mensaje=ok");

        }else{ 
			//codigo 1062 duplicado
            if(mysqli_errno($conex)==1062){
				$error.="Error, DNI duplicado";
				header("location:index.php?mensaje=".$error);
			}else{
            $error.="Error en la Inserción de datos ";
            header("Location:index.php?mensaje=".$error);
        }
     
     }
	
	}else{
		header("Location:index.php?mensaje=".$error);
	}
}else{

	$error.="Faltan Datos ";
	header("Location:index.php?mensaje=".$error);
	
}

  

	

?>
