<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Museo de San Cristobal - Inicio</title>
    <link href="https: //fonts.googleapis.com/css2? family= Roboto+Condensed:wght@700 & family= Roboto+Slab & display=swap" rel="stylesheet">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="./CSS/contacto.css">
    <link rel="stylesheet" href="./CSS/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  </head>

  <body>
    <?php

    include("header.php");
    ?>

    <div class="fondo img-fluid">
      <h1 class="presentacion-pagina">Museo de la ciudad de San Cristobal</h1>
      

    </div>
    
    <!-- <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./imagenes/imagen.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./imagenes/imagen2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./imagenes/imagen3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->

<div class="flex justify-content-center text-center p-4">
  <h2>Visita nuestras redes sociales</h2>
</div>

<div class="wrapper p-2">
        <div class="icon facebook">
            <div class="tooltip">Facebook</div>
            <span><i class="fab fa-facebook-f"></i></span>
        </div>

        <div class="icon twitter">
            <div class="tooltip">Twitter</div>
            <span><i class="fab fa-twitter"></i></span>
        </div>

        <div class="icon instagram">
            <div class="tooltip">Instagram</div>
            <span><i class="fab fa-instagram"></i></span>
        </div>

        <div class="icon github">
            <div class="tooltip">Github</div>
            <span><i class="fab fa-github"></i></span>
        </div>

        <div class="icon youtube">
            <div class="tooltip">Youtube</div>
            <span><i class="fab fa-youtube"></i></span>
        </div>
    </div>
   

<section class= " principal">

<style>
  body{
    background-color: rgb(210, 255, 200);

  }
  .fondo{
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./imagenes/imagen.jpg");;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  height: 400px;
}
.presentacion-pagina{
  color: white ;
  font-family: "Cabin", sans-serif;
  display: grid;
  place-items: center;
  position: relative;
  top:140px;
}
  .presentacion{
    background-color: rgb(210, 255, 200);
  }
  .bienvenido{
    background-color: rgb(210, 255, 200);
    font-family: Georgia, 'Times New Roman', Times, serif;
    padding: 40px;
    display: flex;
    justify-content: center;
    
  }
 
  .coleccion{
    color: black;
  }

  footer{
    font-family: "Exo 2", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  }
.carrusel{
  height: 400px;
}
  

</style>

<div class= "presentacion">
  <br>
  <h2 class="bienvenido">¡Bienvenidos al museo de San Cristobal!</h2>
  <p class=" container-fluid">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam error inventore voluptatum quae ea vel nostrum temporibus minima, quisquam iusto? Veritatis sequi fuga consectetur, rerum necessitatibus eum iusto dolorum voluptatum?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam molestias fugiat libero fuga pariatur, eaque perspiciatis dolore totam ipsum debitis cupiditate beatae, voluptatum modi eligendi error placeat nam. Recusandae, sint?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam modi dicta porro! Autem repudiandae sunt reprehenderit accusamus laboriosam hic quasi ducimus, soluta a, ipsum quaerat ratione, dolorem quo minima quibusdam?
  </p>
  
</div>

<div class="container" >

  <h2 class="coleccion bienvenido ">ANIMALES EN PELIGRO DE EXTINCIÓN </h2>
  <div class="row p-3">
  <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4  ">
    
  <div class="card shadow" style="width: 18rem;">
  <img src="./imagenes/chimpamce.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">El chimpancé</h5>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Más información
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">El chimpancé</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Los altos niveles de caza furtiva, las enfermedades infecciosas, el rápido crecimiento de las poblaciones humanas en el África subsahariana, la llegada de la agricultura industrial (que requiere la tala de bosques,  y pérdida de hábitat y su calidad causada por la expansión de las actividades humanas, ha provocado una reducción significativa de la población en los últimos 20 a 30 años que se prevé continúe durante los próximos 40 años. La reducción máxima de la población desde 1975 hasta 2050 superará el 50%, de ahí a que se considere un animal en peligro de extinción. La fruta constituye aproximadamente la mitad de la dieta de los chimpancés, generalmente complementada con vegetación herbácea terrestre, hojas, tallos, semillas, flores, corteza, médula, miel, hongos, resina, huevos y presas animales como insectos y mamíferos de tamaño mediano. Son los más carnívoros de los grandes simios.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
  </div>

</div>
</div>
  <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
    <div class="">
<div class="card shadow" style="width: 18rem;">
  <img src="./imagenes/tigre.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">El tigre</h5>
    
    
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModaluno">
  Más información
</button>

