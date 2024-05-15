<?php
session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/nav.css">
    <title>Document</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php

include('header.php');
 ?>
    
<section>

<div class="container mt-2 mb-5">
  <div class="text-center mt-5 mb-2"><h2>Agregar pieza</h2></div>	
  <div class="text-secondary"><p><small>Datos Obligatorios</small></p></div>
  	
  <form class="row g-3" action="insertar_pieza.php" method="post">
  
  <div class="col-sm-6">
    <label for="nombre" class="form-label">Nro inventario</label>
    <input type="text" class="form-control" name="numeroInventario" id="numeroInventario" placeholder="Ingresa nro de inventario" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="especie" class="form-label">Especie</label>
    <input type="text" class="form-control" name="especie" id="especie" placeholder="Ingresa una especie" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="estadoConservacion" class="form-label">Estado de conservación</label>
    <input type="text" class="form-control" name="estadoConservacion" id="estadoConservacion" placeholder="Ingresa su estado" required>
  </div>


  <div class="col-sm-6 mb-3">
    <label for="fechaIngreso" class="form-label">Fecha de ingreso</label>
    <input type="date" class="form-control" name="fechaIngreso" id="fechaIngreso" placeholder="Ingresa fecha de ingreso" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="dni" class="form-label">Donante</label>
    <input type="text" class="form-control" name="donante" id="donante" placeholder="Ingresa el donante" required>
  </div>


  <div class="col-sm-6 mb-3">
  <label for="clasificacion" class="form-label">Clasificación</label>
    <select class="form-control" name="clasificacion" id="clasificacion" required>
      <option selected disabled="">Selecciona una clasificación</option>
      <option value="">Zoología</option>
      <option value="">Botánica</option>
      <option value="">Paleontología</option>
      <option value="">Arqueología</option>
      <option value="">Osteología</option>
      <option value="">Geología</option>
      <option value="">Ictiología</option>
      <option value="">Oología</option>
    </select>

  <div class="col-12 mt-5 text-center">
        <button type="submit" class="btn btn-primary btn-lg" name="guardar" id="enviar">Agregar</button>
        <button type="reset" class="btn btn-danger btn-lg" name="cancelar" id="cancelar">Cancelar</button>
  </div>
  
  </form>





<?php

if (isset($_GET["mensaje"])){

  if($_GET["mensaje"]!="ok"){

    echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>"; 
    
  }else{
    
   echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>Acceso autorizado!</strong><a href='.php' class='text-primary ms-3'>Volver al Inicio</a></div></div>";  
  
  }  
} 
?>

<?php include('footer.php') ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
