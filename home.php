<?php
include("conexion.php");
include("/xampp/htdocs/30.555.219/includes/header.php")
?>

<div class="container">
    <div class="row">
        <div class="col-md-11 mt-5 ms-5">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class=" text-center">Nombre</th>
                        <th class=" text-center">Cédula</th>
                        <th class=" text-center">Género</th>
                        <th class=" text-center">PNF</th>
                        <th class=" text-center">Correo</th>
                        <th class=" text-center">Teléfono</th>
                        <th class=" text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM users";
                    $result_tasks = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result_tasks)) { ?>
                        <tr>
                            <td class=" text-center"><?php echo $row['nombre'] ?></td>
                            <td class=" text-center"><?php echo $row['cedula'] ?></td>
                            <td class=" text-center"><?php echo $row['genero'] ?></td>
                            <td class=" text-center"><?php echo $row['PNF'] ?></td>
                            <td class=" text-center"><?php echo $row['correo'] ?></td>
                            <td class=" text-center"><?php echo $row['telefono'] ?></td>

                            <td>
                                <a href="actualizar.php?id=<?php echo $row['id'] ?>" class="text text-decoration-none btn btn-secondary ms-4 ">
                                    Actualizar
                                </a>
                                <a href=" borrar.php?id=<?php echo $row['id'] ?>" class="text text-decoration-none btn btn-danger ms-4">
                                    Borrar
                                </a>

                            </td>
                        </tr>
                    <?php } ?>

                </tbody>

            </table>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include("/xampp/htdocs/30.555.219/includes/footer.php") ?>