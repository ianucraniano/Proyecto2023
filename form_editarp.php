
<?php
// Conexion a la Base de Datos Biblioteca 
 
 session_start();

 require_once "conexion.php";
 
 require_once "funcionv.php";

 /* Si no existe mensaje resultante de actualización (Porque aún no hizo actualizacion) */

 if (!isset($_GET['msje'])){

   // Guarda el id enviado por parámetro en URL, desde listado.php, y lo evalúa con $_GET
 
  $id=$_GET['idPiezas'];
   



 }else{
     
      // Guarda la Variable de Sesión ids, creada en el archivo editar.php 

  $id=$_SESSION['ids'];

    
 }  
 $sql= "SELECT piezas.idPiezas,piezas.numeroInventario,piezas.especie,piezas.estadoConservacion, donante.nombreyape,piezas.fechaIngreso,piezas.clasificacion
FROM piezas, donante
WHERE (piezas.Donante_idDonante1=donante.idDonante) and idPiezas = $id" ;

//die($sql);

$result=mysqli_query($conex,$sql); 

$fila=mysqli_fetch_assoc($result);


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

</head>
<body>
  
<?php 
    include ("header.php") ;
    
    ?>
    
<section>

<div class="container mt-2 mb-5">
  <div class="text-center mt-5 mb-2"><h2>Editar datos</h2></div>	
  <br>
   <br>
  	
  <form class="row g-3" action="editarp.php" method="post">


  <input type="hidden" class="form-control" name="idPiezas" id="idPiezas" placeholder="" value="<?php echo $fila['idPiezas']; ?>" required>

  <div class="col-sm-6">
    <label for="numeroInventario" class="form-label">* Nro de inventario</label>
    <input type="text" class="form-control" name="numeroInventario" id="numeroInventario" placeholder="" value="<?php echo $fila['numeroInventario']; ?>" required>
  </div>
  <div class="col-sm-6">
    <label for="especie" class="form-label">* Especie</label>
    <input type="text" class="form-control" name="especie" id="especie" placeholder="Editar el Nombre de la especie" value="<?php echo $fila['especie']; ?>" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="estadoConservacion" class="form-label">* Estado de conservación</label>
    <input type="text" class="form-control" name="estadoConservacion" id="estadoConservacion" placeholder="Ingresa su estado de conservación" value="<?php echo $fila['estadoConservacion']; ?>" required>
  </div>
   <div class="col-sm-6 mb-3"> 
    <label for="fechaIngreso" class="form-label">* Fecha de ingreso</label>
    <input type="date" class="form-control" name="fechaIngreso" id="fechaIngreso" placeholder="Ingresa fecha de ingreso" value="<?php echo $fila['fechaIngreso']; ?>" required>
  </div>
  
    <div class="col-sm-6 mb-3">
    <label for="donante" class="form-label">* Donante</label>
    <input type="text" class="form-control" name="donante" id="donante" placeholder="Ingresa nombre del donante" value="<?php echo $fila['nombreyape'] ?>" required>
  </div>
  <div class="col-sm-6 mb-3">
  <label for="clasificacion" class="form-label">* Clasificación</label>
  <select class="form-control" name="clasificacion" id="clasificacion" required>
    <option value="1" <?php if ($fila['especie'] == 1) echo "selected"; ?>>zoología</option>>
    <option value="3" <?php if ($fila['especie'] == 2) echo "selected"; ?>>Botánica</option>   
    <option value="8" <?php if ($fila['especie'] == 3) echo "selected"; ?>>Paleontología</option>
     <option value="9" <?php if ($fila['especie'] == 4) echo "selected"; ?>>Arqueología</option>
   <option value="10" <?php if ($fila['especie'] == 4) echo "selected"; ?>>Osteología</option>
  <option value="11" <?php if ($fila['especie'] == 6) echo "selected"; ?>>Geología</option>
 <option value="12" <?php if ($fila['especie'] == 7) echo "selected"; ?>>Ictiología</option>
  <option value="13" <?php if ($fila['especie'] == 8) echo "selected"; ?>>Oología</option>
  </select>
</div>

  <div class="col-sm-6 mb-3">
  

</div>
<form class="row g-3" action="procesar_formulario.php" method="post">
<div id="formularios-adicionales" class="col-sm-12 mb-3"></div>
  <div class="col-12 text-center">

  <button type="submit" class="btn btn-primary btn-lg" name="enviar" id="enviar">Actualizar datos</button>
  <a class="btn btn-danger btn-lg" href="menupiezas.php">Cancelar</a>
  
  </div>
  
  </form>

