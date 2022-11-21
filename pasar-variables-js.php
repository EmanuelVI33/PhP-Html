<?php
    $usuarios = array (
        array (
            "id" => 1,
            "username" => "Emanuel Vaca"
        ),

        array (
            "id" => 2,
            "username" => "Rafael Roca"
        ),

        array (
            "id" => 3,
            "username" => "Roberto Suarez"
        )
    );

    $edad = 19;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables a JS</title>
</head>
<body>
    <h1>Pasando Variables a JS</h1>

    <p>
        Se puede pasar variable a JS desde el mismo archivo, no de archivo externo
    </p>

    <br>

    <p>
        Esto es posible porque las variables que le pasamos estan dentro de nuestro archivo .php
    </p>

    <br>

    <h3>Pasar variables de JS a PHP</h3>
    <p>
        Hacer esto no tiene sentido debido a que PHP es un prepocesador de ejecuta en el servidor
        luego se manda al navegador para que visualice el usuario los cambios, no tiene sentido
        devolverlo con JS
    </p>

    <br>

    <p>
        Esto se ve mas adelante con asincronismo
    </p>
    
    <script>
        // JSON.parse convierte una string a JSON
        let usuarios = JSON.parse('<?= json_encode($usuarios) ?>'); // json_encode convierte un arreglo a una string json
        console.log(usuarios);
        let edad = '<?= $edad ?>';
        console.log(edad);
    </script>
</body>
</html>