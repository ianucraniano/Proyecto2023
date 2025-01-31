<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Dosis:wght@300..800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/conservacion.css">
    <title>Museo San Cristobal - Conservación</title>
    <style>
   
    </style>
</head>
<body>
    <?php include("header.php"); ?>
   <!-- Hero Section -->
<section class="hero-section">
    <h1>Conservaciones del Museo</h1>
    <p>Preservando nuestra historia para el futuro</p>
</section>

<div class="container my-5">
    <!-- Introduction -->
    <section>
        <h2 class="text-center mb-4">¿Qué hacemos en conservación?</h2>
        <p class="text-center">Nuestro equipo trabaja incansablemente para preservar y restaurar piezas históricas y culturales. Descubre cómo transformamos y protegemos estas joyas para las generaciones venideras.</p>
    </section>

    <!-- Highlighted Projects -->
    <section>
        <h3 class="mt-5 mb-4">Proyectos Destacados</h3>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="./imagenes/pintura.jpg" class="card-img-top" alt="Proyecto 1">
                    <div class="card-body">
                        <h5 class="card-title">Restauración de Pinturas Antiguas</h5>
                        <p class="card-text">Una obra del siglo XVIII recuperada para su exposición.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./imagenes/textiles.jpg" class="card-img-top" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title">Conservación de Textiles</h5>
                        <p class="card-text">Preservamos tejidos antiguos con técnicas avanzadas.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./imagenes/artefactos.jpg" class="card-img-top" alt="Proyecto 3">
                    <div class="card-body">
                        <h5 class="card-title">Recuperación de Artefactos Arqueológicos</h5>
                        <p class="card-text">Objetos únicos restaurados para su estudio y exhibición.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="mt-5">
        <h3 class="mb-4">Proceso de Conservación</h3>
        <div class="timeline">
            <div class="timeline-step">
                <div class="timeline-content left">
                    <h5>Recepción</h5>
                    <p>Evaluamos el estado del objeto para identificar necesidades de conservación.</p>
                </div>
            </div>
            <div class="timeline-step">
                <div class="timeline-content right">
                    <h5>Diagnóstico</h5>
                    <p>Analizamos los daños utilizando técnicas modernas y tradicionales.</p>
                </div>
            </div>
            <div class="timeline-step">
                <div class="timeline-content left">
                    <h5>Plan de Intervención</h5>
                    <p>Diseñamos una estrategia personalizada para restaurar cada pieza.</p>
                </div>
            </div>
            <div class="timeline-step">
                <div class="timeline-content right">
                    <h5>Restauración</h5>
                    <p>Aplicamos técnicas precisas para devolverle su esplendor original.</p>
                </div>
            </div>
            <div class="timeline-step">
                <div class="timeline-content left">
                    <h5>Documentación</h5>
                    <p>Registramos cada paso para garantizar transparencia y aprendizaje.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlight Section -->
    <section class="highlight-section mt-5">
        <h5>¿Sabías que?</h5>
        <ul>
            <li>Usamos rayos X para analizar objetos sin dañarlos.</li>
            <li>El proceso más largo de restauración duró más de 2 años.</li>
            <li>Colaboramos con expertos internacionales en conservación.</li>
        </ul>
    </section>

    <!-- Call to Action -->
    <section class="text-center mt-5">
        <h4>Colabora con Nosotros</h4>
        <p>¿Quieres apoyar nuestros proyectos? Haz una donación o conviértete en voluntario.</p>
        <a href="#" class="btn btn-success">Haz una Donación</a>
        <a href="#" class="btn btn-info">Sé Voluntario</a>
    </section>
</div>

    <?php include("footer.php"); ?>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
