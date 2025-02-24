
<?php
// Conexion a la Base de Datos Biblioteca 
session_start();
require_once "conexion.php";

if(!isset($_SESSION['dniadmin'])&&!isset($_SESSION['dnigerente'])){
    header("Location:index.php");
}

//$id = $_GET['idPiezas'];

$sql= "SELECT piezas.idPiezas,piezas.numeroInventario,piezas.especie,piezas.estadoConservacion, donante.nombreyape,piezas.fechaIngreso,piezas.clasificacion
FROM piezas, donante
WHERE (piezas.Donante_idDonante1=donante.idDonante) ";


$result=mysqli_query($conex,$sql);

if(!empty($_POST["num"])){
  
    $clave=$_POST["num"];
    $sql1="SELECT  *
    FROM piezas, donante
    WHERE (piezas.Donante_idDonante1=donante.idDonante) and numeroInventario like '%$clave%' ";
   $resultado=mysqli_query($conex,$sql1); 
    
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu piezas</title>

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
 
</head>
<body>

    <?php 
    include ("header.php") ;
    
    ?>


<section>






<table class="table table-striped table-hover shadow">



    <div class="text-center mt-5 mb-3"><h1>Menu de piezas</h1></div>
    <table class="table table-striped table-hover container shadow">
        
        
              </div>
<div class="container col-md-6 p-2">
    <!-- Barra de búsqueda con funcionalidad en tiempo real -->
    <form class="d-flex align-items-center shadow-sm rounded p-3 bg-light" action="menupiezas.php" method="post" onsubmit="return false;" style="border: 1px solid #ccc;">
        <input 
            class="form-control me-2 search-bar border-0" 
            type="search" 
            placeholder="🔍 Buscar por número de inventario..." 
            name="num" 
            id="num" 
            style="font-size: 1rem; padding: 0.8rem;"
            oninput="searchInventory(this.value)"
        >
        <button 
            class="btn btn-success px-4 py-2" 
            type="button" 
            style="font-size: 1rem; font-weight: 500;"
        >
            Buscar
        </button>
    </form>
    <!-- Contenedor para los resultados -->
    <div id="search-results" class="mt-3"></div>
</div>


        
        
        <div class="text-center p-3">
        <div class="text-center mb-3">
                <a class="btn btn-success btn-sm" href="form_agregarp.php" role="button">Agregar nueva pieza</a>
            </div>
            
      
    


    <thead style="background: rgb(34,152,83);
        background: linear-gradient(0deg, rgba(34,152,83,1) 42%, rgba(13,148,44,1) 72%);">
    <tr >
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
    
    <th scope="row">
    </th>
    <th scope="row"><?php echo $fila["numeroInventario"]; ?>
    </th>
        <td><?php echo $fila["especie"]; ?></td>
        <td><?php echo $fila["estadoConservacion"]; ?></td>
        <td><?php echo $fila["nombreyape"]?></td>
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



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        function searchInventory(query) {
        const resultsContainer = document.getElementById('search-results');

        if (query.trim() === "") {
            resultsContainer.innerHTML = ""; // Limpia los resultados si no hay texto
            return;
        }

        // Realiza la solicitud AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "busquedaPiezas.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                resultsContainer.innerHTML = xhr.responseText; // Inserta los resultados
            }
        };

        // Envía el texto de búsqueda
        xhr.send(`num=${encodeURIComponent(query)}`);
    }
    </script>
      
</body>
</html>