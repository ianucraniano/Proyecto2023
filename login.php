<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        /* Estilos generales login */
        body {
            background-color: #f2f2f2;
        }
        .centro {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f2f2f2;
        }
        .login-page {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            display: flex;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 800px;
            width: 100%;
        }
        .login-image {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .login-form-container {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-title {
            margin-bottom: 20px;
            color: #333;
        }
        .login-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .input-group {
            position: relative;
            display: flex;
            align-items: center;
        }
        .icon {
            position: absolute;
            top:13px;
            left: 10px;
            color: #333;
        }
        .login-input, .login-select {
            width: 100%;
            padding: 10px 10px 10px 35px;
            border: 1px solid #229853;
            border-radius: 10px;
            outline: none;
        }
        .login-input:focus, .login-select:focus {
            border-color: #229853;
        }
        .login-select {
            appearance: none;
            background-color: #fff;
            cursor: pointer;
        }
        .login-button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #229853;
            color: white;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
        }
        .login-button:hover {
            background-color: #0deb69;
        }
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div class="centro">
        <div class="login-page">
            <div class="login-container">
                <div class="login-image">
                    <img src="imagenes/login.jpg" alt="Imagen de bienvenida">
                </div>
                <div class="login-form-container">
                    <h2 class="login-title">Iniciar Sesión</h2>
                    <form class="login-form" action="ingresar.php" method="post">
                        <div class="input-group">
                            <i class="fas fa-user icon"></i>
                            <input type="text" placeholder="DNI" name="dni" class="login-input">
                        </div>
                        <div class="input-group">
                            <i class="fas fa-lock icon"></i>
                            <input type="password" placeholder="Contraseña" name="clave" id="password" class="login-input">
                            <i class="fas fa-eye toggle-password" id="togglePassword"></i>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-user-cog icon"></i>
                            <select class="login-select" name="tipo_usuario" id="tipo_usuario">
                                <option value="administrador">Administrador</option>
                                <option value="gerente">Gerente</option>
                            </select>
                        </div>
                        <button type="submit" class="login-button">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mostrar/ocultar contraseña
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>
