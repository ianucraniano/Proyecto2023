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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> 
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
    <label for="especie" class="form-label">Nombre de pieza</label>
    <input type="text" class="form-control" name="especie" id="especie" placeholder="Ingresa un nombre" required>
  </div>

  <div class="col-sm-6 mb-3">
  <label for="estadoConservacion" class="form-label">Estado de conservación</label>
    <select class="form-control" name="estadoConservacion" id="estadoConservacion" >
      <option selected disabled="">Selecciona una clasificación</option>
      <option value="bueno">Bueno</option>
      <option value="muybueno">Muy bueno</option>
      <option value="excelente">Excelente</option>
      <option value="malo">Malo</option>
   
    </select>
  </div>

  <div class="col-sm-6 mb-3">
    <label for="fechaIngreso" class="form-label">Fecha de ingreso</label>
    <input type="date" class="form-control" name="fechaIngreso" id="fechaIngreso" placeholder="Ingresa fecha de ingreso" required>
  </div>

  <div class="col-sm-6 mb-3">
    <label for="nombre" class="form-label">Donante</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el donante" required>
  </div>


    
  <div class="col-sm-6 mb-3">
  <label for="clasificacion" class="form-label">Clasificación</label>
    <select class="form-control" name="clasificacion" id="clasificacion" required>
      <option selected disabled="">Selecciona una clasificación</option>
      <option value="zoologia">Zoología</option>
      <option value="botanica">Botánica</option>
      <option value="paleontologia">Paleontología</option>
      <option value="arqueologia">Arqueología</option>
      <option value="osteologia">Osteología</option>
      <option value="geologia">Geología</option>
      <option value="icteologia">Icteología</option>
      <option value="oologia">Oología</option>
    </select>
  </div>
  
    <div class=" col-sm-6 mt-2 mb-5 row g-2">
    <label for="nombre" class="form-label">Observacion</label>
    <textarea name="observacion" id="observacion"> </textarea>
    </div>

    <div class="col-sm-6 mb-3">
    <label for="cantidadpiezas" class="form-label">Cantidad de piezas</label>
    <input type="text" class="form-control" name="cantidadpiezas" id="cantidadpiezas" placeholder="Ingresa nro de pieza" required>
  </div>

  <form class="row g-3" action="procesar_formulario.php" method="post">
  <div id="formularios-adicionales" class="col-sm-12 mb-3"></div>
  
  <div class="col-12 mt-5 text-center">
        <button type="submit" class="btn btn-primary btn-lg" name="guardar" id="enviar">Agregar</button>
        <a class="btn btn-danger btn-lg" href="menupiezas.php">Cancelar</a>
  </div>
 

  </form>


</div>


<?php

if (isset($_GET["mensaje"])){

  if($_GET["mensaje"]!="ok"){

    echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>"; 
    
  }else{
    
   echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>Acceso autorizado!</strong><a href='menupiezas.php' class='text-primary ms-3'>Volver al Inicio</a></div></div>";  
  
  }  
} 
?>

<?php include('footer.php') ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script>
document.getElementById("clasificacion").addEventListener("change", function() {
    var selectedOption = this.value;
    var contenedor = document.getElementById("formularios-adicionales");


    contenedor.innerHTML = "";

    
    if (selectedOption === "zoologia" || selectedOption === "botanica") {
        contenedor.innerHTML = `
          <div class="mb-3"><label for="clasi" class="form-label">Clasificacion</label>
                <input type="text" class="form-control" name="clasi" required></div>
            <div class="mb-3"><label for="reino" class="form-label">Reino</label>
                <input type="text" class="form-control" name="reino" required></div>
            <div class="mb-3"><label for="division" class="form-label">División</label>
                <input type="text" class="form-control" name="division" required></div>
            <div class="mb-3"><label for="phylum" class="form-label">Phylum</label>
                <input type="text" class="form-control" name="phylum" required></div>
            <div class="mb-3"><label for="clase" class="form-label">Clase</label>
                <input type="text" class="form-control" name="clase" required></div>
            <div class="mb-3"><label for="orden" class="form-label">Orden</label>
                <input type="text" class="form-control" name="orden" required></div>
            <div class="mb-3"><label for="familia" class="form-label">Familia</label>
                <input type="text" class="form-control" name="familia" required></div>
            <div class="mb-3"><label for="esp" class="form-label">Especie</label>
                <input type="text" class="form-control" name="esp" required></div>
        `;
    } else if (selectedOption === "paleontologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="era" class="form-label">Era</label>
                <input type="text" class="form-control" name="era" id="era" placeholder="Ingresa la era" required>
            </div>
            <div class="mb-3">
                <label for="periodo" class="form-label">Periodo</label>
                <input type="text" class="form-control" name="periodo" id="periodo" placeholder="Ingresa el periodo" required>
            </div>
          
       
        
      
        `;
    }else if (selectedOption === "arqueologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="integridad" class="form-label">Integridad hitorica</label>
                <input type="text" class="form-control" name="integridad" id="integridad" placeholder="Ingresa la integridad historica" required>
            </div>
            <div class="mb-3">
                <label for="estetica" class="form-label">Estetica</label>
                <input type="text" class="form-control" name="estetica" id="estetica" placeholder="Ingresa la estetica" required>
            </div>
          
         <div class="mb-3">
                <label for="material" class="form-label">Material</label>
                <input type="text" class="form-control" name="material" id="material" placeholder="Ingresa el material" required>
            </div>
        
      
        `;// 
      }else if (selectedOption === "osteologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="espeO" class="form-label">Especie</label>
                <input type="text" class="form-control" name="espeO" id="espeO" placeholder="Ingresa la especie" required>
            </div>
            <div class="mb-3">
                <label for="clasiO" class="form-label">Clasificación</label>
                <input type="text" class="form-control" name="clasiO" id="clasiO" placeholder="Ingresa el clasificacion" required>
            </div>
          
      
        `;
      }else if (selectedOption === "geologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Ingresa el tipo" required>
            </div>
  
        
      
        `;
      }else if (selectedOption === "icteologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="espeI" class="form-label">Especie</label>
                <input type="text" class="form-control" name="espeI" id="espeI" placeholder="Ingresa la especie" required>
            </div>
            <div class="mb-3">
                <label for="clasiI" class="form-label">Clasificación</label>
                <input type="text" class="form-control" name="clasiI" id="clasiI" placeholder="Ingresa la clasificación" required>
            </div>
          
       
      
        `;
      }else if (selectedOption === "oologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="clasifi" class="form-label">Clasificación</label>
                <input type="text" class="form-control" name="clasifi" id="clasifi" placeholder="Ingresa la clasificación" required>
            </div>
            <div class="mb-3">
                <label for="tipoO" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipoO" id="tipoO" placeholder="Ingresa el tipo" required>
            </div>
          
         <div class="mb-3">
                <label for="especieO" class="form-label">Especie</label>
                <input type="text" class="form-control" name="especieO" id="especieO" placeholder="Ingresa la especie" required>
            </div>
        
      
        `;
      }
});
</script>

</html>
