<?php

include('conexion.php');

$cedula=$_POST['ingCedula'];
$nombre=$_POST['ingNombre'];
$apellido=$_POST['ingApellido'];
$direccion=$_POST['ingDireccion'];
$celular=$_POST['ingCelular'];
$correo=$_POST['ingCorreo'];
$redes=$_POST['ingRedes'];

$conexion=conectar();

if($conexion){
    $sql="INSERT INTO obligatoriobbdd(Cédula, Nombre, Apellido, Direccion, Celular, Correo, Redes Sociales)VALUES('".$cedula."', '".$nombre."','".$apellido."', '".$direccion."', '".$celular."', '".$correo."','".$redes."')";

    $exito=mysqli_query($conexion, $sql);
    if($exito){
        echo "Persona ingresada";
    }
    else{
        echo "ERROR" . mysqli_error($conexion);
    }
}
