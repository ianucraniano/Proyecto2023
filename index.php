<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio</title>
    <link href="https: //fonts.googleapis.com/css2? family= Roboto+Condensed:wght@700 & family= Roboto+Slab & display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
<link href="https://fonts.googleapis.com/css2?family=Gabarito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="./CSS/contacto.css">
    
  </head>

  <body>
    <?php

    include("header.php");
    ?>
    
    <main>
        <div class="carrusel mb-5 pb-5">

            <div id="carouselExampleInterval" class="carousel slide container" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./imagenes/imagen22.jpg" class="d-block w-100 imagenes" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="./imagenes/imagen3.jpg" class="d-block w-100 imagenes" alt="...">
                  </div>
                 
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </main>

   

<section class= " principal">


<div class= "bienvenido">
  <h1><strong>¡Bienvenido</strong> al museo de San Cristobal!</h1>
  
</div>
<div class="bienvenido">

  <h2>PLANEA TU VISITA</h2>


</div>



</section>







<footer>

<div class="contacto">
  <div>

    <h2><u>Contacto</u></h2>
    <p><strong>Direccion</strong></p>
    <p>Lisandro de la torre 1376</p>
    <p>San Cristobal - Santa Fe - Argentina</p>
    <p><strong>Telefono</strong></p>
    <p>+54 3408-678965</p>
  </div>
  <div class="form-contacto">

    <form action="">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="escriba su nombre completo">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
    </form>
  </div>
</div>



</footer>















































































    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <script src="./js/navbar.js"></script>
  </body>
</html>