<?php
// Conexión a la base de datos
require 'conexion.php'; // Incluye el archivo con la conexión a la base de datos

session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 30px auto;
            max-width: 500px;
        }
        .btn-submit {
            background-color: #28a745;
            color: white;
        }
        .btn-cancel {
            background-color: #dc3545;
            color: white;
        }
    </style>
    <title>Modificar Información del Usuario</title>
</head>
<body>
<?php

include("header.php");
?>
    <div class="container">
        <div class="form-container">
            <h2 class="mb-4">Modificar Información del Usuario</h2>
            <form id="modifyUserForm" method="post" action="change_password.php">
                <div class="form-group">
                    <label for="userPhone">Teléfono:</label>
                    <input type="text" class="form-control" name="userPhone" id="userPhone" placeholder="+54 123 456 7890" required>
                </div>
                <div class="form-group">
                    <label for="userEmail">Email:</label>
                    <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="usuario@example.com" required>
                </div>
                <div class="form-group">
                    <label for="userPassword">Contraseña:</label>
                    <input type="password" class="form-control" id="userPassword" placeholder="Nueva contraseña" required>
                </div>
                <div class="form-group">
                    <label for="userPassword">Confirmar contraseña:</label>
                    <input type="password" class="form-control" id="userPassword" placeholder="Nueva contraseña" required>
                </div>
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                <button type="button" class="btn btn-danger" id="cancelButton">Cancelar</button>
            </form>
        </div>
    </div>
    <?php

include("footer.php");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <script>
        // Lógica para manejar el envío del formulario
        document.getElementById('modifyUserForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que se envíe el formulario por defecto
            // Aquí puedes añadir la lógica para guardar los cambios (ejemplo: enviar a un servidor)
            alert('Cambios guardados exitosamente.');
        });

        // Lógica para cancelar la edición
        document.getElementById('cancelButton').addEventListener('click', function() {
            // Aquí puedes añadir la lógica para volver a la vista anterior
            alert('Edición cancelada.');
        });
    </script>
</body>
</html>
