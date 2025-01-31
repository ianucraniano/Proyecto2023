<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colecciones</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Anta&family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="./CSS/coleciones.css">
</head>
<!--Quiero que me diseñes la seccion de noticias y articulos, modifica todo bien completo e inventa cualquier noticia para hacerlo mas completo. luego quiero la seccion de testimonios o historias de impacto, tambien modificalas para que se vean bien completas y con diseños bonitos para el usuario.  -->
<body>
<?php

include("header.php");

?> 
<style>
  

  

</style>

<section class="hero-section text-center  text-dark py-5">
    <h1>Explora el Conocimiento</h1>
    <p>Sumérgete en las maravillas de la arqueología, zoología, paleontología y más.</p>
    
</section>
    
    <a class="button-85 " href="listado.php">
    Listado de especies
    </a>   
<br>
     <!--col-12 col-sm-6 col-md-4 col-lg-4 mb-4-->
     <div class="d-flex justify-content-center">

    


     <section class="card-section text-center ">
        <div class="card-container">
            <div class="card">
                <img src="./imagenes/arqueologiams.jpg" alt="Card Image 1">
                <div class="card-content">
                    <h3>Arqueologia</h3>
                    <button>Ver más</button>
                </div>
            </div>
            <div class="card">
                <img src="./imagenes/palenteologiams.jpg" alt="Card Image 2">
                <div class="card-content">
                    <h3>Palenteologia</h3>
                    <button>Ver más</button>
                </div>
            </div>
            <div class="card">
                <img src="./imagenes/icteologiams.jpg" alt="Card Image 3">
                <div class="card-content">
                    <h3>Icteologia</h3>
                    <button>Ver más</button>
                </div>
            </div>
            <div class="card">
                <img src="./imagenes/geologiams.jpg" alt="Card Image 4">
                <div class="card-content">
                    <h3>Geologia</h3>
                    <button>Ver más</button>
                </div>
            </div>
            <div class="card">
                <img src="./imagenes/botanicams.jpg" alt="Card Image 5">
                <div class="card-content">
                    <h3>Botanica</h3>
                    <button>Ver más</button>
                </div>
            </div>
            <div class="card">
                <img src="./imagenes/zoologiams.jpg" alt="Card Image 6">
                <div class="card-content">
                    <h3>Zoologia</h3>
                    <button>Ver más</button>
                </div>
            </div>
            <div class="card">
                <img src="./imagenes/oologiams.jpg" alt="Card Image 7">
                <div class="card-content">
                    <h3>Oologia</h3>
                    <button>Ver más</button>
                </div>
            </div>
            <div class="card">
                <img src="./imagenes/osteologiams.jpg" alt="Card Image 8">
                <div class="card-content">
                    <h3>Osteologia</h3>
                    <button>Ver más</button>
                </div>
            </div>
        </div>
    </section>

    </div>
      <!-- Noticias Destacadas -->
      <section id="highlighted-news" class="py-5 bg-dark text-light">
        <div class="container">
            <h2 class="text-center mb-4">Noticias Destacadas</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="highlight-card" style="background-image: url('https://via.placeholder.com/800x400');">
                        <h4>Descubrimiento de fósiles milenarios</h4>
                        <p>Un hallazgo impresionante en Sudamérica marca un hito en paleontología.</p>
                        <a href="#" class="text-warning">Leer más...</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="highlight-card" style="background-image: url('https://via.placeholder.com/800x400');">
                        <h4>Ruinas Mayas Descubiertas</h4>
                        <p>Exploradores hallan ruinas mayas en medio de la selva, ofreciendo nuevas perspectivas.</p>
                        <a href="#" class="text-warning">Leer más...</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="highlight-card" style="background-image: url('https://via.placeholder.com/800x400');">
                        <h4>El Misterio del Lago Azul</h4>
                        <p>Científicos estudian las propiedades únicas de un lago inexplorado en Asia.</p>
                        <a href="#" class="text-warning">Leer más...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Paginador -->
   <nav>
       <ul class="pagination mt-4">
           <li class="page-item" id="prev-page">
               <button class="page-link">Anterior</button>
           </li>
           <li class="page-item" id="next-page">
               <button class="page-link">Siguiente</button>
           </li>
       </ul>
   </nav>

   <!-- Noticias con Paginador -->
   <section id="news-blog" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Últimas Noticias</h2>

            <!-- Filtros por Tema -->
            <div class="text-center mb-4">
                <button class="btn btn-outline-primary filter-btn" data-category="all">Todos</button>
                <button class="btn btn-outline-primary filter-btn" data-category="arqueologia">Arqueología</button>
                <button class="btn btn-outline-primary filter-btn" data-category="zoologia">Zoología</button>
                <button class="btn btn-outline-primary filter-btn" data-category="botanica">Botánica</button>
                <button class="btn btn-outline-primary filter-btn" data-category="paleontologia">Paleontología</button>
                <button class="btn btn-outline-primary filter-btn" data-category="osteologia">Osteología</button>
                <button class="btn btn-outline-primary filter-btn" data-category="oologia">Oología</button>
                <button class="btn btn-outline-primary filter-btn" data-category="geologia">Geología</button>
                <button class="btn btn-outline-primary filter-btn" data-category="ictiologia">Ictiología</button>
            </div>

        </div>
    </section>
    <!-- Noticias con Paginador -->
