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

<div class="container mt-2 mb-5">
  <div class="text-center mt-5 mb-2"><h2>Editar datos personales</h2></div>	
  <br>
   <br>
  	
  <form class="row g-3" action="editar.php" method="POST">
  
  <div class="col-sm-6">
    <label for="nombre" class="form-label">* Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Editar tu Nombre" value="<?php echo $fila['nombre']; ?>" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="apellido" class="form-label">* Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu Apellido" value="<?php echo $fila['apellido']; ?>" required>
  </div>
  <div class="col-sm-6 mb-3">
    <label for="telefono" class="form-label">* Telefono</label>
    <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ingresa tu telefono" value="<?php echo $fila['telefono']; ?>" required>
  </div>
   <div class="col-sm-6 mb-3">
    <label for="dni" class="form-label">* DNI</label>
    <input type="number" class="form-control" name="dni" id="dni" placeholder="Ingresa DNI de 8 dígitos numéricos" value="<?php echo $fila['dni']; ?>" required>
  </div>
  
    <div class="col-sm-6 mb-3">
    <label for="email" class="form-label">* Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Ingresa tu Correo Electrónico" value="<?php echo $fila['email']; ?>" required>
  </div>

 <div class="col-sm-6 mb-3">
    <label for="pass" class="form-label">* Clave</label>
    <input type="password" class="form-control" name="pass" id="pass" placeholder="Ingresa una clave de 8 caracteres como mínimo" value="<?php 
    echo $_SESSION['miclave'];?>" required>
  </div>
 
  <div class="col-sm-6 mb-3">
  <label for="tipo" class="form-label">* Tipo de Usuario</label>
  <select class="form-control" name="tipo" id="tipo" required>
    <option value="1" <?php if ($fila['tipodeusuario'] == 1) echo "selected"; ?>>Administrador</option>
    <option value="2" <?php if ($fila['tipodeusuario'] == 2) echo "selected"; ?>>Gestor</option>
  </select>
</div>

  <div class="col-sm-6 mb-3">
  

</div>

  <div class="col-12 text-center">

  <button type="submit" class="btn btn-primary btn-lg" name="enviar" id="enviar">Actualizar datos</button>
  <button type="reset" class="btn btn-danger btn-lg" name="cancelar" id="cancelar">Cancelar</button>
  
  </div>
  
  </form>


</section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
