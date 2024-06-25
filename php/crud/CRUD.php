<?php
include("conexion_be.php");
$con = $conexion;
$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .nav-bar {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        .nav-bar a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }

        .nav-bar a:hover {
            color: #ccc;
        }

        .users-table {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        .users-table h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .users-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .users-table th,
        .users-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .users-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .users-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .users-table a {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .users-table a.users-table--edit {
            background-color: #4CAF50;
        }

        .users-table a.users-table--delete {
            background-color: #F44336;
        }
    </style>
</head>

<body>

    <div class="nav-bar">
        <a href="../../Proyecto/nosotros.php">Inicio</a>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre_completo'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><?= $row['usuario'] ?></th>

                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>