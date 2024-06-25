<?php 
    session_start();
    if(!isset($_SESSION['$usuario'])){
        echo '
        
            <script>
                alert("debes de iniciar sesion, hacker qliao");
                window.location = "../index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
        <a class="navbar-brand" href="#">
            <img src="../assets/img/keyboard.png" alt="keyboard" style="width: 30px;">
            Mecha
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Mecanografia-main/index.html">Pruebate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tips.php">Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light" href="tips.php">Iniciar</a>
                </li>
                <li>
                    <a class="nav-link btn btn-light" href="../php/cerrar_session.php">logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container">
        <div class="main-content">
            <div class="text-content">
                <h1>Mejora tus habilidades escribiendo en un teclado</h1>
                <p>Te presentamos algunos tips para mejorar tu habilidad al escribir a computadora y teclear a una nueva velocidad.</p>
                <a href="tips.php">
                <button class="btn-start">Empezar</button>
                </a>
            </div>
            <div class="image-content">
                <img src="https://agilefingers.com/img/articles/why-learn-touch-typing-cat-03.jpg" alt="Typing" class="custom-shape">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
