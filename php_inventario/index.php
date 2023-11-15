<?php 
    include('connection.php');

    $con = connection();

    $sql = "SELECT * FROM productos";
    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTARIO | DolceGusto</title>

    <!-- LINK STYLE.CSS -->
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    
    <div class="users-form">
        <form action="insert.php" method="POST">
            <h1>AGREGAR PRODUCTO</h1>

            <input type="text" name="codigo" placeholder="Codigo">
            <input type="text" name="descripcion" placeholder="Descripción">
            <input type="text" name="stock" placeholder="Stock">

            <input type="submit" value="Agregar producto">
        </form>
    </div>

    <div class="users-table">
        <h2>LISTADO DE PRODUCTOS</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CODIGO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>STOCK</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['codigo'] ?></th>
                    <th> <?= $row['descripcion'] ?></th>
                    <th> <?= $row['stock'] ?></th>

                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="delete.php?id= <?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>