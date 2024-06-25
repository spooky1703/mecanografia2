<?php
    // Configuración de errores para el desarrollo
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
include("conexion_be.php");
$con = $conexion;

$id=$_POST["id"];
$name = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$username = $_POST['usuario'];

$sql = "UPDATE usuarios SET nombre_completo='$name', correo='$correo', usuario='$username' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: CRUD.php");
}else{

}

