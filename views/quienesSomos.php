<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiénes Somos</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .section-title {
            color: #d4af37;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content-section {
            background: #fff;
            border: 2px solid #d4af37;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .icon {
            font-size: 1.5rem;
            color: #d4af37;
            margin-right: 10px;
        }

        .highlight {
            color: #d4af37;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php include("../components/menu/menu.html");?>
    <div class="container py-5">
        <h2 class="text-center mb-4">Quiénes Somos</h2>

        <!-- Misión -->
        <div class="content-section">
            <h3 class="section-title"><span class="icon">🎯</span>Misión</h3>
            <p>
                Somos la mejor alternativa educativa, pioneros del arte y la cultura de nuestra identidad nacional, en una unidad de formación institucional. Ofrecemos educación en los niveles de <span class="highlight">Preescolar, Básica Primaria, Básica Secundaria y Media Vocacional</span>. Contamos con seis modalidades: cuatro de bellas artes (música, danzas, teatro, plásticas), tecnología en sistemas y guías turísticas con énfasis en inglés. Además, ofrecemos técnico laboral en articulación con el SENA en <span class="highlight">Comercio Internacional</span> y <span class="highlight">Multimedia</span>, preparando a los estudiantes para el mundo laboral y profesional, fundamentados en valores y principios claros.
            </p>
        </div>

        <!-- Visión -->
        <div class="content-section">
            <h3 class="section-title"><span class="icon">🔍</span>Visión</h3>
            <p>
                Formamos estudiantes integralmente, capaces de preservar el patrimonio nacional y alcanzar identidad cultural a través del arte, la cultura y la ciencia. Nuestra educación se fundamenta en la ética y los valores "FE Y VIDA", con autodisciplina y convivencia armónica. Basamos nuestra pedagogía en las doctrinas de <span class="highlight">Don Bosco</span>, enfocándonos en el desarrollo de valores familiares y liderazgo, defendiendo los derechos humanos, la sostenibilidad y el cuidado del medio ambiente.
            </p>
        </div>

        <!-- Nuestras Instalaciones -->
        <div class="content-section">
            <h3 class="section-title"><span class="icon">🏫</span>Nuestras Instalaciones</h3>
            <p>
                El CECOL cuenta con amplias instalaciones para una excelente educación y comodidad. Destacan:
            </p>
            <ul>
                <li><span class="highlight">Patio de recreación</span> con medidas reglamentarias para futsal, baloncesto y voleibol, con gradas para observadores.</li>
                <li><span class="highlight">Sala de profesores</span> amplia y cómoda, ideal para el descanso de los docentes.</li>
                <li><span class="highlight">22 salones</span> amplios, incluyendo 3 especialmente grandes para talleres de sistemas, danzas y plásticas.</li>
                <li><span class="highlight">Sala de sistemas</span> con 13 computadores de última tecnología, equipados para el desarrollo de habilidades tecnológicas.</li>
                <li><span class="highlight">Auditorio</span> para eventos importantes como conferencias, foros y debates.</li>
            </ul>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
