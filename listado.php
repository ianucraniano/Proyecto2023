<?php
// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 $sql="SELECT * FROM Socios ORDER BY idsocio";

 $result=mysqli_query($conex,$sql);

 if (mysqli_num_rows($result)>0){

         
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Listado de Datos Personales</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
 </head>
 
 <body>
     
    <?php
        
        include('header.php');

    ?>
      
    <section>
     
    <div class="container text-center ">
        <div class="text-center mt-5 mb-3"><h3>Listado de Socios</h3></div>
        
        <table class="table table-striped table-hover">
            <div class="row">
                <div class="col-9"></div>
                    <div class="col-3">
                    <div class="btn btn-primary btn-sm" > <a class="text-decoration-none text-white" href="insertar_datos.php">Agregar</a></div>
                </div>
            </div>

            <thead>
                <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
        
            <tbody>

            <?php

                While ($fila=mysqli_fetch_array($result)){
    
            ?>
        
                <tr>
                    
                    <th scope="row"><?php echo $fila["dni"]; ?></th>
                    <td><?php echo $fila["nombre"]; ?></td>
                    <td><?php echo $fila["apellido"]; ?></td>
                    <td><?php echo $fila["email"]; ?></td>
                    <td><a class="me-3" href="form-editar.php?id=<?php echo $fila ['idsocio'];?>">Editar</a>
                    <a href="borrar.php?id=<?php echo $fila ['idsocio'];?>">Borrar</a></td>

                </tr>
                

            <?php
            }
            ?>         
            
            </tbody>



    </table></div>

   
   <?php
     }
   ?>  
    
    </section>    

    <?php

    include('footer.php');

    ?>
   
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>