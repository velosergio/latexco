<?php
// Inicializar la sesion
session_start();

// Comprobacion del estado del usuario, si no esta loggeado redirecionar
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
// Importar configuracion de Database
include ("php/database.php");

// Definir variables e inicializar con valores vacios
$email = $password = "";
$email_err = $password_err = "";

// Proceso de los datos
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // Verificar si el email esta vacio
  if(empty(trim($_POST["email"]))){
    $email_err = "Por favor ingrese un correo electornico valido.";
  } else{
    $email = trim($_POST["email"]);
  }
  // Verificar si la contraseña esta vacia
    if(empty(trim($_POST["password"]))){
      $password_err = "Por favor ingrese su contraseña.";
  } else{
      $password = trim($_POST["password"]);
  }

  // Validar credenciales
  if(empty($email_err) && empty($password_err)){
    // Preparar la declaracion
    $sql = "SELECT id, nombre, email, password FROM usuarios WHERE email = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Vincular variables a la declaración preparada como parámetros
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        
        // Establecer parametros
        $param_email = $email;
        
        // Ejecutar la declaración preparada
        if(mysqli_stmt_execute($stmt)){
            // Almacenar resultado
            mysqli_stmt_store_result($stmt);
            
            // Verificar si el email exists, si es asi verficar contraseña
            if(mysqli_stmt_num_rows($stmt) == 1){                    
                // Vincular resultados
                mysqli_stmt_bind_result($stmt, $id, $nombre, $email, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        // Iniciar sesion si es correcta la contraseña
                        session_start();
                        
                        // Almacenando datos de la sesion
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["nombre"] = $nombre;                       
                        
                        // Redireccionar a la pagina de pedidos
                        header("location: index.php");
                    } else{
                        // Mensaje de error si la contraseña no coincide
                        $password_err = "La contraseña que has ingresado no es válida.";
                    }
                }
            } else{
                // Muestra un mensaje de error si el nombre de usuario no existe
                $email_err = "No existe cuenta registrada con ese correo electronico.";
            }
        } else{
            echo "Algo salió mal, por favor vuelve a intentarlo.";
        }
    }
    // Cerrar delcaracion
    mysqli_stmt_close($stmt);
  }
    // Cerrar conexion
    mysqli_close($link);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Latexco - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Bienvenido de nuevo!</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email"
                      name="email" aria-describedby="emailHelp" placeholder="Correo electronico">
                      <span class="help-block"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password"
                      name="password" placeholder="Contraseña">
                      <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recordar</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Ingresar">
                    </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot.php">Olvidar Contraseña</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Crear cuenta</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
