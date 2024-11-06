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
  <style>
    /* Sección Planifica tu Visita */
.visit-section {
    
    background-color: #f8f9fa;
    text-align: center;
    margin-top: 10px;
}

.visit-section h2 {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 1rem;
}

.visit-section p {
    color: #666;
    max-width: 600px;
    margin: 0 auto 2rem;
}

/* Tarjetas de Visita */
.visit-card-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
}

.visit-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    text-align: left;
    transition: transform 0.3s ease;
}

.visit-card:hover {
    transform: scale(1.03);
}

.visit-card .icon {
    font-size: 2.5rem;
    color: #0c9d2f;
    margin-bottom: 1rem;
}

.visit-card h3 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: #333;
}

.visit-card p {
    color: #555;
    line-height: 1.6;
}

.visit-card .btn {
    display: inline-block;
    margin-top: 1rem;
    padding: 0.8rem;
    font-size: 1rem;
    color: #fff;
    background-color: #0c9d2f;
    border: none;
    border-radius: 4px;
    transition: background 0.3s ease;
    text-decoration: none;
}

.visit-card .btn:hover {
    background-color: #2d8f44;
}

/* Formulario de Contacto */
.contact-form {
    margin-top: 3rem;
    padding: 2rem;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-form h3 {
    font-size: 1.8rem;
    color: #333;
    margin-bottom: 1rem;
}

.contact-form input, .contact-form textarea {
    width: 100%;
    padding: 0.8rem;
    margin-bottom: 1rem;
    border-radius: 4px;
    border: 1px solid #ddd;
    font-size: 1rem;
}

.contact-form .btn-submit {
    padding: 0.7rem 1.5rem;
    font-size: 1rem;
    color: #fff;
    background-color: #0c9d2f;
    border: none;
    border-radius: 4px;
    transition: background 0.3s ease;
}

.contact-form .btn-submit:hover {
    background-color: #2d8f44;
}

/* Responsivo */
@media (max-width: 768px) {
    .visit-section h2 {
        font-size: 2rem;
    }
}

  

.presentacion-pagina{
  color: white ;
  font-family: "Cabin", sans-serif;
  display: grid;
  place-items: center;
  position: relative;
  top:140px;
}
  
  .bienvenido{
 
    font-family: Georgia, 'Times New Roman', Times, serif;
    padding: 40px;
    display: flex;
    justify-content: center;
    
  }
 
  .coleccion{
    color: black;
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


.hero-section {
    background-image: url("./imagenes/imagen.jpg");
    background-size: cover;
    background-position: center;
    color: white;
    height: 450px;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    padding: 4rem 2rem;
    text-align: center;
}
.hero-section h1 {
    font-size: 3rem;
    font-weight: 700;
}
.hero-section p {
    font-size: 1.3rem;
}

</style>
  </head>

    <body>
      <?php

      include("header.php");
      ?>

      <!-- <div class="fondo img-fluid">
        <h1 class="presentacion-pagina">Museo de la ciudad de San Cristobal</h1>
        

      </div> -->
  <section class="hero-section d-flex flex-column align-items-center justify-content-center">
      <h1 id="welcomeTitle exhibiciones">¡Bienvenidos al Museo de San Cristóbal!</h1>
      <p>Explora una colección única de historia, arte y cultura.</p>  
  </section>
      
      


<section class= " principal">



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



 

<section class="visit-section"></section>
    <div class="container">
        <h2>Planifica tu Visita</h2>
        <p>Explora las opciones de visitas al museo y encuentra la experiencia perfecta para disfrutar de nuestra colección y actividades.</p>

        <div class="visit-card-container">
            <!-- Tarjeta Visita 1 -->
            <div class="visit-card">
                <div class="icon"><i class="fas fa-landmark"></i></div>
                <h3>Visita General</h3>
                <p>Descubre la historia del arte con una visita guiada por las principales colecciones y exhibiciones permanentes del museo.</p>
                <a href="#" class="btn">Más Información</a>
            </div>

            <!-- Tarjeta Visita 2 -->
            <div class="visit-card">
                <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                <h3>Visitas Educativas</h3>
                <p>Ofrecemos visitas guiadas para estudiantes, personalizadas para grupos escolares de todas las edades y niveles educativos.</p>
                <a href="#" class="btn">Más Información</a>
            </div>

            <!-- Tarjeta Visita 3 -->
            <div class="visit-card">
                <div class="icon"><i class="fas fa-clock"></i></div>
                <h3>Visita Nocturna</h3>
                <p>Disfruta de una experiencia única con nuestras visitas nocturnas y descubre el museo bajo una nueva perspectiva.</p>
                <a href="#" class="btn">Más Información</a>
            </div>

            <!-- Tarjeta Visita 4 -->
            <div class="visit-card">
                <div class="icon"><i class="fas fa-walking"></i></div>
                <h3>Recorridos Temáticos</h3>
                <p>Explora temas específicos de la historia del arte y la cultura en nuestros recorridos guiados temáticos.</p>
                <a href="#" class="btn">Más Información</a>
            </div>
        </div>

        <!-- Formulario de Contacto -->
        <div class="contact-form">
            <h3 id="contacto">¿Tienes Preguntas? Contáctanos</h3>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Nombre Completo" required>
                <input type="email" name="email" placeholder="Correo Electrónico" required>
                <textarea name="message" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
                <button type="submit" class="btn-submit">Enviar Mensaje</button>
            </form>
        </div>
    </div>
</section>




<br>


<hr>
<?php include ("footer.php"); ?>
















































































<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
    
  </body>
</html>