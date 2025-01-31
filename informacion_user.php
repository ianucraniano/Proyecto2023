<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['dniadmin']) && !isset($_SESSION['dnigerente'])) {
    header("Location: index.php?denegado=1");
    exit();
}

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdmuseosancris";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si el ID del usuario está en la sesión
if (!isset($_SESSION['idusuario']) || !filter_var($_SESSION['idusuario'], FILTER_VALIDATE_INT)) {
    header("Location: error.php?error=ID_no_valido");
}

// Obtener el ID del usuario de la sesión
$idUsuario = $_SESSION['idusuario'];

// Consulta segura para obtener los datos del usuario
$sql = $conn->prepare("SELECT idusuarios, nombre, email, telefono, dni FROM usuarios WHERE idusuarios = ?");
$sql->bind_param("i", $idUsuario);
$sql->execute();
$result = $sql->get_result();

// Verificar si el usuario existe
if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
} else {
    header("Location: error.php?error=usuario_no_encontrado");
    exit();
}

// Cerrar conexión
$sql->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Datos Personales del Usuario</h2>
        <div class="card shadow-lg p-4">
            <h4 class="text-primary">Información del Usuario</h4>
            <ul class="list-group list-group-flush mt-3">
                <li class="list-group-item"><strong>Nombre:</strong> <?= htmlspecialchars($usuario['nombre']) ?></li>
                <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($usuario['email']) ?></li>
                <li class="list-group-item"><strong>Teléfono:</strong> <?= htmlspecialchars($usuario['telefono']) ?></li>
                <li class="list-group-item"><strong>DNI:</strong> <?= htmlspecialchars($usuario['dni']) ?></li>
            </ul>
            <?php if (isset($_SESSION['dniadmin'])) { ?>
                <div class="mt-3 text-center">
                    <a href="pagAdmin.php" class="btn btn-info">Volver</a>
                </div>
            <?php } elseif (isset($_SESSION['dnigerente'])) { ?>
                <div class="mt-3 text-center">
                    <a href="pagGerente.php" class="btn btn-info">Volver</a>
                </div>
            <?php } ?>

            <!-- Botón para abrir el modal de cambio de contraseña -->
            <div class="mt-3 text-center">
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#cambiarClaveModal">Cambiar contraseña</button>
            </div>
        </div>
    </div>

    <!-- MODAL PARA CAMBIO DE CONTRASEÑA -->
    <div class="modal fade" id="cambiarClaveModal" tabindex="-1" aria-labelledby="cambiarClaveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cambiarClaveModalLabel">Cambiar Contraseña</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form id="cambiarClaveForm">
                        <div class="mb-3">
                            <label for="clave_actual" class="form-label">Contraseña Actual:</label>
                            <input type="password" class="form-control" id="clave_actual" name="clave_actual" required>
                        </div>
                        <div class="mb-3">
                            <label for="nueva_clave" class="form-label">Nueva Contraseña:</label>
                            <input type="password" class="form-control" id="nueva_clave" name="nueva_clave" required minlength="6">
                        </div>
                        <div class="mb-3">
                            <label for="confirmar_clave" class="form-label">Confirmar Nueva Contraseña:</label>
                            <input type="password" class="form-control" id="confirmar_clave" name="confirmar_clave" required minlength="6">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Actualizar Contraseña</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap y SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('cambiarClaveForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            fetch('change_password.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Contraseña actualizada',
                        text: data.message,
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.reload();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: data.message,
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
