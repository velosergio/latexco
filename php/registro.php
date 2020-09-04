<?php

include("database.php");
session_start();
 
if (isset($_POST['register'])) {
 
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = $connect->prepare("SELECT * FROM usuarios WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
 
    if ($query->rowCount() == 0) {

        $query = $connect->prepare("INSERT INTO usuarios(nombre,direccion,ciudad,telefono,EMAIL,PASSWORD)
        VALUES (:nombre,:direccion,:ciudad,:telefono,:email,:password_hash)");
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("direccion", $direccion, PDO::PARAM_STR);
        $query->bindParam("ciudad", $ciudad, PDO::PARAM_STR);
        $query->bindParam("telefono", $telefono, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            header("Location: ../pedido.php");
        } else {
            echo '<p class="error"> Un error ocurrio, porfavor intentalo de nuevo...</p>';
        }
    }

    $query->execute();

}

?>
 