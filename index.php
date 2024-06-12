<?php 
session_start();

if(!isset($_SESSION['dniadmin'])&&!isset($_SESSION['dnigerente'])){
  header("Location:index.php");
}


?>
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
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./imagenes/imagen.jpg");
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
.card-icon {
            position: absolute;
            top: -1.5rem;
            left: 50%;
            transform: translateX(-50%);
            background-color: white;
            border-radius: 50%;
            padding: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .card-body {
            padding-top: 2.5rem;
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



 <!--
// v0 by Vercel.
// https://v0.dev/t/De2OYXcbXWk
-->
<!-- 
<section class="w-full py-12 md:py-24 lg:py-32">
  <div class="container grid grid-cols-1 md:grid-cols-3 gap-6 px-4 md:px-6">
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative" data-v0-t="card">
      <div class="absolute -top-6 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-950 rounded-full p-4 shadow-lg">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="h-6 w-6 text-primary"
        >
          <circle cx="12" cy="12" r="10"></circle>
          <polyline points="12 6 12 12 16 14"></polyline>
        </svg>
      </div>
      <div class="flex flex-col space-y-1.5 p-6">
        <div class="p-6 space-y-4 pt-10">
          <div class="flex items-center justify-between">
            <span>Lunes - Viernes</span>
            <span>9:00 AM - 6:00 PM</span>
          </div>
          <div class="flex items-center justify-between">
            <span>Sábados</span>
            <span>10:00 AM - 4:00 PM</span>
          </div>
          <div class="flex items-center justify-between">
            <span>Domingos</span>
            <span>Cerrado</span>
          </div>
        </div>
      </div>
    </div>
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative" data-v0-t="card">
      <div class="absolute -top-6 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-950 rounded-full p-4 shadow-lg">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="h-6 w-6 text-primary"
        >
          <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
          <circle cx="12" cy="10" r="3"></circle>
        </svg>
      </div>
      <div class="flex flex-col space-y-1.5 p-6">
        <div class="p-6 space-y-4 pt-10">
          <div class="flex items-start gap-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mt-1 h-5 w-5 text-primary"
            >
              <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <div>
              <p>Avenida Principal #123</p>
              <p>Ciudad, País</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mt-1 h-5 w-5 text-primary"
            >
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <div>
              <p>+1 (1</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mt-1 h-5 w-5 text-primary"
            >
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
              <path d="M2 12h20"></path>
            </svg>
            <div>
              <a class="underline" href="#">
                exam
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="rounded-lg border bg-card text-card-foreground shadow-sm relative" data-v0-t="card">
      <div class="absolute -top-6 left-1/2 -translate-x-1/2 bg-white dark:bg-gray-950 rounded-full p-4 shadow-lg">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="h-6 w-6 text-primary"
        >
          <circle cx="12" cy="12" r="10"></circle>
          <path d="M12 16v-4"></path>
          <path d="M12 8h.01"></path>
        </svg>
      </div>
      <div class="flex flex-col space-y-1.5 p-6">
        <div class="p-6 space-y-4 pt-10">
          <div class="flex items-start gap-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mt-1 h-5 w-5 text-primary"
            >
              <path d="M12 20h.01"></path>
              <path d="M2 8.82a15 15 0 0 1 20 0"></path>
              <path d="M5 12.859a10 10 0 0 1 14 0"></path>
              <path d="M8.5 16.429a5 5 0 0 1 7 0"></path>
            </svg>
            <div>
              <p>Wifi gratuito</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mt-1 h-5 w-5 text-primary"
            >
              <path d="M9 9a3 3 0 1 1 6 0"></path>
              <path d="M12 12v3"></path>
              <path d="M11 15h2"></path>
              <path d="M19 9a7 7 0 1 0-13.6 2.3C6.4 14.4 8 19 8 19h8s1.6-4.6 2.6-7.7c.3-.8.4-1.5.4-2.3"></path>
              <path d="M12 19v3"></path>
            </svg>
            <div>
              <p>Es</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mt-1 h-5 w-5 text-primary"
            >
              <path d="M10 2v2"></path>
              <path d="M14 2v2"></path>
              <path d="M16 8a1 1 0 0 1 1 1v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V9a1 1 0 0 1 1-1h14a4 4 0 1 1 0 8h-1"></path>
              <path d="M6 2v2"></path>
            </svg>
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


<div class="container mt-5 p-5">
<div class="section-title text-center p-4 ">
            <h2>Coordina una visita!</h2>
            <p>Descubre nuestras colecciones, horarios y ubicación</p>
        </div>
        <div class="row">
            <!-- Carta de Horarios de Visita -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-icon">
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                    <div class="card-body shadow">
                        <h5 class="card-title">Horarios de Visita</h5>
                        <p class="card-text">Lunes - Viernes: 9 AM - 5 PM</p>
                        <p class="card-text">Sábado - Domingo: 10 AM - 6 PM</p>
                    </div>
                </div>
            </div>
            <!-- Carta de Ubicación -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-icon">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <div class="card-body shadow">
                        <h5 class="card-title">Ubicación</h5>
                        <p class="card-text">123 Calle del Museo, San Cristobal, Argentina</p>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam sequi reprehenderit reiciendis, magni expedita ipsum veritatis recusandae nisi.</p>
                        
                    </div>
                </div>
            </div>
            <!-- Otra Carta a Elección -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-icon">
                        <i class="fas fa-ticket-alt fa-2x"></i>
                    </div>
                    <div class="card-body shadow">
                        <h5 class="card-title">Entradas</h5>
                        <p class="card-text">Adultos: $10</p>
                        <p class="card-text">Niños: $5</p>
                        <p class="card-text">Estudiantes: $8</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





<br>

<footer>

<div class=" contacto row">
  <div class="col-9 mx-auto">

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
        <div class="mb-2 ">
      <label for="exampleFormControlInput1" class="form-label"><u>Nombre</u></label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="escriba su nombre completo">
    </div>
    <div class="mb-3 ">
      <label for="exampleFormControlInput1" class="form-label"><u>Email</u></label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3 ">
      <label for="exampleFormControlTextarea1" class="form-label"><u>Mensaje</u></label>
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escriba un mensaje..."rows="3"></textarea>
    </div>
    <button type="button" class="btn btn-dark ">Borrar</button>
    <button type="button" class="btn btn-light ">Enviar</button>
        </form>
      </div>
  </div>
</div>
<hr>
<?php include ("footer.php"); ?>

</footer>














































































<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    
  </body>
</html>