
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https: //fonts.googleapis.com/css2? family= Roboto+Condensed:wght@700 & family= Roboto+Slab & display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">     -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>



<header>


<nav class="navbar navbar-expand-lg bg-success border-bottom border-body" >
  <div class="container-fluid">
<img src="./imagenes/museo-britanico.png" alt="Bootstrap" width="30" height="24">
    <a class="navbar-brand  text-light" href="" href="https://www.flaticon.es/iconos-gratis/museo" title="museo iconos">&nbsp;  MuseoSancris</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" navbar-collapse nav justify-content-end " id="navbarSupportedContent">
<?php

      if(!isset($_SESSION["dniadmin"])&& !isset($_SESSION["dnigerente"])){
        ?>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link  text-light" aria-current="page" href="index.php">El museo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="visita.php">Visitas</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-light" href="colecciones.php">Colecciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="conservacion.php">Conservación</a>
          </li>
         
          <li class="nav-item"> 
            <a class="bx bx-user nav-link text-light  " href="login.php"> Ingresar</a>
         
        </li> 
          </li>        
        </ul>
        
      <?php
      }elseif(isset($_SESSION["dniadmin"])){

      
        
          ?>
          <ul class="navbar-nav ">
          <li class="nav-item">
          <a class="nav-link" href="#"> <?php echo "Admin:". $_SESSION['nombreadmin']. " ". $_SESSION['apellidoadmin'] ?></a>
        </li>	
         
      
        <li class="nav-item">
          <a class="nav-link text-light" href="listadoadm.php">Listado Usuarios</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-light" href="form_agregar.php">Agrega usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="menuespecies.php">Especies</a>
      </li>
        <li class="nav-item">
        <a class="nav-link text-light" href="salir.php">Salir</a>
      </li>
      </ul>
      <?php

        }elseif(isset($_SESSION["dnigerente"])){
          ?>
          <ul class="navbar-nav ">
          <li class="nav-item">
          <a class="nav-link  text-light" aria-current="page" href="index.php">El museo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="visita.php">Visitas</a>
        </li><li class="nav-item">
        <li class="nav-item">
          <a class="nav-link text-light" href="colecciones.php">Colecciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="conservacion.php">Conservación</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-light" href="salir.php">Salir</a>
      </li>
      </ul>
      <?php
        }
      ?>
    
    </div>
  </div>
</nav>
    
</header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <script src="./js/navbar.js"></script>
</body>
</html>

