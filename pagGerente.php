<?php
session_start();

if(!isset($_SESSION['dnigerente'])){
  header("Location:login.php");
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./CSS/nav.css">
    <title>Inicio-Pagina gerente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head>
<body>
 
<?php

 include('header.php');

?>


<style>
       
        .welcome-section {
          
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
        .welcome-section img {
            width: 100%;
            border-radius: 10px;
        }
        .welcome-section h1 {
            color: #333;
        }
        .welcome-section p {
            color: #666;
            font-size: 18px;
        }
        .contaner {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }
        .welcome-section .bio {
            text-align: left;
            margin-top: 20px;
        }
        .welcome-section .contact-info {
            margin-top: 20px;
        }
        .welcome-section .contact-info p {
            margin: 5px 0;
        }
        .welcome-section .actions {
            margin-top: 20px;
        }
        .welcome-section .actions a {
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
  <div class="contaner">

    <div class="welcome-section">
        <img src="https://images.pexels.com/photos/3184298/pexels-photo-3184298.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Bienvenido Gerente">
        <h1>¡Bienvenido,<strong class="text-warning"><?php echo $_SESSION['nombregerente'] ." ".$_SESSION['apellidogerente'] ?></strong>!</h1>
        <p>Estamos encantados de tenerlo a bordo. Su liderazgo y experiencia serán invaluables para nuestro equipo y estamos ansiosos por trabajar juntos para alcanzar nuevos logros.</p>
        <h2>Mensaje de la Dirección</h2>
            <p>Estimado <strong class="text-warning"><?php echo $_SESSION['nombregerente'] ." ".$_SESSION['apellidogerente'] ?></strong>!, en nombre de toda la empresa, le damos la más cálida bienvenida. Estamos seguros de que su contribución será clave para el éxito de nuestros futuros proyectos.</p>
            <h2>Sobre <strong class="text-warning"><?php echo $_SESSION['nombregerente'] ." ".$_SESSION['apellidogerente'] ?></strong>!</h2>
            <p class="bio"><strong class="text-warning"><?php echo $_SESSION['nombregerente'] ." ".$_SESSION['apellidogerente'] ?></strong>! tiene más de 15 años de experiencia en la industria, habiendo liderado equipos en empresas de alto perfil como [Nombre de Empresa Anterior]. Su enfoque en la innovación y el liderazgo ha sido fundamental para el éxito de sus proyectos anteriores.</p>
            <h2>Objetivos y Visión</h2>
            <p>Con la incorporación de <strong class="text-warning"><?php echo $_SESSION['nombregerente'] ." ".$_SESSION['apellidogerente'] ?></strong>!, esperamos impulsar la innovación y fortalecer nuestra posición en el mercado. Su visión estratégica será fundamental para alcanzar nuestras metas a corto y largo plazo.</p>
            <h2>Información de Contacto</h2>
            <div class="contact-info">
                <p>Email: gerente@empresa.com</p>
                <p>Teléfono: +34 123 456 789</p>
                <p>Oficina: Edificio Principal, Piso 3</p>
            </div>
            <div class="actions">
                <a href="#">Manual del Empleado</a>
                <a href="#">Políticas de la Empresa</a>
            </div>
    </div>
  </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>