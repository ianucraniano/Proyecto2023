<?php 
session_start();

//if(!isset($_SESSION['dniadmin'])&&!isset($_SESSION['dnigerente'])){
  //header("Location:index.php");
//}


?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Museo de San Cristobal - Inicio</title>
    <link href="https: //fonts.googleapis.com/css2? family= Roboto+Condensed:wght@700 & family= Roboto+Slab & display=swap" rel="stylesheet">
  
      <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="./CSS/estilo.css">
      <link rel="stylesheet" href="./CSS/contacto.css">
      <link rel="stylesheet" href="./CSS/app.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
    

  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

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