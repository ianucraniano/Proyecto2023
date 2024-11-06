
<?php


require_once "conexion.php";




$sql= "SELECT piezas.idPiezas,piezas.numeroInventario,piezas.especie,piezas.estadoConservacion, donante.nombreyape,piezas.fechaIngreso,piezas.clasificacion
FROM piezas, donante
WHERE (piezas.Donante_idDonante1=donante.idDonante) ";


$result=mysqli_query($conex,$sql);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especies</title>

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
 
</head>
<body>

    <?php 
    include ("header.php") ;
    
    ?>


<style>
        .button-33 {
  background-color: #c2fbd7;
  border-radius: 100px;
  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
  color: green;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-33:hover {
  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}
    </style>

<section>






<table class="table table-striped table-hover">



    <div class="text-center mt-5 mb-3 "><h1>Especies</h1></div>

    <table class="table table-striped table-hover container">
        <div class="p-4 text-center">
            <a href="colecciones.php" class="button-33" role="button">Volver</a>
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
        <td><?php echo $fila["nombreyape"]?></td>
        <td><?php echo $fila["fechaIngreso"]; ?></td>
        <td><?php echo $fila["clasificacion"]; ?></td>
                
        <td> <button class="btn btn-info view-details" title="Ver detalles" data-id="<?php echo $fila['idPiezas']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/></svg></button>
       
        </td>

</tr>

<?php
}
?>   
                


</tbody>

</table>
<!-- Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailsModalLabel">Detalles de la Pieza</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Aquí se cargarán los detalles -->
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
          echo "<div class='container text-center lead my-3 py-3'><div class='alert alert-danger my-5 py-4'><p><em>No existen especies! </em><a href='pagAdmin.php' class='text-primary lead ms-2'>Volver</a></p></div></div>";
         }
	   ?>  

</section>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
 document.addEventListener('DOMContentLoaded', function() {
            // Selecciona todos los botones con la clase 'view-details'
            let buttons = document.querySelectorAll('.view-details');
            
            // Añade un evento de clic a cada botón
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Obtiene el ID de los datos del atributo data-id
                    let id = this.getAttribute('data-id');
                    
                    // Realiza una solicitud AJAX para obtener los detalles
                    $.ajax({
                        url: 'ver_detalles.php',
                        method: 'GET',
                        data: { id: id },
                        success: function(response) {
                            // Carga los detalles en el cuerpo del modal
                            $('#detailsModal .modal-body').html(response);
                            // Muestra el modal
                            $('#detailsModal').modal('show');
                        },
                        error: function() {
                            alert('Error al cargar los detalles.');
                        }
                    });
                });
            });
        });

    function showAlert(message, type) {
        Swal.fire({
            title: type === 'success' ? '¡Éxito!' : '¡Error!',
            text: message,
            icon: type,
            timer: 3000,
            showConfirmButton: false
        }).then(() => {
            window.location.href = 'menupiezas.php';
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