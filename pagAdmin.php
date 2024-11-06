<?php
session_start();

if(!isset($_SESSION['dniadmin'])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Administrador</title>
    <link rel="stylesheet" href="./CSS/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
    <style>
        .imagen {
            mask-image: linear-gradient(white 80%, transparent);
            border-radius: 10px;
        }
        .card-body {
            padding: 40px;
        }
        .admin-section {
            background-color: #f7f7f7;
            padding: 60px 0;
        }
        .admin-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2a3d56;
            margin-bottom: 20px;
        }
        .admin-welcome {
            font-size: 1.5rem;
            color: #ffab00;
            margin-bottom: 20px;
        }
        .admin-description {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 30px;
        }
        .admin-image {
            max-width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .admin-image:hover {
            transform: scale(1.05);
        }
        .admin-card {
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }
        .admin-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .admin-btn {
            background-color: #ffab00;
            color: #fff;
            border: none;
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .admin-btn:hover {
            background-color: #e89c00;
        }
        .admin-icons {
            font-size: 2.5rem;
            color: #ffab00;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .admin-icons:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="admin-section">
        <div class="container">
            <div class="card text-center mb-4">
                <div class="card-body">
                    <h1 class="admin-title">¡Acceso exclusivo para Administrador!</h1>
                    <h2 class="admin-welcome">Bienvenido/a <strong><?php echo $_SESSION['nombreadmin'] . " " . $_SESSION['apellidoadmin']; ?></strong></h2>
                    <p class="admin-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, id adipisci unde quis architecto officiis
                        quidem ut, corporis voluptates maiores modi sunt harum mollitia nobis? Sed minima quod reprehenderit
                        ea reiciendis necessitatibus!
                    </p>
                    <img class="admin-image p-4" src="./imagenes/admin.jpg" alt="Imagen de administrador">
                    <div class="my-4">
                        <a href="panel.php" class="admin-btn">Ir al Panel de Administración</a>
                    </div>
                </div>
            </div>

            <!-- Elementos adicionales con efectos -->
            <div class="row">
                <div class="col-md-4">
                    <div class="admin-card text-center">
                        <i class="bi bi-person-circle admin-icons"></i>
                        <h4>Gestionar Usuarios</h4>
                        <p>Visualiza, agrega y edita los usuarios registrados en el sistema.</p>
                        <a href="listadoadm.php" class="btn btn-outline-warning">Gestionar</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="admin-card text-center">
                        <i class="bi bi-file-earmark admin-icons"></i>
                        <h4>Gestión de Contenido</h4>
                        <p>Administra los contenidos de la página, como textos, imágenes y más.</p>
                        <a href="" class="btn btn-outline-warning">Gestionar</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="admin-card text-center">
                        <i class="bi bi-gear admin-icons"></i>
                        <h4>Configuración</h4>
                        <p>Configura opciones globales y personaliza la plataforma según tus necesidades.</p>
                        <a href="configuracion.php" class="btn btn-outline-warning">Configurar</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Icons for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
