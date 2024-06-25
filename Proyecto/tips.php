<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jhinggamis - Tips de Mecanografía</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles3.css">
</head>
<body>
    <style>
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                text-align: center;
            }

            .text-content, .image-content {
                max-width: 100%;
            }

            .btn-start {
                display: block;
                margin: 20px auto;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                width: 20px;
            }

            .navbar-nav .nav-item .nav-link {
                padding: 0.5rem 1rem;
            }

            .btn-start {
                width: 100%;
                padding: 10px;
            }
        }
    </style>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">
            <img src="../assets/img/keyboard.png" alt="keyboard" style="width: 30px;">
            Mecha
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Acerca de nosotros</a>
                </li>
                <li>
                    <a class="nav-link btn btn-light" href="../php/cerrar_session.php">logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light" href="Mecanografia-main/index.html">Practica</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container">
        <div class="main-content">
            <div class="text-content">
                <h1>Consejos para Mejorar tu Velocidad de Escritura</h1>
                <ul class="tips-list">
                    <li>Practica regularmente utilizando aplicaciones y juegos de mecanografía.</li>
                    <li>Utiliza todos los dedos y la posición correcta de las manos.</li>
                    <li>Evita mirar el teclado mientras escribes.</li>
                    <li>Concéntrate en la precisión antes que en la velocidad.</li>
                    <li>Haz ejercicios de calentamiento para tus dedos antes de escribir.</li>
                    <li>Configura un entorno de trabajo ergonómico.</li>
                    <li>Desarrolla una rutina de práctica diaria.</li>
                    <li>Utiliza pruebas de velocidad en línea para medir tu progreso.</li>
                </ul>
                <a href="Mecanografia-main/index.html">
                <button class="btn-start">Empezar a Practicar</button>
            </a>
            </div>
            <div class="image-content">
                <img src="https://1.bp.blogspot.com/-rp74pt3vQJA/UcukHVvseiI/AAAAAAAAAGc/k8fy36mwXwo/s1600/Teclado.png" alt="Typing Tips" class="custom-shape">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
