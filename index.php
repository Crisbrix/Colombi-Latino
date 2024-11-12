<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Colegio Ejemplo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <!-- Menú de Navegación -->
    <?php 
        include("./components/menu/menu.html"); 
    ?>

    <?php 
        include("./components/carrusel/carrusel.html");
    ?>
    <!--Tarjetas-->
    <div class="info">
        <?php include("./components/info/info.html"); ?>
    </div>

    <!-- Pie de Página -->
    <footer class="footer">
        <div class="footer-container">
            <h2 class="footer-title">Contáctanos</h2>
            <p class="footer-text">Estamos aquí para ayudarte. No dudes en ponerte en contacto con nosotros a través de los siguientes medios:</p>
            <ul class="contact-list">
                <li><strong>Teléfono:</strong> +57 123 456 7890</li>
                <li><strong>Correo Electrónico:</strong> contacto@tusitio.com</li>
                <li><strong>Dirección:</strong> Calle Falsa 123, Fusagasugá, Cundinamarca</li>
            </ul>
            <div class="social-media">
                <a href="https://www.facebook.com/centroeducativocolombolatino/?locale=es_LA" class="social-icon">Facebook</a>
                <a href="https://www.instagram.com/colombo.latino.cecol/?hl=es-la" class="social-icon">Instagram</a>
                <a href="https://cecol40.wixsite.com/inicio/contact" class="social-icon">Wix</a>
            </div>
            <p class="footer-copy">&copy; 2024 Colombo Latino Cristhian Ramirez. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
