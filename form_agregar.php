<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/nav.css">
    <title>Agregar usuario</title>

     
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>

<?php

include('header.php');
 ?>
    
<section>

<div class="container mt-2 mb-5">
  <div class="text-center mt-5 mb-2"><h2>Datos Personales</h2></div>	
  <div class="text-secondary"><p><small>Datos Obligatorios</small></p></div>
  	
  <form class="row g-3" action="insertar_datos.php" method="post">
  
  <div class="col-sm-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu Nombre" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu Apellido" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa tu telefono" required>
  </div>
   <div class="col-sm-6 mb-3">
    <label for="dni" class="form-label">DNI</label>
    <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI de 8 dígitos numéricos" required>
  </div>

  <div class="col-sm-6 mb-3">
    <label for="fecha_alta" class="form-label">Fecha de alta</label>
    <input type="date" class="form-control" name="fecha_alta" id="fecha_alta" placeholder="Ingresa tu fecha de nacimiento" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Ingresa tu Correo Electrónico" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="clave" class="form-label">Clave</label>
    <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingresa una clave de 8 caracteres como mínimo" required>
  </div>    
 

  <div class="col-sm-6 mb-3">
  <label for="tipo" class="form-label">Tipo de Usuario</label>
    <select class="form-control" name="tipo_usuario" id="tipo_usuario" required>
      <option selected disabled="">Selecciona un rol</option>
      <option value="administrador">Administrador</option>
      <option value="gerente">Gerente</option>
    </select>

    <div class="mt-5 text-center justify-content-center">
          <button type="submit" class="btn btn-primary btn-lg" name="guardar" id="enviar">Agregar</button>
          <a class="btn btn-danger btn-lg" href="pagAdmin.php">Cancelar</a>
    </div>
    
  </form>
  

</section>

<?php

if (isset($_GET["mensaje"])){

  if($_GET["mensaje"]!="ok"){

    echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>"; 
    
  }else{
    
   echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>Usuario agregado correctamente!</strong><a href='listadoadm.php' class='text-primary ms-3'>Volver al Inicio</a></div></div>";  

  
  
  }  
} 
?>

<?php include('footer.php') ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showAlert(message, type) {
        Swal.fire({
            title: type === 'success' ? '¡Éxito!' : '¡Error!',
            text: message,
            icon: type,
            timer: 3000,
            showConfirmButton: false
        }).then(() => {
            window.location.href = 'form_agregar.php';
        });
    }
    document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('mensaje')) {
                const mensaje = urlParams.get('mensaje');
                const tipo = urlParams.get('tipo');
                showAlert(mensaje, tipo);
            }
        });
    </script>
    
</body>
</html>
