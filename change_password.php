<?php
// Conexión a la base de datos
require 'conexion.php'; // Incluye el archivo con la conexión a la base de datos

session_start(); // Asume que manejas la sesión para obtener el usuario logueado

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $telefono = $_POST['userPhone'];
    $email = $_POST['userEmail'];
    $currentPassword = $_POST['current-password'];
    $newPassword = $_POST['new-password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validar que la nueva contraseña y la confirmación coincidan
    if ($newPassword !== $confirmPassword) {
        echo "Las nuevas contraseñas no coinciden.";
        exit();
    }

    // Asegurar que la nueva contraseña cumple con los requisitos mínimos (ejemplo: al menos 8 caracteres)
    if (strlen($newPassword) < 8) {
        echo "La nueva contraseña debe tener al menos 8 caracteres.";
        exit();
    }

    // Obtener el ID del usuario de la sesión (asumiendo que lo tienes almacenado)
    $userId = $_SESSION['idusuario']; // Asegúrate de que el ID esté en la sesión

    // Consulta para obtener la contraseña actual del usuario
    $query = "SELECT clave FROM usuarios WHERE idusuarios = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($storedPasswordHash);
    $stmt->fetch();

    // Verificar si la contraseña actual es correcta
    if (!password_verify($currentPassword, $storedPasswordHash)) {
        echo "La contraseña actual es incorrecta.";
        exit();
    }

    // Si la contraseña actual es correcta, procedemos a actualizar con la nueva
    $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

    // Actualización de la contraseña en la base de datos
    $updateQuery = "UPDATE usuarios SET clave = ? WHERE idusuarios = ?";
    $updateStmt = $db->prepare($updateQuery);
    $updateStmt->bind_param("si", $newPasswordHash, $userId);

    // Ejecutar la actualización y verificar el resultado
    if ($updateStmt->execute()) {
        echo "Contraseña actualizada exitosamente.";
    } else {
        echo "Error al actualizar la contraseña.";
    }
}
?>
