<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .section-title {
            color: #d4af37;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .card {
            border: 2px solid #d4af37;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #d4af37;
            color: #fff;
            font-weight: bold;
        }

        .card-body {
            padding: 15px;
        }

        .profile-icon {
            font-size: 1.5rem;
            color: #d4af37;
            margin-right: 10px;
        }

        .highlight {
            color: #d4af37;
            font-weight: bold;
        }
        /* Estilo para los títulos de secciones */
        .text-gold {
            color: #d4af37;
            font-weight: bold;
        }

        /* Estilo para las tarjetas de talleres */
        .taller-card {
            border: 2px solid #d4af37;
            border-radius: 10px;
        }

        /* Estilo para listas */
        .list-unstyled li {
            color: #ddd;
            font-size: 1.1rem;
            margin-bottom: 5px;
        }

    </style>
</head>
<body>
    <?php include("../components/menu/menu.html");?>
    <div class="container my-5">
        <h1 class="text-gold mb-4">Nuestros Talleres</h1>

        <!-- Taller de Teatro -->
        <div class="taller-card bg-dark text-light mb-4 p-4">
            <h2 class="text-gold">Teatro</h2>
            <p>Desde finales de febrero de 2005 se han realizado tres Cine Foros:</p>
            <ul class="list-unstyled">
                <li>• La Estrategia del Caracol</li>
                <li>• El Carro</li>
                <li>• En donde están las rubias</li>
            </ul>
            <p>Se hacen pequeños montajes de teatro a nivel interno. Con ello, los estudiantes adquieren un bagaje cultural, desarrollando elementos de improvisación, expresión y actuación.</p>
        </div>

        <!-- Taller de Plásticas -->
        <div class="taller-card bg-dark text-light mb-4 p-4">
            <h2 class="text-gold">Plásticas</h2>
            <p>Investigaciones dejadas en archivo por los estudiantes de 11°:</p>
            <ul class="list-unstyled">
                <li>• Tallado de figuras en madera</li>
                <li>• El comic</li>
                <li>• Muralismo</li>
                <li>• Dibujo tríptico “Tema de Fábulas para el Preescolar”</li>
                <li>• Mural en Cerámica cosida “Taller realizado en la fábrica de Alfa”</li>
                <li>• Vitrales</li>
                <li>• Afiches</li>
                <li>• Pancartas</li>
            </ul>
        </div>

        <!-- Taller de Música -->
        <div class="taller-card bg-dark text-light mb-4 p-4">
            <h2 class="text-gold">Música</h2>
            <p>Méritos alcanzados:</p>
            <ul class="list-unstyled">
                <li>• Primer encuentro de bandas del Barrio La Despensa, organizado por la Junta de Acción Comunal.</li>
                <li>• Tercer puesto en el Encuentro Nacional de Bandas, Purificación, Tolima.</li>
                <li>• Segundo puesto de bandas por la Asociación de Colegios Privados (CEPAS) en 2003.</li>
                <li>• Mención de Honor en el 8º Festival Zonal Artístico de Bosa (UCPI).</li>
            </ul>
        </div>

        <!-- Taller de Danzas -->
        <div class="taller-card bg-dark text-light mb-4 p-4">
            <h2 class="text-gold">Danzas</h2>
            <p>La danza es el vehículo de descubrimiento de nuestras raíces, a través del cual los estudiantes crean una cultura donde el amor hacia nuestro país es primordial. El folclor colombiano se valora como un tesoro nacional.</p>
            <ul class="list-unstyled">
                <li>• Crear identidad cultural colombiana.</li>
                <li>• Interesar a los estudiantes en la historia y tradiciones colombianas.</li>
                <li>• Concientizar a los estudiantes sobre las riquezas artísticas de Colombia.</li>
                <li>• Identificar las raíces de cada danza.</li>
                <li>• Recrear la vida de las antiguas culturas mediante el arte escénico.</li>
                <li>• Buscar incentivos para fomentar el sentido patriótico.</li>
            </ul>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>
</html>
