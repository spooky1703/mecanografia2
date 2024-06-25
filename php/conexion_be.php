<?php
// Configuración de errores para el desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir la conexión a la base de datos
     $conexion = mysqli_connect("localhost","root","", "login-register");//si no funciona señalar a la db original y luego a la tabla en cuestion (usuarios)
     if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
    }
     /*if ($conexion) {
          echo "bien hecho, conectado a la base de datos";
      }else{
          echo "ERROR, NO SE A PODIDO CONECTAR";
      }*/
