
<?php
// Conexion a la Base de Datos Biblioteca 
session_start();
require_once "conexion.php";

if(!isset($_SESSION['dniadmin'])&&!isset($_SESSION['dnigerente'])){
    header("Location:index.php");
}



$sql= "SELECT piezas.idPiezas,piezas.numeroInventario,piezas.especie,piezas.estadoConservacion, donante.nombreyape,piezas.fechaIngreso,piezas.clasificacion
FROM piezas, donante
WHERE (piezas.Donante_idDonante1=donante.idDonante)";


$result=mysqli_query($conex,$sql);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

  <!-- <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="../CSS/nav.css">

</head>
<body>

    <?php 
    include ("header.php") ;
    
    ?>

<section>
<div class="text-center mt-5 mb-3"><h3>Menu de piezas</h3></div>
<table class="table table-success table-striped">



  
      <div class="col-6">
     <a class="btn btn-primary btn-sm mb-2" href="form_agregarp.php" role="button">Agregar</a>
      </div>
    


    <thead class="table-dark">
    <tr class="table-primary">
    <th scope="col">Nro de inventario</th>
                <th scope="col">Especie</th>
                <th scope="col">Estado</th>
                <th scope="col">Donante</th>
                <th scope="col">FechaIngreso</th>               
                <th scope="col">Clasificación</th>
                <th scope="col">Acciones</th>

</tr>
</thead>


           <?php

               if (mysqli_num_rows($result)>0){
            ?>

            <tbody>

            <?php

                While ($fila=mysqli_fetch_array($result)){
    
            ?>


        
        
<tr>
    
    <th scope="row"><?php echo $fila["numeroInventario"]; ?>
    </th>
        <td><?php echo $fila["especie"]; ?></td>
        <td><?php echo $fila["estadoConservacion"]; ?></td>
        <td><?php echo $fila["nombreyape"]?></td>
        <td><?php echo $fila["fechaIngreso"]; ?></td>
        <td><?php echo $fila["clasificacion"]; ?></td>
        
        <td><a class="me-1 btn btn-success btn-sm " href="form_editarp.php?idPiezas=<?php echo $fila ['idPiezas'];?>">Editar</a>
        <a class="me-1 btn btn-danger btn-sm" href="form_eliminarp.php?idPiezas=<?php echo $fila ['idPiezas'];?>">Eliminar</a>
        </td>

</tr>

<?php
}
?>   
                


</tbody>

</table>

<?php
	     }else{

          echo "</table></div>";
          echo "<div class='container text-center lead my-3 py-3'><div class='alert alert-danger my-5 py-4'><p><em>No existen especies! </em><a href='index.php' class='text-primary lead ms-2'>Volver</a></p></div></div>";
         }
	   ?>  

</section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>