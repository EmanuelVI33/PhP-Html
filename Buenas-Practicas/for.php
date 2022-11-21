<?php
    $tabla_del_9 = [];

    for ($number=1; $number <= 10; $number++) { 
        $resultado = 9 * $number;
        $texto = "9 * $number = $resultado";
        array_push($tabla_del_9, $texto);   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabla del 9</h1>

    <ul>
        <!-- No es buena practica mezclar PHP con HTML -->
        <?php foreach($tabla_del_9 as $resultado): ?>

        <li> <?= $resultado?> </li>

        <?php endforeach; ?>
    </ul>

    <ul>
        <!-- No es buena practica mezclar PHP con HTML -->
        <?php for ($i=1; $i <= 10; $i++): ?>

        <li>9 * <?= $i ?> = <?= (9 * $i) ?> </li>

        <?php endfor; ?>
    </ul>
</body>
</html>