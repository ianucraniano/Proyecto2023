
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

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
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

  <div class="col-12 text-center">

  <button type="submit" class="btn btn-primary btn-lg" name="enviar" id="enviar">Actualizar datos</button>
  <button type="reset" class="btn btn-danger btn-lg" name="cancelar" id="cancelar">Cancelar</button>
  
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
</html>
