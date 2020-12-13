<?php

include('conexion.php');
$conexion= conectar();
$cedula = $_GET('elimCedula');
$consulta=mysqli_query($conexion, "DELETE FROM obligatoriobbdd WHERE Cédula='$cedula'");
if($consulta){
    echo "Se pudo eliminar persona con Cédula N: " . $cedula;
    header("Location:eliminar.html");
}
else
{
    echo "No se pudo eliminar";
}