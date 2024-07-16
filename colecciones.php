<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colecciones</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  -->
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anta&family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<?php

include("header.php");

?> 
<style>

   h3{ 
    font-family: 'Merriweather', serif;
    padding: 40px;
    display: flex;
    justify-content: center;

   }
   .content h5{
    display: flex;
    justify-content: center;
    

   }
   .card{
    height: 20em;
    border-radius: 5px;
    background-size: cover;
    overflow: hidden;

   }
   .content{
    background-color: #82E0AA;
    display: flex;
    aling-items: center;
    justify-content: center;
    border-radius: 5px;
    opacity: 0;
    transition: .5s;
   }
   .content h5 p{
    color: #fff;
   }
   .card:hover .content{
        opacity: 1;

   }
   .btn{
    position: relative;
    display: flex;
    justify-content: center;
    background-color: rgb(210, 255, 200);
    text-decoration: none;
    color: black;
    transition: .5s ease;
    font-family: "Anta", sans-serif;
  font-weight: 400;
  font-style: normal;
  
}
   

   .btn:hover{
    background-color: #62F06E;

   }

   .button-85 {
  display: flex;
  justify-content: center;
  padding: 0.3em 1em; 
  border: none;
  outline: none;
  color: #000; 
  background: #fff; 
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 200px;
  margin: 0 auto;
  text-decoration:none;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: 2px;
  left: 2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #fff;
  left: 0;
  top: 0;
  border-radius: 10px;
}

</style>

    <h3>Colección ¿que vamos a ver?</h3>
    
    <a class="button-85 " href="listado.php">
    Listado de especies
    </a>   
<br>
     <!--col-12 col-sm-6 col-md-4 col-lg-4 mb-4-->
<section>
  <div class="container">
    <div class="row p-3">
      <!-- Zoología -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
          <img src="./imagenes/zoologia.jpg" class="card-img-top" alt="Zoología">
          <div class="content">
            <h5 class="card-title">Zoología</h5>
          </div>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Más información</button>
        </div>
      </div>
      <!-- Modal Zoología -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¿Qué es?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla perferendis, nihil culpa, odio vero eos hic quis, ad excepturi minus a accusamus harum doloremque quisquam autem error maiores ipsa dolore.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Botánica -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
          <img src="./imagenes/botanica.jpg" class="card-img-top" alt="Botánica">
          <div class="content">
            <h5 class="card-title">Botánica</h5>
          </div>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">Más información</button>
        </div>
      </div>
      <!-- Modal Botánica -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel1">¿Qué es?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae tenetur esse quam? Maiores, quidem vero vel magni quam, et delectus, temporibus ut dolorum ab modi dolor minima veritatis officiis deleniti.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Paleontología -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
          <img src="./imagenes/paleontologia.jpg" class="card-img-top" alt="Paleontología">
          <div class="content">
            <h5 class="card-title">Paleontología</h5>
          </div>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal2">Más información</button>
        </div>
      </div>
      <!-- Modal Paleontología -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">¿Qué es?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam dolorem ad, consequatur a quis eaque nobis quos enim nulla at ducimus. Dolor illum est nesciunt qui fuga vero! Tempora, voluptatum?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Arqueología -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
          <img src="./imagenes/arqueologia.webp" class="card-img-top" alt="Arqueología">
          <div class="content">
            <h5 class="card-title">Arqueología</h5>
          </div>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal3">Más información</button>
        </div>
      </div>
      <!-- Modal Arqueología -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel3">¿Qué es?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro fugit qui quisquam recusandae magni iure eligendi praesentium, asperiores facere esse id sequi inventore! Impedit, dolorum vitae? Ex minus similique qui.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Osteología -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
          <img src="./imagenes/osteologia.jpg" class="card-img-top" alt="Osteología">
          <div class="content">
            <h5 class="card-title">Osteología</h5>
          </div>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal4">Más información</button>
        </div>
      </div>
      <!-- Modal Osteología -->
      <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel4">¿Qué es?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos quos provident inventore, iste laboriosam neque sint cumque, vero, iure blanditiis! Eius odio tempora necessitatibus maxime architecto beatae optio eveniet!
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Geología -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
          <img src="./imagenes/geologia.jpg" class="card-img-top" alt="Geología">
          <div class="content">
            <h5 class="card-title">Geología</h5>
          </div>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal5">Más información</button>
        </div>
      </div>
      <!-- Modal Geología -->
      <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel5">¿Qué es?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, quis accusantium. Culpa, temporibus error. Sequi rem vel esse non, beatae, rerum aliquid molestias cupiditate minima ducimus, quos reiciendis voluptate repellendus.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Ictiología -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
          <img src="./imagenes/ictiologia.jpg" class="card-img-top" alt="Ictiología">
          <div class="content">
            <h5 class="card-title">Ictiología</h5>
          </div>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal6">Más información</button>
        </div>
      </div>
      <!-- Modal Ictiología -->
      <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel6">¿Qué es?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea nostrum voluptatum quae, eum nobis voluptate facilis exercitationem unde voluptates, eius, inventore cupiditate! Aliquid ipsam dolorum quo molestiae deleniti, quis sit!
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Oología -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
          <img src="./imagenes/oologia.jpg" class="card-img-top" alt="Oología">
          <div class="content">
            <h5 class="card-title">Oología</h5>
          </div>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal7">Más información</button>
        </div>
      </div>
      <!-- Modal Oología -->
      <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel7">¿Qué es?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus atque sequi reprehenderit quis deleniti consectetur natus dolorem maxime, illo dolore nulla possimus debitis molestiae eligendi voluptatibus, vel explicabo inventore commodi.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>






<?php

include("footer.php");

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>