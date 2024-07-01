<?php

require_once "conexion.php";

$id=$_POST["idusuarios"];


$sql="DELETE from usuarios where idusuarios=$id";

//die($sql);

$result=mysqli_query($conex,$sql);
if($result){
    header("Location: listadoadm.php?mensaje=Usuario eliminado correctamente&tipo=success");
    exit();
}else{
    header("Location: listadoadm.php?mensaje=Error al eliminar &tipo=error");
    exit();
}

header("Location:listadoadm.php");

?>