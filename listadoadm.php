<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>
    

<section>

<div class="container text-center ">
        <div class="text-center mt-5 mb-3"><h3>Listado de usuarios</h3></div>
        
        <table class="table">
            <div class="row">
               

                <div class="col-3">
                
                    <div class="btn btn-primary btn-sm " > <a class="text-decoration-none text-white" href="agregar.php">Agregar</a></div>
                
                </div>
            </div>

            <thead class="table-dark">
                <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
        
            <tbody>

        
        
                <tr>
                    
                    <th scope="row"><?php echo $fila["dni"]; ?>
                    </th>
                        <td><?php echo $fila["nombre"]; ?></td>
                        <td><?php echo $fila["apellido"]; ?></td>
                        <td><?php echo $fila["email"]; ?></td>
                        <td><a class="me-1 btn btn-outline-success btn-sm " href="form-editar.php?id=<?php echo $fila ['idusuario'];?>">editar</a>
                        <a class="me-1 btn btn-outline-danger btn-sm" href="form_eliminar.php?id=<?php echo $fila ['idusuario'];?>">eliminar</a>
                        </td>

                </tr>
                

               
            
            </tbody>



    </table>
</div>



</section>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>