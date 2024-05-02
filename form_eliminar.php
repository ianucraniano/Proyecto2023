<?php
session_start();




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

include("header.php");
?>
 
<section>
 
 <div class="container mt-2 mb-5">
 <div class="text-center my-5 text-primary"><h2>Eliminar Datos Personales</h2></div>	
       
        <form class="row g-3" action="eliminar.php" method="post">

                <input type="hidden" class="form-control" name="idusuario" id="idusuario" value="<?php echo $fila['idusuario'];?>">
                
                <div class="col-sm-6">
                <label for="nombre" class="form-label">* Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Editar tu Nombre" value="<?php echo $fila['nombre'];?>" disabled>
                </div>

                <div class="col-sm-6 mb-3">
                <label for="apellido" class="form-label">* Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu Apellido" value="<?php echo $fila['apellido'];?>" disabled>
                </div>

                <div class="col-sm-6 mb-3">
                <label for="telefono" class="form-label">* Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingresa tu telefono" value="<?php echo $fila['telefono'];?>" disabled>
                </div>

                <div class="col-sm-6 mb-3">
                <label for="dni" class="form-label">* DNI</label>
                <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI de 8 dígitos numéricos" value="<?php echo $fila['dni'];?>" disabled>
                </div>

                <div class="col-sm-6 mb-3">
                <label for="fecha" class="form-label">* Fecha de alta</label>
                <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Ingresa tu fecha de nacimiento" value="<?php echo $fila['fecha_alta'];?>" disabled>
                </div>

                <div class="col-sm-6 mb-3">
                <label for="email" class="form-label">* Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu Correo Electrónico" value="<?php echo $fila['email'];?>" disabled>
                </div>

                <div class="col-sm-6 mb-3" hidden>
                <label for="pass" class="form-label">* Clave</label>
                <input type="text" class="form-control" name="pass" id="pass" placeholder="Ingresa una clave de 8 caracteres como mínimo" value="<?php echo $fila['clave']; ?>" disabled>
                </div>    

                <div class="col-12 text-center">
                    <div> <h5> ¿Estas seguro que quieres eliminar este usuario?</h5>
                        <br>
                <button type="submit" class="btn btn-primary btn-lg" name="btn_editar" id="editar">Confirmar</button>
                <a class="btn btn-danger btn-lg ms-2" href="listado.php" role="button">Cancelar</a>
                </div>
        
        </form>
        
</div>

</div>

</section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>