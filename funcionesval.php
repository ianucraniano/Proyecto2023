<?php

function ValidacionDatos() {

 global $error;

	$var_bool=TRUE;

	// Validar el nombre, apellido, dni, edad, email, clave

	
	
	if (!preg_match("/^[0-9]{8}$/", $_POST['dni']) || strlen($_POST['dni']) != 8) {
		$error.= "Error DNI ";
		$var_bool = FALSE;
	}
	
	
	if(!is_string($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$error.="Error Email ";
		$var_bool=FALSE;
	}
	
	
	
	

	return $var_bool;
}

?>