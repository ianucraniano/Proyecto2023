<?php
session_start();
require_once "conexion.php";



if (!isset($_GET['msje'])){


$id=$_GET['idusuarios'];






}else{
    
 

 $id=$_SESSION['ids'];

   
}  

$sql= "SELECT nombre,apellido,dni,email FROM usuarios WHERE idusuarios = $id" ;

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

include("header.php");
?>
    
<section>

<div class="container mt-2 mb-5">
  <div class="text-center mt-5 mb-2"><h2>Editar datos personales</h2></div>	
  <br>
   <br>
  	
  <form class="row g-3" action="editar.php" method="POST">
  
  <div class="col-sm-6">
    <label for="nombre" class="form-label">* Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Editar tu Nombre" value="<?php echo $fila['nombre']; ?>" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="apellido" class="form-label">* Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu Apellido" value="<?php echo $fila['apellido']; ?>" required>
  </div>
   <div class="col-sm-6 mb-3">
    <label for="dni" class="form-label">* DNI</label>
    <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI de 8 dígitos numéricos" value="<?php echo $fila['dni']; ?>" required>
  </div>
  
    <div class="col-sm-6 mb-3">
    <label for="email" class="form-label">* Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Ingresa tu Correo Electrónico" value="<?php echo $fila['email']; ?>" required>
  </div>



  

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

         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["msje"]."</strong><a href='listadoadm.php' </a></div>"; 
         
       }else{

               
         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>"."Actualización Exitosa!"."</strong><a href='listadoadm.php' </a></div>";  
       
       }  
  } 
  ?> 







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
