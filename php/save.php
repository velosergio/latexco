<?php

include("database.php");

if (isset($_POST['Guardar'])){
    $producto = $_POST['producto'];
    $tipo = $_POST['tipo'];
    $presentacion = $_POST['presentacion'];
    $color = $_POST['color'];
    $unidades = $_POST['unidades'];
    $direccion = $_POST['direccion'];
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $detalles = $_POST['detalles'];

    $query = "INSERT INTO pedidos(producto,tipo,presentacion,color,unidades,direccion,nombre,ciudad,telefono,email,detalles)
    VALUES ('$producto','$tipo','$presentacion','$color','$unidades','$direccion','$nombre','$ciudad','$telefono','$email','$detalles')";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed");
    }

    header("Location: ../gracias.php");

}
?>
 