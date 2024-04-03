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
        <div class="text-center mt-5 mb-3"><h3>Menu de especies</h3></div>
        
        <table class="table">
            <div class="row">
               

           
                
                    
                
                </div>
            </div>

            <thead class="table-dark">
                <tr>
                <th scope="col">Nro de inventario</th>
                <th scope="col">Especie</th>
                <th scope="col">Estado</th>
                <th scope="col">Donante</th>
                <th scope="col">FechaIngreso</th>               
                <th scope="col">Clasificación</th>
                
                </tr>
            </thead>
        
            <tbody>

        
        
                <tr>
                    
                    <th scope="row"><?php echo $fila["nroinventario"]; ?>
                    </th>
                        <td><?php echo $fila["nombre"]; ?></td>
                        <td><?php echo $fila["estado"]; ?></td>
                        <td><?php echo $fila["donante"]; ?></td>
                        <td><?php echo $fila["fecha"]; ?></td>
                        <td><?php echo $fila["clasificacion"]; ?></td>
                        <td><a class="me-1 btn btn-outline-success btn-sm " href="editarespecie.php?id=<?php echo $fila ['num'];?>">editar</a>
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