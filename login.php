
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion Datos Formulario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="./CSS/style.css">

<link rel="stylesheet" href="./CSS/estilo.css">
</head>
<body>
 
 
   <?php
     
     include('header.php');

   ?>
      
            
    
   <!-- Index.php contiene un Formulario --> 

   
   
 <section>
     
<div class="container">
    <div class="row justify-content-center pt-4 mt-5">
        <div class="col-md-4 formulario">
            <form action="ingresar.php" method="post" class="mt-5">
            <div class="form-group text-center titulo">
                <h1 class="text-black"><u>Iniciar sesión</u></h1>
            </div>
            <label for="tipo" class="form-label"> Tipo de usuario</label>
            <div class="form-floating mb-3">      
         <select class="form-control" name="tipo_usuario" id="tipo_usuario" required>
         <option selected disabled="">Selecciona un rol</option>
           <option value="administrador">Administrador</option>
           <option value="gerente">Gerente</option>
         </select>
        </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="dni" id="dni" placeholder="">
                <label class="labeltexto" for="floatingInput">Ingrese su dni</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" name="clave" id="clave"  placeholder="">
                <label class="labeltexto" for="floatingPassword">Ingrese su contraseña</label>
              </div>
              <div class="col-12 text-center">
  <button type="submit" class=" btn-sm btn btn-outline-light" name="btn_ingresar" id="btn_ingresar">Ingresar</button>

  </div>
        </form>
        </div>
    </div>
</div>



  </section>

  
  <?php
    
    // Uso de GET para mostrar Mensaje resultante 

    if (isset($_GET["mensaje"])){

    	 if($_GET["mensaje"]!="ok"){

         echo "<div class='text-center mt-4 mb-5'><div class='alert alert-danger' role='alert'><strong>".$_GET["mensaje"]."</strong></div></div>"; 
         
       }else{
         
        echo "<div class='text-center mt-4 mb-5'><div class='alert alert-success' role='alert'><strong>Acceso autorizado!</strong><a href='ingresar.php' class='text-primary ms-3'>Volver al Inicio</a></div></div>";  
       
       }  
  } 
  ?> 

   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>