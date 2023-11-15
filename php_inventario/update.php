<?php 
    include('connection.php');
    $con = connection();

    $id=$_GET['id'];
    
    $sql = "SELECT * FROM productos WHERE id='$id'";
    $query = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR PRODUCTO</title>

    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="users-form">
        <form action="edit.php" method="POST">
            <h1>EDITAR PRODUCTO</h1>

            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="codigo" placeholder="Codigo" value="<?= $row['codigo'] ?>">
            <input type="text" name="descripcion" placeholder="Descripcion" value="<?= $row['descripcion'] ?>">
            <input type="text" name="stock" placeholder="Stock" value="<?= $row['stock'] ?>">

            <input type="submit" value="Actualizar información">
        </form>
    </div>
</body>
</html>