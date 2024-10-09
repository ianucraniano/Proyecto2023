<?php


require_once "conexion.php";


function Validacion() {

 global $error;

	$var_bool=TRUE;

	// Validar el nombre, apellido, dni, edad, email, clave

 if(!is_numeric($_POST['cantidadpiezas']) || !preg_match("/^([0-9])*$/", $_POST['cantidadpiezas'])){
	 	$error.="Error  ";
	 	$var_bool=FALSE;
	 }


	
	

	}

?>