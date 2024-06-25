<?php
    session_start();
    include 'conexion_be.php';
    $correo = $_POST['correo'];
    $contrasena = hash('sha512',$_POST['contrasena']);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
                and contrasena='$contrasena'");
    
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['$usuario'] = $correo;
        header("location: ../Proyecto/index.php");
        exit;
    }else{
        echo '
            <script>
                alert("usuario no existe, verifica credenciales");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }