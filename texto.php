<?php
    $nombre = "Emanuel Aroldo Vaca Ibanez";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etiqueta desde PHP</title>
</head>
<body>
    <?php
        echo "<b>Etiqueta B con PHP</b>";
    ?>

    <!-- Otra forma para imprimir -->
    <?=
        "<i>Etiqueta italica desde PHP</i>"
    ?>

    <!-- HTML dinamico -->
    <h1>
        Hola mi nombre es: <?= $nombre ?>
    </h1>

    
</body>
</html>