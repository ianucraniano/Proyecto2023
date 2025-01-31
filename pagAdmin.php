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
    <link rel="stylesheet" href="./CSS/pagAdmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
    <style>
       
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eos aliquam excepturi officia qui mollitia facilis.</p>
                        <a href="listadoadm.php" class="btn btn-outline-warning">Gestionar</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="admin-card text-center">
                        <i class="bi bi-file-earmark admin-icons"></i>
                        <h4>Agregar usuarios</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eos aliquam excepturi officia qui mollitia facilis.</p>
                        <a href="form_agregar.php" class="btn btn-outline-warning">Gestionar</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="admin-card text-center">
                        <i class="bi bi-gear admin-icons"></i>
                        <h4>Configuración de piezas</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum eos aliquam excepturi officia qui mollitia facilis.</p>   
                        <a href="menupiezas.php" class="btn btn-outline-warning">Configurar</a>
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
