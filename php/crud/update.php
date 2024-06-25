<?php 
    // Configuración de errores para el desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include("conexion_be.php");
    $con=$conexion;

    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
       .users-form {
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
       .users-form input[type="text"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
       .users-form input[type="submit"] {
            width: 100%;
            height: 40px;
            background-color: #4CAF50;
            color: #fff; 
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
       .users-form input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombre_completo" placeholder="Nombre" value="<?= $row['nombre_completo']?>">
                <input type="text" name="correo" placeholder="Apellidos" value="<?= $row['correo']?>">
                <input type="text" name="usuario" placeholder="Username" value="<?= $row['usuario']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>