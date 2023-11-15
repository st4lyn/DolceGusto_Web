<?php
    include('connection.php');
    $con = connection();

    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];

    $sql = "UPDATE productos SET codigo='$codigo', descripcion='$descripcion', stock='$stock' WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: index.php");
    };
?>