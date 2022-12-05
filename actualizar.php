<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombreusuario = $row['nombreusuario'];
        $nombre = $row['nombre'];
        $cedula = $row['cedula'];
        $genero = $row['genero'];
        $PNF = $row['PNF'];
        $correo = $row['correo'];
        $contracena = $row['contracena'];
        $telefono = $row['telefono'];
    }
}

if (isset($_POST['Actualizar_Datos'])) {
    $id = $_GET['id'];
    $nombreusuario = $_POST['nombreusuario'];
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $genero = $_POST['genero'];
    $PNF = $_POST['PNF'];
    $correo = $_POST['correo'];
    $contracena = $_POST['contracena'];
    $telefono = $_POST['telefono'];

    $query = "UPDATE users set nombreusuario = '$nombreusuario', nombre = '$nombre', cedula = '$cedula', genero = '$genero', PNF ='$PNF', correo = '$correo', contracena = '$contracena', telefono = '$telefono' WHERE id = $id ";
    mysqli_query($conn, $query);


    header("Location: home.php");
}
?>

<?php

include("/xampp/htdocs/30.555.219/includes/header.php")

?>


<section class="d-flex" id="principal">
    <div class="bg-primary" id="formulario">
        <p><span>Actualice sus datos:</span></p>
        <form action="actualizar.php?id=<?php echo $_GET['id']; ?>" method="post">
            <ul class="casillas">
                <li class="d-flex justify-content-between">
                    <label for="nombre_de_usuario">Ingrese un nombre de usuario:</label>
                    <input type="text" name="nombreusuario" placeholder="Nombre de Usuario" value="<?php echo $nombreusuario ?>">
                </li>
                <li class="d-flex justify-content-between">
                    <label for="nombre">Ingrese su nombre:</label>
                    <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre ?>">
                </li>
                <li class="d-flex justify-content-between">
                    <label for="cedula">Ingrese su cédula:</label>
                    <input type="number" name="cedula" placeholder="Cédula" value="<?php echo $cedula ?>">
                </li>
                <li class="d-flex justify-content-between">
                    <label for="genero">Seleccione su género:</label>
                    <select name="genero" value="<?php echo $genero ?>">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                        <option value="otro">Otros</option>
                    </select>
                </li>
                <li class="d-flex justify-content-between">
                    <label for="PNF">Seleccione su PNF:</label>
                    <select name="PNF" placeholder="Seleccione su PNF" value="<?php echo $PNF ?>">
                        <option value="electricidad">Electricidad</option>
                        <option value="informatica">Informática</option>
                        <option value="geociencias">Geociencias</option>
                        <option value="materiales">Ing. Materiales</option>
                        <option value="quimica">Química</option>
                        <option value="mecanica">Mecánica</option>
                    </select>
                </li>
                <li class="d-flex justify-content-between">
                    <label for="correo">Ingrese su correo:</label>
                    <input type="email" name="correo" placeholder="Correo" value="<?php echo $correo ?>">
                </li>
                <li class="d-flex justify-content-between">
                    <label for="contracena">Ingrese su Contraceña:</label>
                    <input type="password" name="contracena" placeholder="contracena" value="<?php echo $contracena ?>">
                </li>
                <li class="d-flex justify-content-between">
                    <label for="telefono">Ingrese su teléfono:</label>
                    <input type="tel" name="telefono" placeholder="Teléfono" value="<?php echo $telefono ?>">
                </li>
                <li>
                    <input type="submit" name="Actualizar_Datos" value="Actualizar Datos">
                </li>
            </ul>
    </div>
    </form>


</section>

<?php

include("/xampp/htdocs/30.555.219/includes/footer.php")

?>