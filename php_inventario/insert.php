<?php 
    include('connection.php');
    $con = connection();

    $id = null;
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $stock = $_POST['stock'];

    $sql = "INSERT INTO productos VALUES('$id', '$codigo', '$descripcion', '$stock')";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: index.php");
    };
?>