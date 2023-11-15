<?php 
    include('connection.php');

    $con = connection();

    $sql = "SELECT * FROM diferencias";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIFERENCIAS | DolceGusto</title>

    <!-- LINK STYLE.CSS -->
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    
    <div class="users-form">
        <form action="insert.php" method="POST">
            <h1>AGREGAR DIFERENCIA</h1>

            <input type="text" name="dni" placeholder="DNI">
            <input type="text" name="empleado" placeholder="Nombre del empleado">
            <input type="text" name="cantidad" placeholder="Cantidad">
            <input type="text" name="estado" placeholder="¿Excedente o faltante?">

            <input type="submit" value="Agregar diferencia">
        </form>
    </div>

    <div class="users-table">
        <h2>LISTADO DE DIFERENCIAS</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>EMPLEADO(A)</th>
                    <th>CANTIDAD</th>
                    <th>ESTADO</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['dni'] ?></th>
                    <th> <?= $row['empleado'] ?></th>
                    <th> <?= $row['cantidad'] ?></th>
                    <th> <?= $row['estado'] ?></th>

                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id= <?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>