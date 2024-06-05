
<?php
// Conexion a la Base de Datos Biblioteca 
session_start();
require_once "conexion.php";

if(!isset($_SESSION['dniadmin'])&&!isset($_SESSION['dnigerente'])){
    header("Location:index.php");
}

//$id = $_GET['idPiezas'];

$sql= "SELECT piezas.idPiezas,piezas.numeroInventario,piezas.especie,piezas.estadoConservacion, donante.nombre,donante.apellido,piezas.fechaIngreso,piezas.clasificacion
FROM piezas, donante
WHERE (piezas.Donante_idDonante1=donante.idDonante) ";


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
<div class="text-center mt-5 mb-3"><h1>Menu de piezas</h1></div>
<table class="table table-success table-striped container">



  
      <div class="text-center p-3">
     <a class="btn btn-primary btn-sm mb-2" href="form_agregarp.php" role="button">Agregar</a>
      </div>
    


    <thead class="table-dark">
    <tr class="table-primary">
    <th scope="col"></th>
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
    
    <th scope="row"><?php echo $fila["idPiezas"]; ?>
    </th>
    <th scope="row"><?php echo $fila["numeroInventario"]; ?>
    </th>
        <td><?php echo $fila["especie"]; ?></td>
        <td><?php echo $fila["estadoConservacion"]; ?></td>
        <td><?php echo $fila["nombre"]." ".$fila["apellido"]; ?></td>
        <td><?php echo $fila["fechaIngreso"]; ?></td>
        <td><?php echo $fila["clasificacion"]; ?></td>
                
        <td><a class="me-1 btn btn-success  " title="Editar" href="form_editarp.php?idPiezas=<?php echo $fila ['idPiezas'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
            </svg></a>
        <a class="me-1 btn btn-danger " title="Eliminar" href="form_eliminarp.php?idPiezas=<?php echo $fila ['idPiezas'];?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
            </svg></a>
        <button class="btn btn-info view-details" title="Ver detalles" data-id="<?php echo $fila['idPiezas']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/></svg></button>
        <!-- <a class="me-1 btn btn-primary btn-sm" title="Ver detalles" href=".php?idPiezas=<?php echo $fila ['idPiezas'];?>"></a> -->
        </td>

</tr>

<?php
}
?>   
                


</tbody>

</table>
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Detalles de la Especie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aquí se cargarán los detalles de la especie -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

<?php
	     }else{

          echo "</table></div>";
          echo "<div class='container text-center lead my-3 py-3'><div class='alert alert-danger my-5 py-4'><p><em>No existen especies! </em><a href='index.php' class='text-primary lead ms-2'>Volver</a></p></div></div>";
         }
	   ?>  

</section>




    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function(){
        $('.view-details').on('click', function(){
            let idP = $(this).data('idPiezas');
            $.post({
                url: 'ver_detalles.php',
                type: 'GET',
                data: { id: idP },
                success: function(response){
                    $('.modal-body').html(response);
                    $('#detailsModal').modal('show');
                }
            });
        });
    });
    </script>
</body>
</html>