<?php
session_start();
require_once "conexion.php"; // Asegúrate de incluir la conexión a la BD

// Verificar si el usuario está logueado
if (!isset($_SESSION['idusuario'])) {
    echo json_encode(["success" => false, "message" => "Debes iniciar sesión."]);
    exit();
}

$idUsuario = $_SESSION['idusuario'];
$clave_actual = $_POST['clave_actual'];
$nueva_clave = $_POST['nueva_clave'];
$confirmar_clave = $_POST['confirmar_clave'];

// Validar que la nueva contraseña coincide
if ($nueva_clave !== $confirmar_clave) {
    echo json_encode(["success" => false, "message" => "Las contraseñas no coinciden."]);
    exit();
}

// Consultar la contraseña actual
$sql = "SELECT clave FROM usuarios WHERE idusuarios = ?";
$stmt = $conex->prepare($sql);
$stmt->bind_param("i", $idUsuario);
$stmt->execute();
$stmt->bind_result($clave_hash);
$stmt->fetch();
$stmt->close();

// Verificar la contraseña actual
if (!password_verify($clave_actual, $clave_hash)) {
    header("Location: informacion_user.php?error=Contraseña actual incorrecta");
    exit();
}

// Encriptar la nueva contraseña
$nueva_clave_hash = password_hash($nueva_clave, PASSWORD_BCRYPT);

// Actualizar la contraseña en la base de datos
$sql_update = "UPDATE usuarios SET clave = ? WHERE idusuarios = ?";
$stmt_update = $conex->prepare($sql_update);
$stmt_update->bind_param("si", $nueva_clave_hash, $idUsuario);

echo json_encode(["success" => true, "message" => "Contraseña actualizada correctamente."]);
$stmt_update->close();
$conex->close();

?>
