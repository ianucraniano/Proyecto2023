<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./CSS/estilo.css">
    <style>
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
    
    <section>
        <div class="container">
            <div class="row justify-content-center pt-4 mt-5">
                <div class="col-md-6 formulario">
                    <form action="ingresar.php" method="post" class=" ">
                        <div class="form-group text-center titulo">
                            <h1 class="text-white">Iniciar sesión</h1>
                        </div>
                        <label for="tipo" class="form-label text-white">Tipo de usuario</label>
                        <div class="form-floating mb-3">      
                            <select class="form-control" name="tipo_usuario" id="tipo_usuario" required>
                                <option selected disabled>Selecciona un rol</option>
                                <option value="administrador">Administrador</option>
                                <option value="gerente">Gerente</option>
                            </select>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="dni" id="dni" placeholder=" ">
                            <label class="labeltexto" for="dni">Ingrese su DNI</label>
                        </div>
                        <div class="form-floating mb-3 position-relative">
                            <input type="password" class="form-control" name="clave" id="clave" placeholder=" ">
                            <label class="labeltexto" for="clave">Ingrese su contraseña</label>
                            <span class="toggle-password" id="togglePassword">
                                <i class="fas fa-eye" id="icon-eye"></i>
                            </span>
                        </div>
                        <a href="#" class="btn btn-link w-100" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                            Olvidaste tu contraseña?
                        </a>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-outline-light w-100" name="btn_ingresar" id="btn_ingresar">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal para cambiar la contraseña -->
        <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="changePasswordModalLabel">Cambia tu Contraseña</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="change_password.php" method="POST">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="current-password" id="current-password" placeholder=" ">
                                <label for="current-password">Contraseña Actual</label>
                                <span class="toggle-password" id="toggleCurrentPassword">
                                    <i class="fas fa-eye" id="icon-eye-current"></i>
                                </span>
                            </div>
                            <div class="form-floating mb-3 position-relative">
                                <input type="password" class="form-control" name="new-password" id="new-password" placeholder=" ">
                                <label for="new-password">Nueva Contraseña</label>
                                <span class="toggle-password" id="toggleNewPassword">
                                    <i class="fas fa-eye" id="icon-eye-new"></i>
                                </span>
                            </div>
                            <div class="form-floating mb-3 position-relative">
                                <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder=" ">
                                <label for="confirm-password">Confirmar Nueva Contraseña</label>
                                <span class="toggle-password" id="toggleConfirmPassword">
                                    <i class="fas fa-eye" id="icon-eye-confirm"></i>
                                </span>
                            </div>
                            <button type="submit" class="btn btn-success">Confirmar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        // Mostrar mensaje resultante de la acción
        if (isset($_GET["mensaje"])) {
            if ($_GET["mensaje"] != "ok") {
                echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>" . $_GET["mensaje"] . "</strong></div></div>"; 
            } else {
                echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>Acceso autorizado!</strong><a href='ingresar.php' class='text-primary ms-3'>Volver al Inicio</a></div></div>";  
            }  
        }
    ?> 

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        // Funcionalidad para mostrar/ocultar la contraseña
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('clave');
            const icon = document.getElementById('icon-eye');
            togglePassword(passwordInput, icon);
        });

        document.getElementById('toggleCurrentPassword').addEventListener('click', function () {
            const currentPasswordInput = document.getElementById('current-password');
            const iconCurrent = document.getElementById('icon-eye-current');
            togglePassword(currentPasswordInput, iconCurrent);
        });

        document.getElementById('toggleNewPassword').addEventListener('click', function () {
            const newPasswordInput = document.getElementById('new-password');
            const iconNew = document.getElementById('icon-eye-new');
            togglePassword(newPasswordInput, iconNew);
        });

        document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
            const confirmPasswordInput = document.getElementById('confirm-password');
            const iconConfirm = document.getElementById('icon-eye-confirm');
            togglePassword(confirmPasswordInput, iconConfirm);
        });

        function togglePassword(input, icon) {
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

    <?php include("footer.php"); ?>
</body>
</html>
