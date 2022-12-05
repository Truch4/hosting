<?php


include('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('ERROR');
    }
   
    header("Location: home.php");
}

 ?>