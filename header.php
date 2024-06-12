
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https: //fonts.googleapis.com/css2? family= Roboto+Condensed:wght@700 & family= Roboto+Slab & display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">     -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

</head>
<body>

<style>
 

nav  {
  font-family: "Cabin", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
    
}
.nav-link {
  font-family: "Cabin", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;

}

ul li a:hover{
  background-color: #1ed138;
  transition: .5s all;
  border-radius: 5px;
}
.login{
  background: rgb(30,209,56);
  background: linear-gradient(90deg, rgba(30,209,56,1) 35%, rgba(17,210,145,1) 64%, rgba(0,212,255,1) 100%);
  border-radius:50%;
  transition: .5s all;
}
ul li .login:hover{
  background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(245,253,45,1) 100%);
border-radius:50%;
transition: .5s all;


}
</style>      
          
       


<header>


<nav class="navbar navbar-expand-lg bg-success border-bottom border-body" >
  <div class="container-fluid">
<img src="./imagenes/museo-britanico.png" alt="Bootstrap" width="30" height="24">
    <a class="navbar-brand  text-light" href="" href="https://www.flaticon.es/iconos-gratis/museo" title="museo iconos">&nbsp;  MuseoSancris</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" navbar-collapse  " id="navbarSupportedContent">

<?php

      if(!isset($_SESSION["dniadmin"])&& !isset($_SESSION["dnigerente"])){
        ?>
        <ul class="nav justify-content-center ">
          
           <li class="nav-item">
            <a class="nav-link  text-light" aria-current="page" href="index.php">El museo</a>
          </li>
         
          
          <li class="nav-item">
            <a class="nav-link text-light" href="colecciones.php">Colecciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="conservacion.php">Conservación</a>
          </li>
  
             
        </ul> 

    <ul class='navbar-nav ms-auto'>
        <li class="nav-item "> 
            <a class=" nav-link text-light login shadow" title="Ingresar" href="login.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg> </a>     
        </li> 
      </ul>           
      
        
      <?php
      }elseif(isset($_SESSION["dniadmin"])){

      
        
          ?>
          <ul class="navbar-nav ms-auto">
          
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Admin: <strong class="text-warning"><?php echo $_SESSION['nombreadmin'] ." ".$_SESSION['apellidoadmin'] ?></strong></a>
          </li>
      
        <li class="nav-item">
          <a class="nav-link text-light" href="pagAdmin.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="listadoadm.php">Listado usuarios</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-light" href="form_agregar.php">Agrega usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="menupiezas.php">Piezas</a>
      </li>
        <li class="nav-item">
        <a class="nav-link text-light" href="salir.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z"></path><path d="m11 16 5-4-5-4v3.001H3v2h8z"></path></svg> Salir</a>
      </li>
      </ul>
      <?php

        }elseif(isset($_SESSION["dnigerente"])){
          ?>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link text-light" href="#">Gerente: <strong class="text-warning"><?php echo $_SESSION['nombregerente'] ." ".$_SESSION['apellidogerente'] ?></strong></a>
          </li>
            <li class="nav-item">
            <a class="nav-link text-light" href="pagGerente.php">Inicio</a>
          </li>
          <li class="nav-item">
        <a class="nav-link text-light" href="menupiezas.php">Piezas</a>
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

