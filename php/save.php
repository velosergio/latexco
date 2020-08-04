<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include("database.php");

if (isset($_POST['Guardar'])){
    //Adquisicion de todas las variables
    $producto = $_POST['producto'];
    $tipoP = $_POST['tipoP'];
    $tipoE = $_POST['tipoE'];
    $tipoA = $_POST['tipoA'];
    // Comprobar tipo de porducto
    if ($tipoP == null){
        if($tipoE == null){
            $tipo = $_POST['tipoA'];
        } else { $tipo = $_POST['tipoE']; }
    } else { $tipo = $_POST['tipoP']; }
    // Comprobar Presentacion Pintura
    $presentacionP1 = $_POST['presentacionP1'];
    $presentacionP2 = $_POST['presentacionP2'];
    //Si PresentacionP1 esta vacio entonces PresentacionP es Presentacion P2
    if ($presentacionP1 == null ){
        $presentacionP = $_POST['presentacionP2'];
    } else { $presentacionP = $_POST['presentacionP1']; }
    //Comprobar Presentación Estucos
    $presentacionE1 = $_POST['presentacionE1'];
    $presentacionE2 = $_POST['presentacionE2'];
    $presentacionE3 = $_POST['presentacionE3'];
    //Validamos si cual presentacion tiene valor, si E1 no tiene valor se valida E2 y luego E3
    // Si ninguna presentacion tiene valor se asigna PresentacionE = presentacionE3
    if ( $presentacionE1 == null ){
        if ($presentacionE2 == null ){
            $presentacionE = $_POST['presentacionE3'];
        } else { $presentacionE = $_POST['presentacionE2']; }
    } else { $presentacionE = $_POST['presentacionE1']; }
    //Mastic y Aditivos no requieren comprobacion pues solo hay una variable (M1 y A1), ver esto en la
    //comprobacion final de la eleccion del usuario
    $presentacionM1 = $_POST['presentacionM1'];
    $presentacionA1 = $_POST['presentacionA1'];
    //Comprobacion Presentacion Pegamento
    $presentacionPEGA1 = $_POST['presentacionPEGA1'];
    $presentacionPEGA2 = $_POST['presentacionPEGA2'];
    if ($presentacionPEGA1 == null){
        $presentacionPEGA = $_POST['presentacionPEGA2'];
    } else { $presentacionPEGA = $_POST['presentacionPEGA1']; }
    //Ahora comprobamos cual de las presentaciones es la electa por el usuario:
    if ($presentacionP == null){
        if ($presentacionE == null){
            if ($presentacionM1 == null){
                if ($presentacionA1 == null){
                    if($presentacionPEGA == null){
                        $presentacion = "No seleccionado, confirmar con cliente";
                    } else { $presentacion = $presentacionPEGA; }
                } else { $presentacion = $_POST['presentacionA1']; }
            } else { $presentacion = $_POST['presentacionM1']; }
        } else { $presentacion = $presentacionE; }
    } else { $presentacion = $presentacionP; }
    $color = $_POST['color'];
    $unidades = $_POST['unidades'];
    $direccion = $_POST['direccion'];
    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $detalles = $_POST['detalles'];

    $query = "INSERT INTO pedidos(producto,tipo,presentacion,color,unidades,direccion,nombre,ciudad,
    telefono,email,detalles)
    VALUES ('$producto','$tipo','$presentacion','$color','$unidades','$direccion','$nombre','$ciudad',
    '$telefono','$email','$detalles')";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("El Query Fallo");
    }

    //Enviar_Correo();
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    // La creación de instancias y pasar `true` permite excepciones
    $mail = new PHPMailer(true);
    
    try {
    //Configuracion del Servidor
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through "editado"
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'contacto.latexco@gmail.com';           // SMTP username
    $mail->Password   = 'jo_rzQwjY';                            // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Destinatarios
    $mail->setFrom('contacto.latexco@gmail.com', 'Latexco');    // Emisor
    $mail->addAddress($email, $nombre);                         // Receptor -> Cliente
    $mail->addAddress('contacto.latexco@gmail.com', 'Latexco'); // Receptor -> Copia a Latexco

    // Contenido
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Nuevo pedido en Latexco.com.co';
    $mail->Body    =  '<b>Hola! </b> <br/> hay un nuevo pedido en Latexco.com.co <br/>'
    .$nombre.' solicita ' .$unidades .' '.$producto.', tipo '.$tipo.' en presentacion '.$presentacion
    .'<br/> Podra contactar a '.$nombre.' al numero: '.$telefono.' o al correo electronico '.$email
    .'<br/> El ciente tiene domicilio en '.$direccion. ' en la ciudad '.$ciudad
    .'<br/> <br/> Este es un mensaje generado automaticamente por Latexco.com.co <b>NO RESPONDER!</b>';

    $mail->send();
    header("Location: ../gracias.php");
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
 