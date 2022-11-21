<?php

// echo "<pre>";
//     var_dump($_FILES);
// echo "</pre>";

$nombre_imagen = $_FILES["image"]["name"];  
$ruta_temporal = $_FILES["image"]["tmp_name"];
$ruta_a_mover = "images/$nombre_imagen";

move_uploaded_file($ruta_temporal, $ruta_a_mover);

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
    <img src="<?= $ruta_a_mover ?>" alt="">
</body>
</html>

