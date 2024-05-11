<?php

require_once "conexion.php";

$id=$_POST["idPiezas"];

/* En la Base de Datos en Vista de Relaciones de la Tabla ficha, aplicar 
el atributo ON Cascade Delete para la relacion entre ficha y socios */

$sql="DELETE from piezas where idPiezas=$id";

//die($sql);

mysqli_query($conex,$sql);

header("Location:menupiezas.php");

?>