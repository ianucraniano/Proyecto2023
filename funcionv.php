<?php

require_once "conexion.php";

function Validacion() {
    global $error;

    $var_bool = true;

    // Validar que 'cantidadpiezas' sea numérico y solo contenga números
    if (!is_numeric($_POST['cantidadpiezas']) || !preg_match("/^([0-9])*$/", $_POST['cantidadpiezas'])) {
        $error .= "Error: La cantidad de piezas debe ser un número válido. ";
        $var_bool = false;
    }

   
    
    return $var_bool;
}
?>
