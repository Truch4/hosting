<?php

include("conexion.php");


if (isset($_POST['crear_usuario'])){
$nombreusuario = $_POST['nombreusuario'];
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $genero = $_POST['genero'];
    $PNF = $_POST['PNF'];
    $correo = $_POST['correo'];
    $contracena = $_POST['contracena'];
    $telefono = $_POST['telefono'];

    $query = "INSERT INTO users (nombreusuario, nombre, cedula, genero, PNF, correo, contracena, telefono) VALUES('$nombreusuario', '$nombre', '$cedula', '$genero', '$PNF', '$correo', '$contracena', '$telefono')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error, no se guardaron los datos ");
    }


        Header("Location: index.php");



}

?>