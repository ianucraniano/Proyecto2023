<?php
session_start();

if(!isset($_SESSION['dniadmin'])){
  
  header("Location:index.php");
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./CSS/nav.css">
    <title>Inicio-Administrador</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
</head>
<style>
  .imagen{

    mask-image: linear-gradient(
      white 80%,
      transparent
    )
  }
</style>
<body>
 
<?php

 include('header.php');

?>


<br>
<div class="card text-center col-sm-12 mb-3" >
  <div class="card-body container ">
    
    <h1 class="card-title">Acceso exclusivo para administrador! </h1>
    <h2 class="card-title">Bienvenido/a sr/a <strong class="text-warning"><?php echo $_SESSION['nombreadmin'] ." ".$_SESSION['apellidoadmin'] ?></strong></h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae quod odit repellendus error. Quas, id adipisci unde quis architecto officiis quidem ut, corporis voluptates maiores modi sunt harum mollitia nobis?</p>
    <img class="p-4 imagen" src="./imagenes/admin.jpg" alt="">
   
   
  </div>
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>