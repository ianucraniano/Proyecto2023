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
    

 
<section>
 
 <div class="container mt-2 mb-5">
 <div class="text-center my-5 text-primary"><h2>Eliminar Especie</h2></div>	
       
        <form class="row g-3" action="eliminar.php" method="post">

                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $fila['id'];?>">
                
    


                <div class="col-sm-6">
    <label for="num" class="form-label">* Nro de inventario</label>
    <input type="text" class="form-control" name="num" id="mun" placeholder="" value="<?php echo $fila['num']; ?>" disabled>
  </div>
  <div class="col-sm-6">
    <label for="nombre" class="form-label">* Especie</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Editar el Nombre de la especie" value="<?php echo $fila['nombre']; ?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="apellido" class="form-label">* Estado de conservación</label>
    <input type="text" class="form-control" name="apellido" id="estado" placeholder="Ingresa su estado de conservación" value="<?php echo $fila['estado']; ?>" disabled>
  </div>
   <div class="col-sm-6 mb-3">
    <label for="fecha" class="form-label">* Fecha de ingreso</label>
    <input type="date" class="form-control" name="fecha" id="fecha" placeholder="Ingresa fecha de ingreso" value="<?php echo $fila['fecha']; ?>" disabled>
  </div>
  
    <div class="col-sm-6 mb-3">
    <label for="donante" class="form-label">* Donante</label>
    <input type="text" class="form-control" name="donante" id="donante" placeholder="Ingresa tu Correo Electrónico" value="<?php echo $fila['email']; ?>" disabled>
  </div>

  <div class="col-sm-6 mb-3">
    <label for="clasificacion" class="form-label">* Clasificación</label>
    <input type="text" class="form-control" name="clasificacion" id="clasificacion" placeholder="Ingresa su clasificacion" value="<?php echo $fila['email']; ?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="email" class="form-label">* Observación</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Ingresa tu Correo Electrónico" value="<?php echo $fila['email']; ?>" disabled>
  </div>
  <div class="col-sm-6 mb-3">
  <label for="tipo" class="form-label">* Clasificación</label>
  <select class="form-control" name="tipo" id="tipo" disabled>
    <option value="1" <?php if ($fila['especie'] == 1) echo "selected"; ?>>zoología-vertebrados</option>
    <option value="2" <?php if ($fila['especie'] == 2) echo "selected"; ?>>zoologÍa-invertebrados</option>
    <option value="3" <?php if ($fila['especie'] == 3) echo "selected"; ?>>Botánica-algas</option>
    <option value="4" <?php if ($fila['especie'] == 4) echo "selected"; ?>>Botánica-Briófitos</option>
    <option value="5" <?php if ($fila['especie'] == 5) echo "selected"; ?>>Botánica-Pteridófitos</option>
    <option value="6" <?php if ($fila['especie'] == 6) echo "selected"; ?>>Botánica-gimnospermas</option>
    <option value="7" <?php if ($fila['especie'] == 7) echo "selected"; ?>>Botánica-angiospermas</option>
    <option value="8" <?php if ($fila['especie'] == 8) echo "selected"; ?>>Paleontología</option>
     <option value="9" <?php if ($fila['especie'] == 9) echo "selected"; ?>>Arqueología</option>
   <option value="10" <?php if ($fila['especie'] == 10) echo "selected"; ?>>Osteología</option>
  <option value="11" <?php if ($fila['especie'] == 11) echo "selected"; ?>>Geología</option>
 <option value="12" <?php if ($fila['especie'] == 12) echo "selected"; ?>>Ictiología</option>
  <option value="13" <?php if ($fila['especie'] == 13) echo "selected"; ?>>Oología</option>
  </select>
</div> 

                <div class="col-12 text-center">
                    <div> <h5> ¿Estas seguro que quieres eliminar esta especie?</h5>
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