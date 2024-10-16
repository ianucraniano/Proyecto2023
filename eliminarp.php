<?php 
require_once "conexion.php";

$id = $_POST["idPiezas"];
$iddon = $_POST["idDonante"];

// Verificar si los datos son válidos antes de proceder
if (!empty($id) && !empty($iddon)) {
    // Eliminar de la tabla piezas
    $sql1 = "DELETE FROM piezas WHERE idPiezas = $id";
    if (!mysqli_query($conex, $sql1)) {
        die("Error eliminando pieza: " . mysqli_error($conex));
    }

    // Eliminar de la tabla donante
    $sql2 = "DELETE FROM donante WHERE idDonante = $iddon";
    if (!mysqli_query($conex, $sql2)) {
        die("Error eliminando donante: " . mysqli_error($conex));
    }

    // Redirigir después de eliminar
    header("Location: menupiezas.php");
} else {
    die("Error: ID de piezas o donante no válidos.");
}
?>
