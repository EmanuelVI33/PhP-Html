<?php

// Para debbugear
// echo "<pre>";
//     var_dump($_GET);
// echo "</pre>";

$nombre = $_GET["name"];
$edad = $_GET["edad"];

echo "El Usuario $nombre tiene $edad anos de edad.";
