<?php
    $bandera = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h1>Esto no es buena practica</h1>
    <?php
        if ($bandera) {
            echo "Verdadero";
        } else {
            echo "Falso";
        };
    ?>

    <h1>Esto es aceptable</h1>
    <?php if ($bandera) { ?>
        <p>Verdadero</p>
    <?php } else {?>
        <p>Falso</p>
    <?php }; ?>

    <h1>La mejor forma</h1>
    <?php if($bandera): ?>
        <b>Verdadero</b>
    <?php else: ?>
        <b>Falso</b>
    <?php endif; ?>

</body>
</html>