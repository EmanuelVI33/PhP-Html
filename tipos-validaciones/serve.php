<?php
    
// Tenemos una funcion para validaciones, si es true devuelve el dato caso contrario devuelve false
$is_float = filter_var("0.6", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

$is_int = filter_var("345", FILTER_VALIDATE_INT, FILTER_FLAG_ALLOW_THOUSAND);

$is_ip = filter_var("127.0.0.1", FILTER_VALIDATE_IP);

$is_url = filter_var("https://platzi.com", FILTER_VALIDATE_URL);

var_dump($is_float);

var_dump($is_int);

var_dump($is_ip);

var_dump($is_url);