<section id="news-blog" class="py-5 bg-light">
<div class="container">
   <h2 class="text-center mb-4">Últimas Noticias</h2>

   <!-- Lista de Noticias -->
   <div class="row g-4" id="news-list">
       <!-- Noticias generadas dinámicamente -->
   </div>

  
</div>
</section>



   

<section id="subscribe" class="subscribe-section py-5 bg-success text-white">
    <div class="container text-center">
        <h3 class="text-white">Suscríbete a nuestro boletín</h3>
        <p class="mb-4">Recibe las últimas noticias, eventos y contenido exclusivo directamente en tu bandeja de entrada.</p>
        <form class="d-flex justify-content-center">
            <input type="email" class="form-control me-2" placeholder="Ingresa tu correo electrónico" required>
            <button type="submit" class="btn btn-dark">Suscribirme</button>
        </form>
    </div>
</section>




<?php

include("footer.php");

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
   
    // Filtrado de Noticias
    document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');
                document.querySelectorAll('.news-card').forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
        const newsData = [
            { title: 'Hallazgos en la Cueva del León', category: 'arqueologia', summary: 'Nuevos artefactos encontrados en una cueva en Europa.' },
            { title: 'El Águila Real y su Retorno', category: 'zoologia', summary: 'Un estudio revela el crecimiento de la población de águilas reales.' },
            { title: 'Plantas Extintas Resurgiendo', category: 'botanica', summary: 'Científicos reviven especies de plantas antiguas.' },
            { title: 'El Fósil Más Antiguo', category: 'paleontologia', summary: 'Un fósil hallado redefine la evolución temprana de los vertebrados.' },
            { title: 'El Impacto de los Huesos Antiguos', category: 'osteologia', summary: 'Un estudio analiza huesos de mamíferos gigantes.' },
            { title: 'Huevos de Dinosaurio en Asia', category: 'oologia', summary: 'Un hallazgo sorprendente en un desierto remoto.' },
            { title: 'Cristales de Gran Tamaño', category: 'geologia', summary: 'Nuevos cristales gigantes descubiertos en una mina.' },
            { title: 'Peces del Abismo', category: 'ictiologia', summary: 'Fotografías muestran un ecosistema único bajo el océano.' },
        ];

        const newsList = document.getElementById('news-list');
        const itemsPerPage = 4;
        let currentPage = 1;

        function renderNews(page = 1) {
            newsList.innerHTML = '';
            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            newsData.slice(startIndex, endIndex).forEach(news => {
                const newsHTML = `
                    <div class="col-md-6 news-card" data-category="${news.category}">
                        <div class="d-flex bg-white shadow-sm rounded p-3">
                            <img src="https://via.placeholder.com/150" alt="${news.title}" class="rounded me-3">
                            <div>
                                <h5>${news.title}</h5>
                                <p>${news.summary}</p>
                                <a href="#" class="text-primary">Leer más...</a>
                            </div>
                        </div>
                    </div>
                `;
                newsList.innerHTML += newsHTML;
            });

            document.getElementById('prev-page').parentElement.classList.toggle('disabled', page === 1);
            document.getElementById('next-page').parentElement.classList.toggle('disabled', endIndex >= newsData.length);
        }

        document.getElementById('prev-page').addEventListener('click', () => {
            if (currentPage > 1) {
                renderNews(--currentPage);
            }
        });

        document.getElementById('next-page').addEventListener('click', () => {
            if ((currentPage * itemsPerPage) < newsData.length) {
                renderNews(++currentPage);
            }
        });

        renderNews();
</script>

</body>
</html>