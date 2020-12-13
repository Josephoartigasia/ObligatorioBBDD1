<?php

session_start();

include('conexion.php');

$apellido= $_SESSION['Apellido'];
$nuevoApellido = $_POST['nuevoApellido'];

$conexion = conectar();
if($conexion){
    $consulta= "UPDATE obligatoriobbdd SET Apellido='$nuevoApellido' WHERE Apellido='$apellido'";
    $exito = mysqli_query($conexion, $consulta);
    if($exito){
        header("Location:buscar.html");
    }
    else
    {
        echo "No se pudo ingresar" . mysqli_error($conexion);
    }
}
?>