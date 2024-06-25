<?php

include("conexion_be.php");
$con = $conexion;

$id=$_GET["id"];

$sql="DELETE FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: CRUD.php");
}else{

}

?>