<?php
// Configuración de errores para el desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Incluir la conexión a la base de datos
    require 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = hash('sha512',$_POST['contrasena']);

   // $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
                    VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    //verificar que no se repita correo en la db

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo)>0){
            echo '
                <script>
                    alert("este correo ya esta registrado, intente con otro");
                    window.location = "../index.php";
                </script>
            
            ';
            exit();
    }

       //verificar que no se repita usuario en la db

       $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

       if(mysqli_num_rows($verificar_usuario)>0){
               echo '
                   <script>
                       alert("este usuario ya esta registrado, intente con otro");
                       window.location = "../index.php";
                   </script>
               
               ';
               exit();
       }
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo ' 
            <script>
                alert("Registro exitoso");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo ' 
        <script>
            alert("intentalo de nuevo, usuario no almacenado");
            window.location = "../index.php";
        </script>
    ';
    }
    mysqli_close($conexion);
?>