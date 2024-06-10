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
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


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

        <table class="table table-success table-striped">
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
                        <td><a class="me-1 btn btn-outline-success btn-sm " href="form_editar.php?idusuarios=<?php echo $fila ['idusuarios'];?>">Editar</a>
                        <a class="me-1 btn btn-outline-danger btn-sm" href="form_eliminar.php?idusuarios=<?php echo $fila ['idusuarios'];?>">Eliminar</a>
                  
                  
                  
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
          echo "<div class='container text-center lead my-3 py-3'><div class='alert alert-danger my-5 py-4'><p><em>No existen Socios! </em><a href='index.php' class='text-primary lead ms-2'>Volver</a></p></div></div>";
         }
	   ?>  




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>