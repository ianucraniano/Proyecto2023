<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
   
      <title>Document</title>
      <style>
            
  /* Footer styling */
  .footer {
    background-color: #343a40;
    color: #f8f9fa;
    padding: 3rem 0;
    margin-top: 2rem;
}

.footer .logo,
.footer h5 {
    color: #129432;
}

.footer-links,
.footer-contact {
    list-style: none;
    padding: 0;
}

.footer-links li,
.footer-contact li {
    margin-bottom: 10px;
}

.footer-links li a,
.footer-contact li a {
    color: #129432;
    text-decoration: none;
    transition: color 0.3s;
}

.footer-links li a:hover,
.footer-contact li a:hover {
    color: #15e047;
}

.footer-social a {
    color: #f8f9fa;
    margin: 0 10px;
    transition: color 0.3s;
}

.footer-social a:hover {
    color: #1d4b28;
}

.footer-bottom {
    text-align: center;
    padding-top: 1.5rem;
    border-top: 1px solid #495057;
    margin-top: 2rem;
}
      </style>
</head>
<body>
      <!-- Footer Section -->
<footer class="footer p-4">
    <div class="container">
        <div class="row">
            <!-- Logo and About Section -->
            <div class="col-md-4 text-center text-md-start">
                <h5 class="logo">Museo de San Cristóbal</h5>
                <p>Un lugar donde la historia, el arte y la cultura se encuentran para enriquecer y educar. Ven y vive la experiencia única de San Cristóbal.</p>
            </div>

            <!-- Links Section -->
            <div class="col-md-4 text-center">
                <h5>Enlaces</h5>
                <ul class="footer-links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Exhibiciones</a></li>
                    <li><a href="#">Eventos</a></li>
                    <li><a href="#">Planifica tu Visita</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

            <!-- Contact and Social Media Section -->
            <div class="col-md-4 text-center text-md-end">
                <h5>Contacto</h5>
                <ul class="footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i> Calle Museo 123, San Cristóbal</li>
                    <li><i class="fas fa-phone"></i> +123 456 7890</li>
                    <li><i class="fas fa-envelope"></i> info@museosancristobal.com</li>
                </ul>
                <div class="footer-social mt-3">
                    <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom mt-4">
        <p>&copy; 2024 Museo de San Cristóbal. Todos los derechos reservados.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
