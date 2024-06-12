<?php
session_start();

require_once "conexion.php";


$id=$_GET["idPiezas"];


$sql= "SELECT piezas.idPiezas,piezas.numeroInventario,piezas.especie,piezas.estadoConservacion, donante.nombre,donante.apellido,piezas.fechaIngreso,piezas.clasificacion,piezas.observacion
FROM piezas, donante
WHERE (piezas.Donante_idDonante1=donante.idDonante) and idPiezas = $id"; 



$result=mysqli_query($conex,$sql);

$fila=mysqli_fetch_array($result);

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
 <div class="text-center my-5 text-primary"><h2>Eliminar Pieza</h2></div>	
       
        <form class="row g-3" action="eliminarp.php" method="post">
        <input type="hidden" class="form-control" name="idPiezas" id="idPiezas" value="<?php echo $fila['idPiezas'];?>">
                
    


                <div class="col-sm-6">
    <label for="num" class="form-label">* Nro de inventario</label>
    <input type="text" class="form-control" name="num" id="num" placeholder="" value="<?php echo $fila['numeroInventario']; ?>" disabled>
  </div>
  <div class="col-sm-6">
    <label for="especie" class="form-label">* Especie</label>
    <input type="text" class="form-control" name="especie" id="especie" placeholder="Editar el Nombre de la especie" value="<?php echo $fila['especie']; ?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="estadoConservacion" class="form-label">* Estado de conservación</label>
    <input type="text" class="form-control" name="estadoConservacion" id="estadoConservacion" placeholder="Ingresa su estado de conservación" value="<?php echo $fila['estadoConservacion']; ?>" disabled>
  </div>
   <div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* Fecha de ingreso</label>
    <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Ingresa fecha de ingreso" value="<?php echo $fila['fechaIngreso']; ?>" disabled>
  </div>
  
    <div class="col-sm-6 mb-3">
    <label for="donante" class="form-label">* Donante</label>
    <input type="text" class="form-control" name="donante" id="donante" placeholder="Ingresa tu Correo Electrónico" value="<?php echo $fila['nombre']." ".$fila['apellido']; ?>" disabled>
  </div>


  <div class="col-sm-6 mb-3">
    <label for="observacion" class="form-label">* Observación</label>
    <input type="text" class="form-control" name="observacion" id="observacion" placeholder="Ingresa tu Correo Electrónico" value="<?php echo $fila['observacion']; ?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
  <label for="clasificacion" class="form-label">* Clasificación</label>
  <select class="form-control" name="clasificacion" id="clasificacion" disabled>
     <option value="1" <?php if ($fila['especie'] == 1) echo "selected"; ?>>zoología</option>
     <option value="2" <?php if ($fila['especie'] == 2) echo "selected"; ?>>Botánica</option>
     <option value="3" <?php if ($fila['especie'] == 3) echo "selected"; ?>>Paleontología</option>
     <option value="4" <?php if ($fila['especie'] == 4) echo "selected"; ?>>Arqueología</option>
     <option value="5" <?php if ($fila['especie'] == 5) echo "selected"; ?>>Osteología</option>
     <option value="6" <?php if ($fila['especie'] == 6) echo "selected"; ?>>Geología</option>
     <option value="7" <?php if ($fila['especie'] == 7) echo "selected"; ?>>Ictiología</option>
     <option value="8" <?php if ($fila['especie'] == 8) echo "selected"; ?>>Oología</option>
  </select>
</div> 

                <div class="col-12 text-center">
                    <div> <h5> ¿Estas seguro que quieres eliminar esta especie?</h5>
                        <br>
                <button type="submit" class="btn btn-primary btn-lg" name="btn_editar" id="editar">Confirmar</button>
                <a class="btn btn-danger btn-lg ms-2" href="menupiezas.php" role="button">Cancelar</a>
                </div>
        
        </form>
        
</div>

</div>

</section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>