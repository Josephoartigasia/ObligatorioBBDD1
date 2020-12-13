<?php

include ("conexion.php");

$conexion = conectar();

if($conexion){
    $consulta = "SELECT * FROM obligatoriobbdd";
    if($tabla = mysqli_query($conexion, $consulta)){

        $persona = "<table><th>Cédula</th><th>Nombre</th></th>Apellido</th><th>Dirección</th><th>Celular</th><th>Correo</th><th>Redes Sociales</th>";

        while($fila=mysqli-fetch_array($tabla)){

            $persona = $persona ."<tr><td>" . $fila['Cedula'] . "</td><td>" . $fila['Nombre'] . "</td><td>" . $fila['Apellido'] . "</td><td>" . $fila['Direccion'] . "</td><td>" . $fila['Celular'] . "</td><td>" . $fila['Correo'] . "</td><td>" . $fila['Redes Sociales'] . "</td></tr>";

        }

        $persona = $persona . "</table>";

        echo $persona;
    }
    if($tabla){

        header("Location:listar.php");
    }
    else
    {
        echo "No se pudo listar" . mysqli_error($conexion);
    }
}
?>