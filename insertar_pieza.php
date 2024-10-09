<?php

session_start();
// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 //Funcion de Validacion de Datos

 require_once "funcionv.php";




$error = "";

//var_dump($_POST);

//echo $_POST['numeroInventario']." ".$_POST['especie']." ".$_POST['estadoConservacion']." ".$_POST['fechaIngreso']." ".$_POST['nombre']." ".$_POST['clasificacion']." ".$_POST['cantidadpiezas'];


if(!empty(trim($_POST['numeroInventario'])) && !empty(trim($_POST['especie'])) && 
!empty(trim($_POST['estadoConservacion'])) && !empty(($_POST['fechaIngreso'])) && !empty(trim($_POST['nombre'])) && !empty(trim($_POST['clasificacion'])) && !empty($_POST['cantidadpiezas'])){
    

	

	if (Validacion()){
		$num = $_POST['numeroInventario'];
		$especie = $_POST['especie'];
		$estado = $_POST['estadoConservacion'];
        $fecha=$_POST['fechaIngreso'];
		$donante=$_POST['nombre'];
        $clasificacion=$_POST['clasificacion'];
		$obs=$_POST['observacion'];
		$cantidadp=$_POST['cantidadpiezas'];
           
        
		$sqldon="INSERT INTO donante(nombreyape) VALUES('$donante')";

        $result=mysqli_query($conex,$sql);

		$ultimoid=mysqli_insert_id($conex);
		$idusu=$_SESSION['idusuario'];
       

        //die($sql);

        $sql="INSERT INTO piezas(numeroInventario,especie,estadoConservacion,fechaIngreso,Cantidad_piezas,clasificacion,observacion,Donante_idDonante1,usuarios_idusuarios) VALUES('$num','$especie','$estado','$fecha',$cantidadp,'$clasificacion','$obs',$ultimoid,$idusu)";
		

		//die($sql);
		$result=mysqli_query($conex,$sql);
		
    

		if ($result) {
			header("Location: menupiezas.php?mensaje=pieza agregada!&tipo=success");
			exit;
		} else {
			// Verifica si el error es un DNI duplicado
			if (mysqli_errno($conex) == 1062) {
				$error = "Error, nro duplicado";
			} else {
				$error = "Error en la inserción de datos";
			}
			
			// Cierra la declaración después de manejar el error
			
			
			// Redirige con el mensaje de error
			header("Location: menupiezas.php?mensaje=Error al agregar pieza&tipo=error" . urlencode($error));
			exit;
		}
		
		// Aquí se cierra la declaración si la ejecución fue exitosa
		
		
		} else {
			$error = "";
			header("Location: menupiezas.php?mensaje=Error en la validación de datos&tipo=error" . urlencode($error));
			exit;
		}
		
		} else {
			$error = "";
			header("Location: form_agregarp.php?mensaje=Todos los campos son obligatorios&tipo=error" . urlencode($error));
			exit;
		}
		

	

?>