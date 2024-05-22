<?php

require_once "conexion.php";

$id=$_POST["idusuarios"];


$sql="DELETE from usuarios where idusuarios=$id";

//die($sql);

mysqli_query($conex,$sql);

header("Location:listadoadm.php");

?>