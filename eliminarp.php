<?php

require_once "conexion.php";

$id=$_POST["idPiezas"];
$iddon=$_POST["idDonante"];
/* En la Base de Datos en Vista de Relaciones de la Tabla ficha, aplicar 
el atributo ON Cascade Delete para la relacion entre ficha y socios */




$sql1="DELETE from piezas
WHERE idPiezas = $id";

//die($sql2);

mysqli_query($conex,$sql1);

$sql2=" DELETE FROM donante
WHERE idDonante = $iddon";

mysqli_query($conex,$sql2);



header("Location:menupiezas.php");

?>