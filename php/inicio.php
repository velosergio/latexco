<?php
 
include("database.php");
session_start();
 
if (isset($_POST['log'])) { 
 
    $email = $_POST['email']; 
    $password = $_POST['password'];

    $query = $connect->prepare("SELECT * FROM usuarios WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Existe un error, por favor verifique las credenciales</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            header("Location: ../index.php");
        } else {
            echo '<p class="error">El email o la contraseña no se encuentran registradas</p>';
        }
    }

    $query->execute();

}
 
?>