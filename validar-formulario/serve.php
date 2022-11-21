<?php

// isset funcion que devuelve true si se estan enviando al servidor
if ( isset($_POST["name"]) && !empty($_POST["name"]) ) { // empty valida si esta vacio
    echo "Su nombre es " . $_POST["name"] . " !!";
} else {
    echo "No ha enviado datos al servidor";
}


// if ( isset($_POST["envio"]) ) {  // Si se envio el formulario
//     echo "Se Envio el Formulario";
// } else {
//     echo "No se envia los datos";
// }
