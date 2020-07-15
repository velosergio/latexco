<?php

include("database.php");

if (isset($_POST['Guardar'])){
    $producto = $_POST['producto'];
    $tipoP = $_POST['tipoP'];
    $tipoE = $_POST['tipoE'];
    $presentacionP1 = $_POST['presentacionP1'];
    $presentacionP2 = $_POST['presentacionP2'];
    $presentacionE1 = $_POST['presentacionE1'];
    $presentacionE2 = $_POST['presentacionE2'];
    $presentacionE3 = $_POST['presentacionE3'];
    $presentacionM1 = $_POST['presentacionM1'];
    $color = $_POST['color'];
    $unidades = $_POST['unidades'];
    $direccion = $_POST['direccion'];
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $detalles = $_POST['detalles'];

    $query = "INSERT INTO pedidos(producto,tipoP,tipoE,presentacionP1,presentacionP2,presentacionE1,
    presentacionE2,presentacionE3,presentacionM1, color,unidades,direccion,nombre,ciudad,telefono,
    email,detalles)
    VALUES ('$producto','$tipoP','$tipoE','$presentacionP1','$presentacionP2','$presentacionE1',
    '$presentacionE2','$presentacionE3','$presentacionM1', '$color','$unidades','$direccion', '$nombre',
    '$ciudad','$telefono','$email','$detalles')";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed");
    }

    header("Location: ../gracias.php");

}
?>
 