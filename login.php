<?php

include('conexion.php');

$nombreusuario_l = $_POST['nombreusuario_l'];
$contracena_l = $_POST['contracena_l'];

$validar_login = mysqli_query($conn, "SELECT * FROM users WHERE nombreusuario = '$nombreusuario_l' and contracena = '$contracena_l'" );

if(mysqli_num_rows($validar_login) > 0 ){
    header("Location: home.php");
}

if (mysqli_num_rows($validar_login) == 0) {
   

    header("Location: index.php");
}
