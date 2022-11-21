<?php

echo "<pre>";
    var_dump($_POST);
echo "</pre>";

$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

// Una funcion para que no se interprete como html
$htmlName = htmlentities($name);
$escaparCaracterUsername = addslashes($username);  // Para los caracteres especiales hacen escapar esos caracteres
// Para remplazar caracteres, usamos expresiones regulares
$soloTextoUsername = preg_replace("/\d/", "", $username);
$soloNumerosUsername = preg_replace("/\D/", "", $username);

// Validar email 
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validar edad
$age = filter_var($email, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
</head>
<body>
    <h3>El usuario puede mandar datos sanatisados y se pueden interpretar como html</h3>
    <p>Nombre:</p>
    <?= $htmlName ?>

    <p>Username:</p>
    <?= $escaparCaracterUsername ?>

    <p>Username sin Numeros: </p>
    <?= $soloTextoUsername ?>

    <p>Username sin Texto: </p>
    <?= $soloNumerosUsername ?>

    <p>Edad sin decimal: </p>
    <?= $age ?>

</body>
</html>