<div class="modal fade" id="exampleModaluno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">El tigre</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Catalogado como en peligro de extinción, el tigre es una de las especies que ha registrado una disminución en su población a lo largo del período de un periodo de 30 años en al menos nueve de los 13 países que tenían subpoblaciones de tigres existentes al comienzo del período de evaluación. Los cerdos salvajes y los ciervos de varias especies son los dos tipos de presas que constituyen la mayor parte de la dieta del tigre. Cuando se agotan las grandes poblaciones de presas, optan por las aves, los peces, los roedores o los insectos. Las subpoblaciones de tigres existentes se encuentran en los bosques tropicales, subtropicales y templados del sur y sureste de Asia y en los bosques templados de hoja perenne de Rusia y China. Los tigres son generalistas del hábitat y se han adaptado a diversos hábitats, incluidos los bosques lluviosos ecuatoriales y los manglares en la India y Sumatra.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>

  <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
    <div class="">
<div class="card shadow" style="width: 18rem;">
  <img src="./imagenes/ballena.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">La ballena azul</h5>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModaldos">
  Más información
</button>

<div class="modal fade" id="exampleModaldos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">La ballena azul</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Esta especie ha registrado una reducción en los últimos años del 8% (pasando del 89% al 97%), lo que supone que esté en peligro crítico de extinción. Hay que destacar la reducción masiva de la antigua población antártica de ballenas azules. Las ballenas azules se alimentan casi exclusivamente de pequeños crustáceos. En cuanto a los patrones migratorios de las ballenas, algunas especies pueden residir todo el año en hábitats de alta productividad, mientras que otras emprenden largas migraciones desde aguas tropicales a áreas de alimentación en latitudes altas.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
    <div class="">
  <div class="card shadow" style="width: 18rem;">
  <img src="./imagenes/lemur.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">El lémur</h5>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModaltres">
  Más información
</button>

<div class="modal fade" id="exampleModaltres" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">El lémur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      En la actualidad, hay más de 80 especies de lémures en peligro crítico o en peligro de extinción, y más de 30 en una situación vulnerable. Entre ellos el lemur dorado o el de cola anillada. La  principal causa de su extinción es la pérdida de hábitat como consecuencia de la agricultura de tala y la quema de bambú, que supone una importante fuente de alimento para estas especies. La caza también es otro de los motivos de la disminución de estos animales.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
  <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
    <div class="">
<div class="card shadow" style="width: 18rem;">
  <img src="./imagenes/vaquitamarina.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">La vaquita marina</h5>
  
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalcuatro">
  Más información
</button>

<div class="modal fade" id="exampleModalcuatro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">La vaquita marina</h5>
      <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Ubicada únicamente en el norte del Golfo de California, en México, esta especie está en peligro crítico de extinción porque se estima, entre otras cosas, que la población total es de alrededor de 10. La vaquita, que vive en un ambiente marino de menos de 50 metros de profundidad, se alimenta de una variedad de peces, calamares y crustáceos.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
  <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
    <div class="">
<div class="card shadow" style="width: 18rem;">
  <img src="./imagenes/rinoceronte.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">El rinoceronte de Sumatra</h5>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalcinco">
  Más información
</button>

<div class="modal fade" id="exampleModalcinco" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">El rinoceronte de Sumatra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Esta especie está catalogada como en peligro crítico de extinción debido a la disminuciones severas de más del 80% durante tres generaciones, además de una disminución continua de al menos un 30% en 10 años y tan solo 250 rinocerontes adultos de este tipo. Se estima que en 60 años la probabilidad de extinción del rinoceronte de Sumatra es del 90%.  Entre las causas de su desaparición está la caza furtiva y la pérdida de hábitat. Es una especie que habita en el bosque tropical, suelen encontrarse principalmente en áreas montañosas cercanas a las fuentes de agua y se mueven dependiendo de la estación del año.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</div>
</div>
</div>



</section>



 

<section class=" container mb-5 p-4 margin-left-4">

<div class="text-center p-4">
  <h2>Coordina una visita aqui!</h2>
</div>

<div class="card-group">
  <div class="card">
    <img src="./imagenes/aguara.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Ubicacion</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="./imagenes/animal.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Horarios de visita</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="./imagenes/aguilas.webp" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Punto de encuentro</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</section>




<br>

<footer>

<div class="contacto flex">
  <div>

    <h2><u>Contacto</u></h2>
    <p><strong><u>Direccion</u></strong></p>
    <p>Lisandro de la torre 1376</p>
    <p>San Cristobal - Santa Fe - Argentina</p>
    <p><strong><u>Telefono</u></strong></p>
    <p>+54 3408-678965</p>
  </div>

  <div class="form-contacto">

    <form action="">
    <div class="mb-2">
  <label for="exampleFormControlInput1" class="form-label"><u>Nombre</u></label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="escriba su nombre completo">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"><u>Email</u></label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"><u>Mensaje</u></label>
  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escriba un mensaje..."rows="3"></textarea>
</div>
<button type="button" class="btn btn-dark ">Borrar</button>
<button type="button" class="btn btn-light ">Enviar</button>
    </form>
  </div>
</div>
<hr>
<?php include ("footer.php"); ?>

</footer>















































































    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    <script src="./js/navbar.js"></script>
  </body>
</html>