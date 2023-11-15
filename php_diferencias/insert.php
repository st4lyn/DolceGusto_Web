<?php 
    include('connection.php');
    $con = connection();

    $id = null;
    $dni = $_POST['dni'];
    $empleado = $_POST['empleado'];
    $cantidad = $_POST['cantidad'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO diferencias VALUES('$id', '$dni', '$empleado', '$cantidad', '$estado')";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: index.php");
    };
?>