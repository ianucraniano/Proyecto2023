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
        .user-info {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 30px;
        }
        
    </style>
    <title>Información del Usuario</title>
</head>
<body>
<?php

include("header.php");
?>
    <div class="container">
        <div class="user-info">
            <h2 class="mb-4">Información del Usuario</h2>
            <div class="form-group">
                <label for="userPhone">Teléfono:</label>
                <input type="text" class="form-control" id="userPhone" value="+54 123 456 7890" readonly>
            </div>
            <div class="form-group">
                <label for="userEmail">Email:</label>
                <input type="email" class="form-control" id="userEmail" value="usuario@example.com" readonly>
            </div>
            <div class="form-group">
                <label for="userPassword">Contraseña:</label>
                <input type="password" class="form-control" id="userPassword" value="********" readonly>
            </div>
            <a href="modificar_info.php" class="btn btn-info" id="modifyButton">Modificar Datos</a>
          
        </div>
    </div>
    <?php

include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <script>
        document.getElementById('modifyButton').addEventListener('click', function() {
            // Aquí puedes agregar la lógica para permitir la edición de los datos
            document.getElementById('userPhone').removeAttribute('readonly');
            document.getElementById('userEmail').removeAttribute('readonly');
            document.getElementById('userPassword').removeAttribute('readonly');
        });
    </script>
</body>
</html>
