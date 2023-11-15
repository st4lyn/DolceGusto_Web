<?php
    include('connection.php');
    $con = connection();

    $id = $_POST['id'];
    $dni = $_POST['dni'];
    $empleado = $_POST['empleado'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];

    $sql = "UPDATE diferencias SET dni='$dni', empleado='$empleado', cantidad='$cantidad', estado='$estado' WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: index.php");
    };
?>