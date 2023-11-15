<?php 
    include('connection.php');
    $con = connection();

    $id=$_GET['id'];
    
    $sql = "SELECT * FROM diferencias WHERE id='$id'";
    $query = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR DIFERENCIA</title>

    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <div class="users-form">
        <form action="edit.php" method="POST">
            <h1>EDITAR DIFERENCIA</h1>

            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="text" name="dni" placeholder="DNI" value="<?= $row['dni'] ?>">
            <input type="text" name="empleado" placeholder="Nombre del empleado" value="<?= $row['empleado'] ?>">
            <input type="text" name="cantidad" placeholder="Cantidad" value="<?= $row['cantidad'] ?>">
            <input type="text" name="estado" placeholder="¿Excedente o faltante?" value="<?= $row['estado'] ?>">

            <input type="submit" value="Actualizar información">
        </form>
    </div>
</body>
</html>