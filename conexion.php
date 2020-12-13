<?php
function conectar(){

    $hostname = "localhost";
    $username = "root";
    $password = "hgzbx123";
    $dbname = "base";

    $conexion = mysqli_connect($hostname, $username, $password) or die;
    if($conexion)
    {
        $base = mysqli_select_db($conexion, $dbname);
    } else{
        echo "No se pudo conectar";
    }
    return $conexion;
}
?>