</section>



 <?php
    
    // Uso de GET para mostrar Mensaje resultante de la operacion de Actualizacion

    if (isset($_GET["msje"])){

       if($_GET["msje"]!="ok"){

         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["msje"]."</strong><a href='menupiezas.php'</a></div>"; 
         
       }else{

               
         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>"."Actualización Exitosa!"."</strong><a href='menupiezas.php' class='text-primary ms-3'>Volver al Menu</a></div>";  
       
       }  
  } 
  ?> 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<script>
document.getElementById("clasificacion").addEventListener("change", function() {
    var selectedOption = this.value;
    var contenedor = document.getElementById("formularios-adicionales");

    // Limpiar cualquier formulario anterior
    contenedor.innerHTML = "";

    // Generar el formulario correspondiente a la clasificación seleccionada
    if (selectedOption === "botanica") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="clasificacion" class="form-label">Clasificación</label>
                <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Ingresa la clasificacion" required>
            </div>
            <div class="mb-3">
                <label for="reino" class="form-label">Reino</label>
                <input type="text" class="form-control" name="reino" id="reino" placeholder="Ingresa el reino" required>
            </div>     
          <div class="mb-3">
                <label for="division" class="form-label">División</label>
                <input type="text" class="form-control" name="division" id="division" placeholder="Ingresa la division" required>
            </div>
             <div class="mb-3">
                <label for="phylum" class="form-label">Phylum</label>
                <input type="text" class="form-control" name="phylum" id="phylum" placeholder="Ingresa el phylum" required>
            </div>
             <div class="mb-3">
                <label for="habitat" class="form-label">Clase</label>
                <input type="text" class="form-control" name="habitat" id="habitat" placeholder="Ingresa la clase" required>
            </div>
             <div class="mb-3">
                <label for="orden" class="form-label">Orden</label>
                <input type="text" class="form-control" name="orden" id="orden" placeholder="Ingresa el orden" required>
            </div>
             <div class="mb-3">
                <label for="familia" class="form-label">Familia</label>
                <input type="text" class="form-control" name="familia" id="familia" placeholder="Ingresa el familia" required>
            </div>
             <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" name="especie" id="especie" placeholder="Ingresa la especie" required>
            </div>
        `;
    } else if (selectedOption === "zoologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="tipoAnimal" class="form-label">Clasificación</label>
                <input type="text" class="form-control" name="tipoAnimal" id="tipoAnimal" placeholder="Ingresa el tipo de animal" required>
            </div>
           <div class="mb-3">
                <label for="reino" class="form-label">Reino</label>
                <input type="text" class="form-control" name="reino" id="reino" placeholder="Ingresa el reino" required>
            </div>   
             <div class="mb-3">
                <label for="division" class="form-label">División</label>
                <input type="text" class="form-control" name="division" id="division" placeholder="Ingresa la division" required>
            </div>
             <div class="mb-3">
                <label for="phylum" class="form-label">Phylum</label>
                <input type="text" class="form-control" name="phylum" id="phylum" placeholder="Ingresa el phylum" required>
            </div>
             <div class="mb-3">
                <label for="habitat" class="form-label">Clase</label>
                <input type="text" class="form-control" name="habitat" id="habitat" placeholder="Ingresa la clase" required>
            </div>
             <div class="mb-3">
                <label for="orden" class="form-label">Orden</label>
                <input type="text" class="form-control" name="orden" id="orden" placeholder="Ingresa el orden" required>
            </div>
             <div class="mb-3">
                <label for="familia" class="form-label">Familia</label>
                <input type="text" class="form-control" name="familia" id="familia" placeholder="Ingresa el familia" required>
            </div>
             <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" name="especie" id="especie" placeholder="Ingresa la especie" required>
            </div>
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
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" name="especie" id="especie" placeholder="Ingresa la especie" required>
            </div>
            <div class="mb-3">
                <label for="clasificacion" class="form-label">Clasificación</label>
                <input type="text" class="form-control" name="habitat" id="clasificacion" placeholder="Ingresa el clasificacion" required>
            </div>
          
      
        `;
      }else if (selectedOption === "geologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="tipoAnimal" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipoAnimal" id="tipoAnimal" placeholder="Ingresa el tipo" required>
            </div>
  
        
      
        `;
      }else if (selectedOption === "icteologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" name="especie" id="especie" placeholder="Ingresa la especie" required>
            </div>
            <div class="mb-3">
                <label for="clasificacion" class="form-label">Clasificación</label>
                <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Ingresa la clasificación" required>
            </div>
          
       
      
        `;
      }else if (selectedOption === "oologia") {
        contenedor.innerHTML = `
            <div class="mb-3">
                <label for="clasificacion" class="form-label">Clasificación</label>
                <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Ingresa la clasificación" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Ingresa el tipo" required>
            </div>
          
         <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" name="especie" id="especie" placeholder="Ingresa la especie" required>
            </div>
        
      
        `;
      }
});
</script>
</html>
