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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
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
</style>

    <h3>Colección ¿que vamos a ver?</h3>
    
        <a class="btn" href="listado.php">Listado de especies</a>
     
<section>
<div class="row p-3">
  <div class="col-3">
    <div class="">
<div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
  <img src="./imagenes/zoologia.jpg" class="card-img-top" alt="...">
  <div class="content">
    <h5 class="card-title">Zoología </h5>
   <!-- <p><a href="#" class="link-underline-primary">Vertebrados</a></p>
    <p><a href="#" class="link-underline-primary">Invertebrados</a></p>-->

    
    
  </div>
</div>
</div>
</div>
<div class="col-3">
    <div class="">
<div class="card  mb-3  shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
  <img src="./imagenes/botanica.jpg" class="card-img-top" alt="...">
  <div class="content">
    <h5 class="">Botánica</h5>
   <!-- <p><a href="#" class="link-underline-primary">Algas</a></p>
    <p><a href="#" class="link-underline-primary">Briofitos</a></p>
    <p><a href="#" class="link-underline-primary">Pteridofitas</a></p>
    <p><a href="#" class="link-underline-primary">Gimnospermas</a></p>
    <p><a href="#" class="link-underline-primary">Angiospermas</a></p>-->
    
  </div>
</div>
</div>
</div>
<div class="col-3">
    <div class="">
<div class="card  mb-3  shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
  <img src="./imagenes/paleontologia.jpg" class="card-img-top" alt="...">
  <div class="content">
    <h5 class="">Paleontología</h5>
    
  </div>
</div>
</div>
</div>
<div class="col-3">
    <div class="">
<div class="card  mb-3  shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
  <img src="./imagenes/arqueologia.webp" class="card-img-top" alt="...">
  <div class="content">
    <h5 class="">Arqueología</h5>
   
   
  </div>
</div>
</div>
</div>
<div class="row p-3">
  <div class="col-3">
    <div class="">
<div class="card  mb-3  shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
  <img src="./imagenes/osteologia.jpg" class="card-img-top" alt="...">
  <div class="content">
    <h5 class="">Osteología</h5>
  
    
  </div>
</div>
</div>
</div>
<div class="col-3">
    <div class="">
<div class="card  mb-3 shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
  <img src="./imagenes/geologia.jpg" class="card-img-top" alt="...">
  <div class="content">
    <h5 class="">Geología</h5>
    
  </div>
</div>
</div>
</div>
<div class="col-3">
    <div class="  mb-3">
<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
  <img src="./imagenes/ictiologia.jpg" class="card-img-top" alt="...">
  <div class="content">
    <h5 class="">Ictiología</h5>
    
  </div>
</div>
</div>
</div>
<div class="col-3">
    <div class="  mb-3">
<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 14rem;">
  <img src="./imagenes/oologia.jpg" class="card-img-top" alt="...">
  <div class="content">
    <h5 class="">Oología</h5>
    
   
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