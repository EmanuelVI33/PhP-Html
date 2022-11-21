<?php

require("./mailer.php");  // Llamar otro archivo

function validar($name, $email, $subject, $message) 
{
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";
if ( isset($_POST["form"]) ) {
    if ( validar($_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"]) ) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        // Mandar email
        $body = "$name < $email > te envia el siguiente mensaje: <br><br> $message"; 

        sendMail($subject, $body, $email, $name, true);

        $status = "success";
    } else {
        $status = "danger";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Formulario de Contactos</title>
</head>
<body>

    <?php if( $status == "success" ): ?>
    <div class="alert successful">
        <h3>Datos enviadados exitosamete</h3>   
    </div>
    <?php endif; ?>

    <?php if( $status == "danger" ): ?>
    <div class="alert danger">
        <h3>Error, los datos no fueron enviados al servidor</h3>
    </div>
    <?php endif; ?>

    <div class="container">
        <form action="./" method="post">
            <h1>
                Registro de Cliente
            </h1>

            <div class="input-container">
                <label for="name">Nombre: </label>
                <input type="text" id="name" name="name" placeholder="Ingresa tu Nombre">
            </div>

            <div class="input-container">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Correo Electronico">
            </div>

            <div class="input-container">
                <label for="subject">Asunto:</label>
                <input type="text" id="subject" name="subject" placeholder="Asunto del Mensaje">
            </div>

            <div class="input-message">
                <label for="message">Mensaje</label>
                <textarea name="message" id="message"></textarea>
            </div>

            <!-- <input type="submit" class="btn-submit"> -->
            <button name="form" type="submit" class="btn-submit">Enviar</button>
        </form>

        <div class="info">
            <div class="address-info">
                <p>Av. Cotoca, Zona Pampa de la Isla <i class="fa-solid fa-map-location-dot"></i></p>
            </div>

            <p>+591 62064184 <i class="fa-solid fa-phone"></i></p>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/2989636ed8.js" crossorigin="anonymous"></script>
</body>
</html>