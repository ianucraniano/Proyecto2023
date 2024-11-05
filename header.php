
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https: //fonts.googleapis.com/css2? family= Roboto+Condensed:wght@700 & family= Roboto+Slab & display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head>
<body>

<style>
 

nav  {
  position: fixed;
  font-family: "Cabin", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
    
}
.navbar-links a {
    color: #fff;
    text-decoration: none;
    font-size: 1.1rem;
    transition: color 0.3s ease, border-bottom 0.3s ease;
    border-bottom: 2px solid transparent;
}
.navbar-links a:hover {
    color: #0ddb3f;
    border-bottom: 2px solid #0ddb3f;
}

.nav-link {
  font-family: "Cabin", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;

}





</style>      
          
       


<header>


<nav class="navbar navbar-expand-lg bg-success border-bottom border-body" >
  <div class="container-fluid">
<img src="./imagenes/museo-britanico.png" alt="Bootstrap" width="30" height="24">
    <a class="navbar-brand  text-light" href="index.php" href="https://www.flaticon.es/iconos-gratis/museo" title="museo iconos">&nbsp;  MuseoSancris</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" navbar-collapse  " id="navbarSupportedContent">

<?php

      if(!isset($_SESSION["dniadmin"])&& !isset($_SESSION["dnigerente"])){
        ?>
        <ul class="nav justify-content-center navbar-links ">
          
           
         
          
          <li class="nav-item">
            <a class="nav-link text-light" href="colecciones.php">Colecciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="conservacion.php">Conservación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#visita">Planifica tu visita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#contacto">Contacto</a>
          </li>
  
             
        </ul> 

    <ul class='navbar-nav ms-auto navbar-links'>
        <li class="nav-item "> 
            <a class=" nav-link text-light  " title="Ingresar" href="login.php">Ingresar</a>     
        </li> 
      </ul>           
      
        
      <?php
      }elseif(isset($_SESSION["dniadmin"])){

      
        
          ?>
          <ul class="navbar-nav ms-auto ">

        
          

         


         

      
        <li class="nav-item navbar-links">
          <a class="nav-link text-light" href="pagAdmin.php">Inicio</a>
        </li>
        <li class="nav-item navbar-links">
          <a class="nav-link text-light" href="listadoadm.php">Listado usuarios</a>
        </li>
        <li class="nav-item navbar-links">
        <a class="nav-link text-light" href="form_agregar.php">Agrega usuario</a>
      </li>
      <li class="nav-item navbar-links">
        <a class="nav-link text-light" href="menupiezas.php">Piezas</a>
      </li>
        <li class="nav-item">
        <div class="dropdown">
            <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong class="text-warning"><?php echo $_SESSION['nombreadmin'] ." ".$_SESSION['apellidoadmin'] ?></strong>
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="informacion_user.php">Datos personales</a></li>
              <li> <a class="dropdown-item text-info" href="salir.php"> Salir</a></li>
            </ul>
          </div>
       
      </li>
      </ul>
      <?php

        }elseif(isset($_SESSION["dnigerente"])){
          ?>
          <ul class="navbar-nav ms-auto ">
            
            <li class="nav-item navbar-links">
            <a class="nav-link text-light" href="pagGerente.php">Inicio</a>
          </li>
          <li class="nav-item navbar-links">
        <a class="nav-link text-light" href="menupiezas.php">Piezas</a>
        </li>
        <li class="nav-item">
        <div class="dropdown">
            <a class="btn btn-success dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <strong class="text-warning"><?php echo $_SESSION['nombregerente'] ." ".$_SESSION['apellidogerente'] ?></strong>
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="informacion_user.php">Datos personales</a></li>
              <li> <a class="dropdown-item text-info" href="salir.php"> Salir</a></li>
            </ul>
          </div>
        
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

