<?php
// Conexion a la Base de Datos Biblioteca 
session_start();
require_once "conexion.php";
if(!isset($_SESSION['dniadmin'])){
    header("Location:index.php");
}




$sql="SELECT usuarios.* FROM usuarios";






$result=mysqli_query($conex,$sql);


if(!empty($_POST["dniusu"])){
  
    $clave=$_POST["dniusu"];
    $sql1="SELECT  *
    FROM usuarios
    WHERE dni like '%$clave%'  ORDER BY idusuarios";
   $result=mysqli_query($conex,$sql1); 
    
}







  

 //die($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de usuarios</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- SweetAlert2 CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>
<?php

include("header.php");
?>



<body>
    

<section>
    

        <div class="text-center mt-5 mb-3"><h3>Listado de usuarios</h3></div>
       
  <div class="container-fluid col-4 p-4">
    <form class="d-flex" role="buscar" action="listadoadm.php" method="post">
      <input class="form-control me-2" type="search" placeholder="Buscar..." name="dniusu" id="dniusu" aria-label="Search">
      <button class="btn btn-outline-success"  type="submit">Buscar</button>
    </form>
  </div>
  <div role="alert" class="alert p-4 mt-3 text-center"></div>
        <table class="table table-success table-striped">

        <div class="text-center mt-5 mb-3"><h1>Listado de usuarios</h1>
        
        <table class="table table-success table-striped container">

       <thead class="table-dark">
        <tr class="table-primary">
        

            </div>

            <thead class="table-dark">
               
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo de usuario</th>
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
                    
                    
                    <th scope="row"><?php echo $fila["dni"]; ?>
                    </th>
                        <td><?php echo $fila["nombre"]; ?></td>
                        <td><?php echo $fila["apellido"]; ?></td>
                        <td><?php echo $fila["email"]; ?></td>

                        <td><?php echo $fila["tipo_usuario"]; ?></td>

                     

                        <td><a class="me-1 btn btn-outline-success btn-lg " title="Editar" href="form_editar.php?idusuarios=<?php echo $fila ['idusuarios'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a>
                        <a class="me-1 btn btn-outline-danger btn-lg" title="Eliminar" href="form_eliminar.php?idusuarios=<?php echo $fila ['idusuarios'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg></a>
                      

                  
                  
                  
                    </td>

                </tr>
                
                <?php
            }
            ?>   
                
            
            </tbody>



    </table>
</div>



</section>



<?php
	     }else{

          echo "</table></div>";
          echo "<div class='container text-center lead my-3 py-3'><div class='alert alert-danger my-5 py-4'><p><em>No existen usuarios! </em><a href='index.php' class='text-primary lead ms-2'>Volver</a></p></div></div>";
         }
	   ?>  



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
    function showAlert(message, type) {
        Swal.fire({
            title: type === 'success' ? '¡Éxito!' : '¡Error!',
            text: message,
            icon: type,
            timer: 3000,
            showConfirmButton: false
        }).then(() => {
            window.location.href = 'listadoadm.php';
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