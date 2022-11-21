<?php

// Otra variable global para archivos
// echo "<pre>";
//     var_dump($_FILES);
// echo "</pre>";

// $_FILes es un arreglo, dentro esta image y accedemos a su campo name
$nombreimagen = $_FILES["image"]["name"];  // 

echo $nombreimagen;