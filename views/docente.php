<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo Docente</title>
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
    </style>
</head>
<body>
    <?php include("../components/menu/menu.html");?>
    <div class="container py-5">
        <h2 class="text-center mb-4">Equipo Docente</h2>

        <div class="row g-4">
            <!-- Fanny Escobar De Porras -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Fanny Escobar De Porras
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><span class="profile-icon">🎓</span>Rectora</h5>
                        <p class="card-text">
                            Directora del Centro Educativo Colombo Latino desde <span class="highlight">1977</span>. Egresada del Colegio María Auxiliadora en 1972 y ex alumna de la Universidad Nacional de Colombia (1975). Obtuvo su licenciatura en administración y supervisión educativa en la <span class="highlight">Universidad de la Sabana</span>, donde también se especializó en gerencia educativa. Es miembro activo del <span class="highlight">Plan Decenal de Educación</span>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- William Porras Escobar -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        William Porras Escobar
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><span class="profile-icon">💼</span>Gerente Administrativo</h5>
                        <p class="card-text">
                            Egresado del Colegio San Bernardo. Realizó estudios en <span class="highlight">Comercio Internacional</span> en Com Inter. Su último empleo fue en Siemens, donde dirigió el departamento de importaciones y exportaciones hasta <span class="highlight">1985</span>, año en que decide dedicarse completamente al Colegio Colombo Latino.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Maria del Carmen Cardona -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Maria del Carmen Cardona
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><span class="profile-icon">📚</span>Coordinadora Académica</h5>
                        <p class="card-text">
                            Licenciada en Pedagogía Infantil de la <span class="highlight">Universidad de Tolima</span>. Se destaca por su dedicación en la educación de niños con necesidades especiales, implementando proyectos de interés en su gestión docente.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
