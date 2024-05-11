<?php

function Validacion() {

 global $error;

	$var_bool=TRUE;

	// Validar el nombre, apellido, dni, edad, email, clave

	if(!is_numeric($_POST['numeroInventario']) || !preg_match("/^([0-9])*$/", $_POST['numeroInventario'])){
		$error.="Error  ";
		$var_bool=FALSE;
	}
	

	if(!is_string($_POST['donante']) || !preg_match("/^[a-zA-Z ]+$/", $_POST['donante'])){
		$error.="Error donante";
		$var_bool=FALSE;
	}
	

	return $var_bool;
}

?>